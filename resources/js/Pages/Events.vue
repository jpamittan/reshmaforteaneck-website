<script setup>
import { Link } from "@inertiajs/vue3";
import AppLayout from "@/Layouts/AppLayout.vue";

defineProps({
    events: Array,
});
</script>

<template>
    <AppLayout title="Events">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Events
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex flex-row-reverse">
                    <Link
                        :href="route('admin.addEvent')"
                        class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 mr-4 sm:mr-0"
                    >
                        Add Event
                    </Link>
                </div>
                <div
                    class="mt-8 bg-white overflow-hidden shadow-xl sm:rounded-lg p-4"
                >
                    <ul role="list" class="space-y-6 mt-6">
                        <li
                            v-for="(event, eventIdx) in events"
                            :key="event.id"
                            class="relative flex gap-x-4"
                        >
                            <div
                                :class="[
                                    eventIdx === events.length - 1
                                        ? 'h-6'
                                        : '-bottom-6',
                                    'absolute left-0 top-0 flex w-6 justify-center',
                                ]"
                            >
                                <div class="w-px bg-gray-200"></div>
                            </div>
                            <div
                                class="relative flex h-6 w-6 flex-none items-center justify-center bg-white"
                            >
                                <div
                                    class="h-1.5 w-1.5 rounded-full bg-gray-100 ring-1 ring-gray-300"
                                ></div>
                            </div>
                            <div
                                class="flex-auto rounded-md p-3 ring-1 ring-inset ring-gray-200"
                            >
                                <div class="flex justify-between gap-x-4">
                                    <div
                                        class="py-0.5 text-md leading-5 text-gray-500"
                                    >
                                        <Link
                                            :href="
                                                route(
                                                    'admin.viewEvent',
                                                    event.id
                                                )
                                            "
                                            class="font-medium text-blue-400 underline"
                                        >
                                            {{ event.title }}
                                        </Link>
                                    </div>
                                    <time
                                        v-if="event.event_date"
                                        :datetime="event.event_date"
                                        class="flex-none py-0.5 text-md leading-5 text-gray-500"
                                    >
                                        {{ event.event_date }}
                                    </time>
                                    <div
                                        v-else
                                        class="flex-none py-0.5 text-md leading-5 text-gray-500"
                                    >
                                        TBD
                                    </div>
                                </div>
                                <div
                                    v-if="event.details"
                                    class="text-md leading-6 text-gray-500 mt-4"
                                    v-html="event.details"
                                ></div>
                                <div
                                    class="text-md leading-6 text-gray-500 mt-4"
                                >
                                    <div
                                        :class="[
                                            'grid gap-1',
                                            event.images.length === 1
                                                ? 'grid-cols-1'
                                                : 'grid-cols-2',
                                        ]"
                                    >
                                        <div
                                            v-for="(
                                                image, imageIdx
                                            ) in event.images"
                                            :key="imageIdx"
                                        >
                                            <a
                                                :href="
                                                    '/storage/assets/events/' +
                                                    image
                                                "
                                                target="_blank"
                                            >
                                                <img
                                                    class="w-full h-[28rem]"
                                                    :src="
                                                        '/storage/assets/events/' +
                                                        image
                                                    "
                                                    alt="Event Image"
                                                />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="text-md leading-6 text-gray-500 mt-4"
                                >
                                    <div class="grid grid-cols-2 gap-1">
                                        <div
                                            v-for="(
                                                video, videoIdx
                                            ) in event.videos"
                                            :key="videoIdx"
                                        >
                                            <video autoplay loop muted>
                                                <source
                                                    :src="
                                                        '/storage/assets/events/' +
                                                        video
                                                    "
                                                    type="video/mp4"
                                                />
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
