<script setup>
import { Disclosure, DisclosureButton, DisclosurePanel } from "@headlessui/vue";
import { Bars3Icon, XMarkIcon } from "@heroicons/vue/24/outline";
import { computed, reactive, ref } from "vue";
import { Head, Link, usePage } from "@inertiajs/vue3";

defineProps({});
const title = ref("Reshma Khan");
const page = usePage();
const url = computed(() => page.url);
const year = computed(() => page.props.year);
const navigation = [
    {
        name: "Home",
        href: route("home.index"),
        path: "/",
    },
    {
        name: "Reshma for Teaneck ",
        href: route("act-blue.index"),
        path: "/reshma-for-teaneck",
    },
    {
        name: "Why I deserve your vote",
        href: route("community.index"),
        path: "/community",
    },
    {
        name: "Contact us",
        href: route("contact-us.index"),
        path: "/contact-us",
    },
    {
        name: "Important dates",
        href: route("important-dates.index"),
        path: "/important-dates",
    },
];
</script>

<template>
    <div>
        <Head :title="title" />

        <div class="bg-white px-6 pt-4 sm:pt-8 lg:px-8">
            <div
                class="mx-auto w-100 lg:max-w-3xl text-center p-8 border-2 border-black"
            >
                <h2
                    class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl"
                >
                    RESHMA FOR TEANECK
                </h2>
            </div>
            <Disclosure
                as="nav"
                v-slot="{ open }"
                class="mx-auto flex max-w-7xl items-start lg:justify-center py-6 lg:p-6 lg:px-8"
                aria-label="Global"
            >
                <div class="flex lg:hidden">
                    <div
                        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700"
                    >
                        <!-- Mobile menu button -->
                        <DisclosureButton
                            class="relative inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-900 focus:ring-offset-2"
                        >
                            <span class="absolute -inset-0.5" />
                            <span class="sr-only">Open main menu</span>
                            <Bars3Icon
                                v-if="!open"
                                class="block h-6 w-6"
                                aria-hidden="true"
                            />
                            <XMarkIcon
                                v-else
                                class="block h-6 w-6"
                                aria-hidden="true"
                            />
                        </DisclosureButton>
                    </div>
                </div>
                <DisclosurePanel class="sm:hidden w-full px-4">
                    <div class="space-y-1 pb-3 pt-2">
                        <DisclosureButton
                            v-for="nav in navigation"
                            :key="nav.name"
                            as="a"
                            :href="nav.href"
                            :class="[
                                url === nav.path
                                    ? 'border-blue-900 bg-blue-50 text-blue-700'
                                    : 'border-transparent text-gray-600 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-800',
                                'block border-l-4 py-2 pl-3 pr-4 text-base font-medium',
                            ]"
                            :aria-current="
                                url === nav.path ? 'page' : undefined
                            "
                        >
                            {{ nav.name }}
                        </DisclosureButton>
                    </div>
                </DisclosurePanel>
                <div class="hidden lg:flex lg:gap-x-12 text-4xl">
                    <Link
                        v-for="nav in navigation"
                        :key="nav.name"
                        :href="nav.href"
                        :class="`text-sm font-semibold leading-6 text-black uppercase ${
                            url === nav.path
                                ? 'underline underline-offset-8'
                                : ''
                        }`"
                    >
                        {{ nav.name }}
                    </Link>
                </div>
            </Disclosure>
        </div>

        <div class="container mx-auto">
            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>

        <footer class="bg-white" aria-labelledby="footer-heading">
            <h2 id="footer-heading" class="sr-only">Footer</h2>
            <div class="mx-auto max-w-7xl px-6 pb-8 lg:px-8">
                <div class="mt-8 md:flex md:items-center md:justify-between">
                    <p
                        class="mt-8 text-xs leading-5 text-gray-500 md:order-1 md:mt-0"
                    >
                        &copy; ReshmaForTeaneck {{ year }}. All rights reserved.
                        Paid for by Khan for Council. 189 Hillside Ave, Teaneck
                        NJ 07666
                    </p>
                </div>
            </div>
        </footer>
    </div>
</template>
