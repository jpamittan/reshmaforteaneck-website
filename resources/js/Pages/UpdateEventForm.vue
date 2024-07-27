<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import InputLabel from "@/Components/InputLabel.vue";
import InputError from "@/Components/InputError.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import Editor from "@tinymce/tinymce-vue";
import { PhotoIcon, XMarkIcon } from "@heroicons/vue/24/solid";
import { computed } from "vue";
import { useForm, usePage } from "@inertiajs/vue3";

const props = defineProps({
    eventObj: Object,
});

const page = usePage();

const updateform = useForm({
    csrf_token: computed(() => page.props.csrf_token),
    title: props.eventObj.title,
    details: props.eventObj.details,
    event_date: props.eventObj.event_date,
    images: props.eventObj.images,
    new_images: [],
});

const deleteform = useForm({
    csrf_token: computed(() => page.props.csrf_token),
    id: computed(() => props.eventObj.id),
});

const submit = () => {
    updateform.put(route("admin.updateEvent", props.eventObj.id));
};

const handleImageUpload = (event) => {
    for (let [key, value] of Object.entries(event.target.files)) {
        let existingImage = updateform.new_images.find(
            (image) => image.name === value.name
        );
        if (!existingImage) {
            updateform.new_images.push({
                name: value.name,
                path: URL.createObjectURL(value),
                file: value,
            });
        }
    }
};

const removeImage = (image) => {
    updateform.images = updateform.images.filter((img) => img !== image);
};

const removeNewImage = (image) => {
    updateform.new_images = updateform.new_images.filter(
        (img) => img.name !== image.name
    );
};

const deleteEvent = (event) => {
    event.preventDefault();
    if (confirm("Are you sure you want to delete this event?")) {
        deleteform.delete(route("admin.deleteEvent", props.eventObj.id));
    }
};
</script>

<template>
    <AppLayout title="Contact Us">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Add Event
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div
                    class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4"
                >
                    <form
                        @submit.prevent="submit"
                        enctype="multipart/form-data"
                    >
                        <div>
                            <input
                                type="hidden"
                                v-model="updateform.csrf_token"
                            />
                            <InputLabel for="title" value="Event Title" />
                            <TextInput
                                id="title"
                                v-model="updateform.title"
                                type="text"
                                class="my-2 block w-full"
                                required
                                autofocus
                                autocomplete="title"
                            />
                            <InputError
                                class="my-4"
                                :message="updateform.errors.title"
                            />
                        </div>
                        <InputLabel
                            for="details"
                            value="Event Details"
                            class="mt-4 mb-2"
                        />
                        <Editor
                            id="details"
                            api-key="cqg3dvm27bgf3janjvprnihb37w1f0f2hnj6rowyajr5ytlv"
                            :init="{
                                toolbar_mode: 'sliding',
                                plugins:
                                    'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount linkchecker',
                                toolbar:
                                    'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
                            }"
                            v-model="updateform.details"
                        />
                        <InputError
                            class="my-4"
                            :message="updateform.errors.details"
                        />
                        <div>
                            <InputLabel
                                for="event_date"
                                value="Event Date"
                                class="mt-4"
                            />
                            <input
                                type="date"
                                id="event_date"
                                v-model="updateform.event_date"
                                class="my-2 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm my-2 block w-full"
                            />
                            <InputError
                                class="my-4"
                                :message="updateform.errors.date"
                            />
                        </div>
                        <div>
                            <InputLabel
                                for="file-upload"
                                value="Event Images"
                                class="mt-4"
                            />
                            <div
                                class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-4 py-4"
                            >
                                <div class="text-center">
                                    <PhotoIcon
                                        class="mx-auto h-12 w-12 text-gray-300"
                                        aria-hidden="true"
                                    />
                                    <div
                                        class="mt-4 flex text-sm leading-6 text-gray-600 justify-center"
                                    >
                                        <label
                                            for="file-upload"
                                            class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500"
                                        >
                                            <span>Upload files</span>
                                            <input
                                                id="file-upload"
                                                name="file-upload"
                                                type="file"
                                                class="sr-only"
                                                multiple="multiple"
                                                @change="handleImageUpload"
                                                accept="image/*"
                                            />
                                        </label>
                                    </div>
                                    <p class="text-xs leading-5 text-gray-600">
                                        PNG, JPG, GIF up to 20MB
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div
                                class="grid grid-cols-1 md:grid-cols-4 gap-1 mt-4"
                            >
                                <div
                                    v-for="(
                                        image, imageIdx
                                    ) in updateform.images"
                                    :key="imageIdx"
                                >
                                    <XMarkIcon
                                        class="mx-auto h-8 w-8 text-red-400 absolute"
                                        aria-hidden="true"
                                        @click="removeImage(image)"
                                    />
                                    <img
                                        class="w-full"
                                        :src="'/storage/assets/events/' + image"
                                        alt="Event Image"
                                    />
                                </div>
                                <div
                                    v-for="(
                                        image, imageIdx
                                    ) in updateform.new_images"
                                    :key="imageIdx"
                                >
                                    <XMarkIcon
                                        class="mx-auto h-8 w-8 text-red-400 absolute"
                                        aria-hidden="true"
                                        @click="removeNewImage(image)"
                                    />
                                    <img
                                        class="w-full"
                                        :src="image.path"
                                        alt="Event Image"
                                    />
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex flex-row-reverse mt-4">
                                <PrimaryButton type="submit">
                                    Update
                                </PrimaryButton>
                                <button
                                    class="inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 focus:bg-red-700 active:bg-red-900 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150 mr-2"
                                    @click="deleteEvent"
                                >
                                    Delete
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
