<script setup>
import AppLayout from "@/Layouts/TeaneckLayout.vue";
import { router } from "@inertiajs/vue3";
import { ref } from "vue";
import {
    Dialog,
    DialogPanel,
    DialogTitle,
    TransitionChild,
    TransitionRoot,
} from "@headlessui/vue";
import { XMarkIcon } from "@heroicons/vue/24/outline";

defineProps({});

const open = ref(true);

const redirectActBlue = (amount) => {
    router.get(route("act-blue.index", { amount: amount }));
};
</script>

<template>
    <AppLayout>
        <div class="relative">
            <div class="mx-auto max-w-7xl lg:flex bg-[#0B2EAA]">
                <div
                    class="lg:flex lg:w-1/2 lg:shrink lg:grow-0 xl:inset-y-0 xl:right-1/2 xl:w-1/2"
                >
                    <div
                        class="relative h-[42rem] lg:-ml-8 lg:h-auto lg:w-full lg:grow xl:ml-0"
                    >
                        <img
                            class="absolute inset-0 h-full w-full object-cover object-center lg:object-cover lg:object-left"
                            src="storage/assets/reshma.webp"
                            alt="Reshma Khan"
                        />
                    </div>
                </div>
                <div class="px-6 lg:contents text-white">
                    <div
                        class="mx-auto max-w-2xl px-8 pb-24 pt-16 sm:pb-20 sm:pt-20 lg:ml-0 lg:mr-0 lg:w-full lg:max-w-lg lg:flex-none xl:w-1/2"
                    >
                        <h1
                            class="mt-2 text-lg font-bold tracking-tight sm:text-4xl"
                        >
                            Community organizer, Advocate, Bridge Builder,
                            Reshma Khan Do It!
                        </h1>
                        <p class="mt-6 text-lg leading-8">
                            "In our vibrant town, every face is familiar, every
                            story valued, and every person is my neighbor.
                            Together, we weave the rich tapestry of Teaneck,
                            bound by our shared humanity and a collective
                            resolve to uplift one another in unity and peace."
                        </p>
                        <p class="mt-6 text-lg leading-8">
                            Reshma Khan has been a transformative force in
                            Teaneck for nearly two decades, combining her
                            passion for civic engagement and community
                            leadership to drive significant change. A key
                            architect of the One Town One Vote (OTOV)
                            initiative, Reshma successfully campaigned to shift
                            local elections to November, boosting voter turnout
                            significantly. Her relentless pursuit for fairness
                            led to a landmark victory in New Jersey Superior
                            Court, cementing the initiative's success with 70%
                            voter approval.
                        </p>
                        <p class="mt-6 text-lg leading-8">
                            Beyond electoral logistics, Reshma's leadership
                            extends to her role as Vice Chair of a Voter
                            Registration effort, ensuring every vote is counted.
                            Her tenure as PTO President at the Academy of
                            Greatness & Excellence and roles on the Municipal
                            Open Space Trust and Advisory Board on Community
                            Relations underscore her commitment to community
                            development.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white py-24 sm:py-24">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div
                    class="mx-auto grid max-w-2xl grid-cols-1 items-start gap-x-8 gap-y-16 sm:gap-y-24 lg:mx-0 lg:max-w-none lg:grid-cols-2"
                >
                    <div class="lg:pr-4">
                        <div
                            class="relative overflow-hidden rounded-3xl bg-gray-900 px-6 pb-9 pt-64 shadow-2xl sm:px-12 lg:max-w-lg lg:px-8 lg:pb-8 xl:px-10 xl:pb-10"
                        >
                            <img
                                class="absolute inset-0 h-full w-full object-cover brightness-125 saturate-0"
                                src="storage/assets/reshma2.webp"
                                alt=""
                            />
                            <div
                                class="absolute inset-0 bg-gray-600 mix-blend-multiply"
                            ></div>
                            <div
                                class="absolute left-1/2 top-1/2 -ml-16 -translate-x-1/2 -translate-y-1/2 transform-gpu blur-3xl"
                                aria-hidden="true"
                            >
                                <div
                                    class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#F6EE05] to-[#F6EE05] opacity-40"
                                    style="
                                        clip-path: polygon(
                                            74.1% 44.1%,
                                            100% 61.6%,
                                            97.5% 26.9%,
                                            85.5% 0.1%,
                                            80.7% 2%,
                                            72.5% 32.5%,
                                            60.2% 62.4%,
                                            52.4% 68.1%,
                                            47.5% 58.3%,
                                            45.2% 34.5%,
                                            27.5% 76.7%,
                                            0.1% 64.9%,
                                            17.9% 100%,
                                            27.6% 76.8%,
                                            76.1% 97.7%,
                                            74.1% 44.1%
                                        );
                                    "
                                ></div>
                            </div>
                            <figure class="relative isolate">
                                <svg
                                    viewBox="0 0 162 128"
                                    fill="none"
                                    aria-hidden="true"
                                    class="absolute -left-2 -top-4 -z-10 h-32 stroke-white/20"
                                >
                                    <path
                                        id="0ef284b8-28c2-426e-9442-8655d393522e"
                                        d="M65.5697 118.507L65.8918 118.89C68.9503 116.314 71.367 113.253 73.1386 109.71C74.9162 106.155 75.8027 102.28 75.8027 98.0919C75.8027 94.237 75.16 90.6155 73.8708 87.2314C72.5851 83.8565 70.8137 80.9533 68.553 78.5292C66.4529 76.1079 63.9476 74.2482 61.0407 72.9536C58.2795 71.4949 55.276 70.767 52.0386 70.767C48.9935 70.767 46.4686 71.1668 44.4872 71.9924L44.4799 71.9955L44.4726 71.9988C42.7101 72.7999 41.1035 73.6831 39.6544 74.6492C38.2407 75.5916 36.8279 76.455 35.4159 77.2394L35.4047 77.2457L35.3938 77.2525C34.2318 77.9787 32.6713 78.3634 30.6736 78.3634C29.0405 78.3634 27.5131 77.2868 26.1274 74.8257C24.7483 72.2185 24.0519 69.2166 24.0519 65.8071C24.0519 60.0311 25.3782 54.4081 28.0373 48.9335C30.703 43.4454 34.3114 38.345 38.8667 33.6325C43.5812 28.761 49.0045 24.5159 55.1389 20.8979C60.1667 18.0071 65.4966 15.6179 71.1291 13.7305C73.8626 12.8145 75.8027 10.2968 75.8027 7.38572C75.8027 3.6497 72.6341 0.62247 68.8814 1.1527C61.1635 2.2432 53.7398 4.41426 46.6119 7.66522C37.5369 11.6459 29.5729 17.0612 22.7236 23.9105C16.0322 30.6019 10.618 38.4859 6.47981 47.558L6.47976 47.558L6.47682 47.5647C2.4901 56.6544 0.5 66.6148 0.5 77.4391C0.5 84.2996 1.61702 90.7679 3.85425 96.8404L3.8558 96.8445C6.08991 102.749 9.12394 108.02 12.959 112.654L12.959 112.654L12.9646 112.661C16.8027 117.138 21.2829 120.739 26.4034 123.459L26.4033 123.459L26.4144 123.465C31.5505 126.033 37.0873 127.316 43.0178 127.316C47.5035 127.316 51.6783 126.595 55.5376 125.148L55.5376 125.148L55.5477 125.144C59.5516 123.542 63.0052 121.456 65.9019 118.881L65.5697 118.507Z"
                                    />
                                    <use
                                        href="#0ef284b8-28c2-426e-9442-8655d393522e"
                                        x="86"
                                    />
                                </svg>
                                <blockquote
                                    class="mt-6 text-xl font-semibold leading-8 text-white"
                                >
                                    <p>
                                        Community organizer, Advocate, Bridge
                                        Builder, Reshma Khan Do It!
                                    </p>
                                </blockquote>
                            </figure>
                        </div>
                    </div>
                    <div>
                        <div
                            class="text-base leading-7 text-gray-700 lg:max-w-lg"
                        >
                            <p
                                class="ext-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"
                            >
                                Mission
                            </p>
                            <div class="max-w-xl">
                                <p class="mt-6">
                                    Mission is to cultivate a welcoming
                                    environment on the Teaneck Town Council,
                                    ensuring every resident feels represented
                                    and heard. I am dedicated to giving a voice
                                    to the voiceless and advancing equity
                                    through diverse representation. By embracing
                                    all perspectives, I am committed to
                                    refocusing Council business to issues that
                                    matter most to residents across the
                                    spectrum, creating policies that reflect the
                                    true spirit of our community, ensuring
                                    fairness and opportunity for every resident.
                                </p>
                            </div>
                        </div>
                        <div
                            class="text-base leading-7 text-gray-700 lg:max-w-lg mt-12"
                        >
                            <p
                                class="ext-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"
                            >
                                Vision
                            </p>
                            <div class="max-w-xl">
                                <p class="mt-6">
                                    Vision is a harmonious Teaneck—where bridges
                                    are built between communities, fostering
                                    peace, respect and cooperation. We strive to
                                    enhance quality of life for all residents,
                                    making Teaneck a beacon of inclusivity and
                                    responsiveness. Together, we envision a town
                                    where every voice contributes to shaping a
                                    vibrant, equitable future.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <TransitionRoot as="template" :show="open">
            <Dialog class="relative z-10" @close="open = false">
                <TransitionChild
                    as="template"
                    enter="ease-out duration-300"
                    enter-from="opacity-0"
                    enter-to="opacity-100"
                    leave="ease-in duration-200"
                    leave-from="opacity-100"
                    leave-to="opacity-0"
                >
                    <div
                        class="fixed inset-0 bg-gray-800 bg-opacity-80 transition-opacity"
                    />
                </TransitionChild>

                <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                    <div
                        class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0"
                    >
                        <TransitionChild
                            as="template"
                            enter="ease-out duration-300"
                            enter-from="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                            enter-to="opacity-100 translate-y-0 sm:scale-100"
                            leave="ease-in duration-200"
                            leave-from="opacity-100 translate-y-0 sm:scale-100"
                            leave-to="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                        >
                            <DialogPanel
                                class="relative transform overflow-hidden rounded-lg bg-white px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-2xl sm:p-6"
                            >
                                <div
                                    class="absolute right-0 top-0 pr-4 pt-4 block"
                                >
                                    <button
                                        type="button"
                                        class="rounded-md bg-white text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                                        @click="open = false"
                                    >
                                        <span class="sr-only">Close</span>
                                        <XMarkIcon
                                            class="h-8 w-8"
                                            aria-hidden="true"
                                        />
                                    </button>
                                </div>
                                <div class="sm:flex sm:items-start">
                                    <div
                                        class="mx-auto flex flex-shrink-0 items-center justify-center rounded-full bg-red-100 mx-0 w-full sm:w-60"
                                    >
                                        <img
                                            class="w-full h-auto"
                                            src="/storage/assets/reshma3.webp"
                                            alt="Reshma Image"
                                        />
                                    </div>
                                    <div
                                        class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left"
                                    >
                                        <DialogTitle
                                            as="h3"
                                            class="text-base font-semibold leading-6 text-gray-900"
                                        >
                                            Meet Reshma
                                        </DialogTitle>
                                        <div class="mt-2">
                                            <p class="text-sm text-gray-500">
                                                Together we Khan do it. Are you
                                                with us? Join our campaign to
                                                elect Reshma Khan today.
                                            </p>
                                        </div>

                                        <div
                                            class="mt-5 sm:mt-4 flex justify-evenly"
                                        >
                                            <button
                                                type="button"
                                                class="inline-flex w-full justify-center rounded-md bg-blue-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-600 w-32 h-12 table"
                                                @click="redirectActBlue(150)"
                                            >
                                                $150
                                            </button>
                                            <button
                                                type="button"
                                                class="inline-flex w-full justify-center rounded-md bg-blue-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-600 sm:ml-3 sm:mt-0 w-32 h-12 table"
                                                @click="redirectActBlue(200)"
                                            >
                                                $200
                                            </button>
                                        </div>
                                        <div
                                            class="mt-5 sm:mt-4 flex justify-evenly"
                                        >
                                            <button
                                                type="button"
                                                class="inline-flex w-full justify-center rounded-md bg-blue-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-600 w-32 h-12 table"
                                                @click="redirectActBlue(500)"
                                            >
                                                $500
                                            </button>
                                            <button
                                                type="button"
                                                class="inline-flex w-full justify-center rounded-md bg-blue-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-600 sm:ml-3 sm:mt-0 w-32 h-12 table"
                                                @click="redirectActBlue(1000)"
                                            >
                                                $1000
                                            </button>
                                        </div>
                                        <div
                                            class="mt-5 sm:mt-4 flex justify-evenly"
                                        >
                                            <button
                                                type="button"
                                                class="inline-flex w-full justify-center rounded-md bg-blue-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-600 w-32 h-12 table"
                                                @click="redirectActBlue(2000)"
                                            >
                                                $2000
                                            </button>
                                            <button
                                                type="button"
                                                class="inline-flex w-full justify-center rounded-md bg-blue-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-600 sm:ml-3 sm:mt-0 w-32 h-12 table"
                                                @click="redirectActBlue(2500)"
                                            >
                                                $2500
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </DialogPanel>
                        </TransitionChild>
                    </div>
                </div>
            </Dialog>
        </TransitionRoot>
    </AppLayout>
</template>

<style scoped></style>
