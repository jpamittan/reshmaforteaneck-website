<script setup>
import AppLayout from "@/Layouts/TeaneckLayout.vue";
import Notification from "@/Components/Teaneck/Notification.vue";
import axios from "axios";
import { reactive } from "vue";
import { router } from "@inertiajs/vue3";

defineProps({});

const contactUsForm = reactive({
    first_name: null,
    last_name: null,
    email: null,
    message: null,
});

const notification = reactive({
    title: "",
    subtitle: "",
    isShow: false,
    isError: false,
});

function submit() {
    axios
        .post("/api/contact-us", contactUsForm)
        .then((res) => {
            notification.title = "Success";
            notification.subtitle =
                "Thank you for your message. We will get back to you.";
            notification.isShow = true;
            notification.isError = false;

            contactUsForm.first_name = null;
            contactUsForm.last_name = null;
            contactUsForm.email = null;
            contactUsForm.message = null;
        })
        .catch((error) => {
            notification.title = "Ooops";
            notification.subtitle = error.response.data.message;
            notification.isShow = true;
            notification.isError = true;
        });
}
</script>

<template>
    <AppLayout>
        <form
            class="mx-auto max-w-7xl px-6 pb-8 lg:px-8"
            @submit.prevent="submit"
        >
            <div class="border-b border-gray-900/10 pb-12">
                <h2
                    class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"
                >
                    Contact Us
                </h2>
                <p class="mt-6 text-base leading-7 text-gray-600">
                    Get involved. Volunteer with Reshma - become a block captain
                </p>

                <div
                    class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6"
                >
                    <div class="sm:col-span-3">
                        <label
                            for="first-name"
                            class="block text-sm font-medium leading-6 text-gray-900"
                            >First name</label
                        >
                        <div class="mt-2">
                            <input
                                v-model="contactUsForm.first_name"
                                type="text"
                                name="first-name"
                                id="first-name"
                                autocomplete="given-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                maxlength="100"
                                required
                            />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label
                            for="last-name"
                            class="block text-sm font-medium leading-6 text-gray-900"
                            >Last name</label
                        >
                        <div class="mt-2">
                            <input
                                v-model="contactUsForm.last_name"
                                type="text"
                                name="last-name"
                                id="last-name"
                                autocomplete="family-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                maxlength="100"
                                required
                            />
                        </div>
                    </div>

                    <div class="sm:col-span-6">
                        <label
                            for="email"
                            class="block text-sm font-medium leading-6 text-gray-900"
                            >Email address</label
                        >
                        <div class="mt-2">
                            <input
                                v-model="contactUsForm.email"
                                id="email"
                                name="email"
                                type="email"
                                autocomplete="email"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                maxlength="100"
                                required
                            />
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label
                            for="message"
                            class="block text-sm font-medium leading-6 text-gray-900"
                            >Message</label
                        >
                        <div class="mt-2">
                            <textarea
                                v-model="contactUsForm.message"
                                id="message"
                                name="message"
                                rows="3"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                maxlength="1000"
                                required
                            />
                        </div>
                    </div>
                </div>
                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button
                        type="submit"
                        class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600"
                    >
                        Submit
                    </button>
                </div>
            </div>
        </form>
    </AppLayout>

    <Notification
        :title="notification.title"
        :subtitle="notification.subtitle"
        :is-show="notification.isShow"
        :isError="notification.isError"
        @close="notification.isShow = false"
    ></Notification>
</template>

<style scoped></style>
