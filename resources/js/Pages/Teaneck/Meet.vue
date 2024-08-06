<script setup>
import AppLayout from "@/Layouts/TeaneckLayout.vue";

defineProps({
    events: Array,
});

const images = [
    "Carme_ House_captain.jpg",
    "Document_15.jpg",
    "Grandparents_visit.jpg",
    "Khan_family_included_adopted_sibling_Banu.jpg",
    "My_parents.jpg",
    "New_clothes_only_on_holidays.jpg",
    "Parents_with_3_girls_boy_on_the_way.jpg",
    "Picture_of_my_family._The_little_girl_is_me..jpg",
    "Third_girl_to_upper_middle_class_parents.jpg",
];
</script>

<template>
    <AppLayout>
        <div class="mx-auto max-w-7xl px-6 pb-8 lg:px-8">
            <div class="border-b border-gray-900/10 pb-12">
                <h2
                    class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"
                >
                    Meet Reshma
                </h2>
            </div>

            <ul role="list" class="space-y-6 mt-6">
                <li class="relative flex gap-x-4">
                    <div
                        class="flex-auto rounded-md p-3 ring-1 ring-inset ring-gray-200"
                    >
                        <div class="text-md leading-6 text-gray-500 mt-4">
                            <div class="grid grid-cols-1 gap-1">
                                <div
                                    v-for="(image, imageIdx) in images"
                                    :key="imageIdx"
                                >
                                    <div
                                        :class="[
                                            videoIdx == 0 ? 'mt-0' : 'mt-4',
                                        ]"
                                    >
                                        <div class="text-lg">
                                            {{
                                                image
                                                    .replaceAll("_", " ")
                                                    .split(".")[0]
                                            }}
                                        </div>
                                        <a
                                            :href="
                                                '/storage/assets/events/' +
                                                image
                                            "
                                            target="_blank"
                                        >
                                            <img
                                                class="w-full"
                                                :src="
                                                    '/storage/assets/meet/' +
                                                    image
                                                "
                                                alt="Reshma Image"
                                            />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </AppLayout>
</template>

<style scoped></style>
