<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";

defineProps({
    contactUs: Array,
});
</script>

<template>
    <AppLayout title="Contact Us">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Contact Us
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div
                    class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4"
                >
                    <ul role="list" class="divide-y divide-gray-100">
                        <li
                            v-for="contact in contactUs"
                            :key="contact.id"
                            class="flex gap-x-4 py-5"
                        >
                            <div class="flex-auto">
                                <div
                                    class="flex items-baseline justify-between gap-x-4"
                                >
                                    <p
                                        class="text-sm font-semibold leading-6 text-gray-900"
                                    >
                                        {{ contact.first_name }}
                                        {{ contact.last_name }}
                                    </p>
                                    <p class="flex-none text-xs text-gray-600">
                                        <time :datetime="contact.created_at">{{
                                            contact.created_at
                                        }}</time>
                                    </p>
                                </div>
                                <p
                                    class="mt-1 truncate text-xs leading-5 text-gray-500"
                                >
                                    {{ contact.email }}
                                </p>
                                <p
                                    class="mt-1 line-clamp-2 text-sm leading-6 text-gray-600"
                                >
                                    {{ contact.message }}
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
