<script setup>
import AppLayout from "@/Layouts/TeaneckLayout.vue";
import { CheckIcon, CalendarIcon } from "@heroicons/vue/20/solid";

defineProps({});
const timeline = [
    {
        id: 1,
        content: "Teaneck Day",
        date: "Sep 18",
        datetime: "2024-09-18",
        icon: CalendarIcon,
        iconBackground: "bg-gray-500",
    },
    {
        id: 2,
        content: "Voter Registration Deadline",
        date: "Oct 19",
        datetime: "2024-10-19",
        icon: CalendarIcon,
        iconBackground: "bg-gray-500",
    },
    {
        id: 3,
        content: "Early Voting Period",
        date: "Oct 20 - Nov 6",
        datetime: "2024-10-20",
        icon: CalendarIcon,
        iconBackground: "bg-gray-500",
    },
    {
        id: 4,
        content: "Deadline to Apply for a Mail-In Ballot",
        date: "Nov 1",
        datetime: "2024-11-01",
        icon: CalendarIcon,
        iconBackground: "bg-gray-500",
    },
    {
        id: 5,
        content: "Deadline for Mail in Ballots by 3:00pm",
        date: "Nov 7",
        datetime: "2024-11-07",
        icon: CalendarIcon,
        iconBackground: "bg-gray-500",
    },
    {
        id: 6,
        content: "Election Day",
        date: "Nov 8",
        datetime: "2024-11-08",
        icon: CalendarIcon,
        iconBackground: "bg-gray-500",
    },
];
</script>

<template>
    <AppLayout>
        <div class="flow-root p-8 lg:px-40">
            <ul role="list" class="-mb-8">
                <li v-for="(event, eventIdx) in timeline" :key="event.id">
                    <div class="relative pb-8">
                        <span
                            v-if="eventIdx !== timeline.length - 1"
                            class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-gray-200"
                            aria-hidden="true"
                        />
                        <div class="relative flex space-x-3">
                            <div>
                                <span
                                    :class="[
                                        event.iconBackground,
                                        'h-8 w-8 rounded-full flex items-center justify-center ring-8 ring-white',
                                    ]"
                                >
                                    <component
                                        :is="event.icon"
                                        class="h-5 w-5 text-white"
                                        aria-hidden="true"
                                    />
                                </span>
                            </div>
                            <div
                                class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5"
                            >
                                <div>
                                    <p class="text-sm text-gray-500">
                                        {{ event.content }}
                                    </p>
                                </div>
                                <div
                                    class="whitespace-nowrap text-right text-sm text-gray-500"
                                >
                                    <time :datetime="event.datetime">{{
                                        event.date
                                    }}</time>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="bg-white">
                <div class="p-8 sm:px-6 lg:px-8">
                    <div class="mx-auto max-w-2xl text-center">
                        <h2
                            class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"
                        >
                            Are you registered to vote?
                        </h2>
                        <p
                            class="mx-auto mt-6 max-w-xl text-lg leading-8 text-gray-600"
                        >
                            Click on the link below if you would like to
                            register to vote in the upcoming November 8th
                            election. The deadline is October 19th.
                        </p>
                        <div
                            class="mt-10 flex items-center justify-center gap-x-6"
                        >
                            <a
                                href="https://voter.svrs.nj.gov/register"
                                target="_blank"
                                class="rounded-md bg-red-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600"
                            >
                                Register to vote
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<style scoped></style>
