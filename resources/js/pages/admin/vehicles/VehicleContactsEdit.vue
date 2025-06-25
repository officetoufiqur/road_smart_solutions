<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import { EllipsisIcon, PenIcon, PlusIcon } from 'lucide-vue-next';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Vehicles Contact Edit',
        href: '/vehicle/contacts',
    }
];

</script>

<template>

    <Head title="Users" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 md:px-10">
            <div class="min-h-screen p-6">
                <div class="max-w-5xl">
                    <div class="bg-white rounded-lg shadow-sm border border-gray-200 mb-6 p-6">
                        <div class="flex items-center justify-between relative">
                            <div class="lg:flex items-center space-x-4">
                                <div
                                    class="w-16 h-16 rounded-full bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center">
                                    <img src="/placeholder.svg?height=64&width=64" alt="Masheke Banda"
                                        class="w-14 h-14 rounded-full object-cover" />
                                </div>
                                <div>
                                    <h1 class="text-xl font-semibold text-gray-900">Masheke Banda</h1>
                                    <div class="lg:flex space-x-6 text-sm text-gray-500 mt-1">
                                        <div><span>Group</span>
                                            <p>-</p>
                                        </div>
                                        <div>
                                            <span>Email</span>
                                            <p class="text-red-500 mt-1 text-xs">Saifulux@gmail.com</p>
                                        </div>
                                        <div>
                                            <span>Classification</span>
                                            <p>-</p>
                                        </div>
                                        <div>
                                            <span>User Type</span>
                                            <p>-</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:flex items-center space-x-2 mt-5 lg:mt-0 absolute lg:right-2 right-0 top-[-1rem] space-y-3 lg:space-y-0">
                                <button class="px-3 py-1 border rounded-md transition-colors">
                                    <EllipsisIcon class="w-5 h-5" />
                                </button>
                                <button
                                    class="px-4 py-1.5 border text-xs border-gray-300 rounded-md font-medium text-gray-700 bg-white hover:bg-gray-50 transition-colors flex items-center">
                                    <PenIcon class="w-3 h-3 mr-2" />
                                    Edit
                                </button>
                                <button
                                    class="px-4 py-1.5 bg-red-500 text-white rounded-md text-xs font-medium hover:bg-red-600 transition-colors flex items-center">
                                    <PlusIcon class="w-4 h-4 mr-2" />
                                    Add
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="max-w-4xl">
                        <div class="lg:col-span-3 space-y-6">
                            <div class="bg-white rounded-lg shadow-sm border border-gray-200">
                                <div class="px-6 py-4 border-b border-gray-200">
                                    <h2 class="text-lg font-medium text-gray-900">Personal Information</h2>
                                </div>
                                <div class="p-6 space-y-6">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 border-b border-gray-200 pb-3">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">First
                                                Name</label>
                                            <p class="text-sm text-gray-400">Masheke</p>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">Last
                                                Name</label>
                                            <p class="text-sm text-gray-400">Banda</p>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 border-b border-gray-200 pb-3">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">Middle
                                                Name</label>
                                            <p class="text-sm text-gray-400">Gibo</p>
                                        </div>
                                        <div>
                                            <p>-</p>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6  border-b border-gray-200 pb-3">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">Email
                                                address</label>
                                            <p class="text-sm text-gray-400">saifulux@gmail.com</p>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">Phone</label>
                                            <p class="text-sm text-gray-400">+255 123 456 789</p>
                                        </div>
                                    </div>


                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6  border-b border-gray-200 pb-3">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">DOB</label>
                                            <p class="text-sm text-gray-400">28 May 2025</p>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">Gender</label>
                                            <p class="text-sm text-gray-400">Male</p>
                                        </div>

                                    </div>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6  border-b border-gray-200 pb-3">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">Drivers License
                                                Expiry</label>
                                            <p class="text-sm text-gray-400">28 May 2025</p>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">License
                                                Number</label>
                                            <p class="text-sm text-gray-400">123456</p>
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="bg-white rounded-lg shadow-sm border border-gray-200">
                                <div class="px-6 py-4 border-b border-gray-200">
                                    <h2 class="text-lg font-medium text-gray-900">Address</h2>
                                </div>
                                <div class="p-6 space-y-6">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 border-b border-gray-200 pb-2">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">Country</label>
                                            <p class="text-sm text-gray-400">Zambia</p>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">City</label>
                                            <p class="text-sm text-gray-400">Lusaka</p>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 border-b border-gray-200 pb-2">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">Street</label>
                                            <p class="text-sm text-gray-400">20 Macdonald Rd</p>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">Postal
                                                Code</label>
                                            <p class="text-sm text-gray-400">12345</p>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 border-b border-gray-200 pb-2">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">Start
                                                Date</label>
                                        </div>
                                        <div>
                                            <p>-</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </AppLayout>
</template>
