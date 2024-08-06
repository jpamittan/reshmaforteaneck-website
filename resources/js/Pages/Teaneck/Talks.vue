<script setup>
import AppLayout from "@/Layouts/TeaneckLayout.vue";

defineProps({});

const videos = [
    {
        title: "Reshma For Council Part 1",
        url: "https://d2ksp7h358sca7.cloudfront.net/assets/reshma/Reshma_For%20Council_Part_1.mp4",
    },
    {
        title: "Reshma For Council Part 2",
        url: "https://d2ksp7h358sca7.cloudfront.net/assets/reshma/Reshma_For%20Council_Part_2.mp4",
    },
];
</script>

<template>
    <AppLayout>
        <div class="mx-auto max-w-7xl px-6 pb-8 lg:px-8">
            <div class="border-b border-gray-900/10 pb-12">
                <h2
                    class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"
                >
                    Reshma's Talks
                </h2>
            </div>

            <ul role="list" class="space-y-6 mt-6">
                <li class="relative flex">
                    <div
                        class="flex-auto rounded-md p-3 ring-1 ring-inset ring-gray-200"
                    >
                        <div class="text-md leading-6 text-gray-500 mt-4">
                            <div class="grid grid-cols-1 gap-1">
                                <div
                                    v-for="(video, videoIdx) in videos"
                                    :key="videoIdx"
                                >
                                    <div
                                        :class="[
                                            videoIdx == 0 ? 'mt-0' : 'mt-4',
                                        ]"
                                    >
                                        <label>{{ video.title }}</label>
                                        <video controls class="mt-4">
                                            <source
                                                :src="video.url"
                                                type="video/mp4"
                                            />
                                        </video>
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
