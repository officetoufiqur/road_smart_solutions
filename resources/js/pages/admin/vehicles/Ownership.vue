<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import { ChevronRightIcon, CarIcon } from 'lucide-vue-next';
import { Link } from '@inertiajs/vue3';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Vehicles',
        href: '/vehicles',
    }
];

</script>

<template>

    <Head title="Vehicles" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <section class="pt-10 lg:px-20 md:px-10 px-5">
            <div class="flex justify-between mb-4 items-center">
                <h2 class="text-lg font-semibold text-gray-500">
                    <CarIcon class="inline mt-[-6px] text-[#D93243] w-5.5 h-5.5" />
                    <ChevronRightIcon class="inline mt-[-4px] text-gray-500 w-4 h-4" />New Vehicle
                </h2>
                <Link :href="route('vehicles')"
                    class="bg-red-700 duration-300 cursor-pointer text-white md:text-[16px] text-[14px] px-8 py-2 rounded">
                Back</Link>
            </div>

            <div class="xl:flex gap-5">
                <div class="bg-white h-[15%] border rounded-lg shadow-sm  xl:w-1/1">
                    <!-- Tabs -->
                    <div class="border-b border-gray-200">
                        <nav class="lg:flex lg:space-x-8 px-6 py-5 lg:py-0">
                            <Link :href="route('add.vehicles')"
                                class="font-bold cursor-pointer md:text-[16px] text-[14px] px-2 py-2 rounded">
                            Details</Link>
                            <Link :href="route('specifications')"
                                class="font-bold cursor-pointer md:text-[16px] text-[16px] px-2 py-2 rounded">
                            Specifications </Link>
                            <Link :href="route('ownership')"
                                class="text-[#D93243] font-bold cursor-pointer md:text-[16px] text-[16px] px-2 py-2 rounded">
                            Ownership </Link>
                            <Link :href="route('administrative')"
                                class="font-bold cursor-pointer md:text-[16px] text-[16px] px-2 py-2 rounded">
                            Administrative </Link>
                        </nav>
                    </div>

                    <div class="p-6">
                        <div class="grid grid-cols-1 gap-6">
                            <!-- Main Form Content -->
                            <div class="lg:col-span-3">
                                <div class="grid grid-cols-1 gap-6 mt-5">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Owner
                                        </label>
                                        <select
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                            <option value="">Mary Chirwa</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            ID Number
                                        </label>
                                        <select
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                            <option value="">Owned</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Date of 1st registration
                                        </label>
                                        <input type="date"
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm"
                                            placeholder="Mon 21 September 2025">
                                    </div>
                                    <div>
                                        <p class="text-xs text-gray-500 border-b pb-3 mb-3">Registration Certificate</p>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Document
                                        </label>
                                        <input type="file"
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-10 xl:w-2/3 space-y-5">

                    <div class="bg-white border rounded-lg shadow-sm px-6 pt-5">
                        <h1 class="font-bold mb-6 border-b-2 pb-4">Vehicle Type</h1>

                        <div class="flex justify-between space-y-2 mb-6 mr-20">
                            <div class="flex items-center">
                                <input type="checkbox" id="dealer" class="h-3 w-3 text-blue-600 rounded">
                                <label for="dealer" class="ml-2 text-sm">Dealer</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="private" class="h-3 w-3 text-blue-600 rounded">
                                <label for="private" class="ml-2 text-sm">Private Seller</label>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white border rounded-lg shadow-sm px-6 pt-5">
                        <h1 class="font-bold mb-6 border-b-2 pb-4">Drive Side</h1>

                        <div class="flex justify-between space-y-2 mb-6 lg:mr-20">
                            <div class="flex items-center">
                                <input type="checkbox" id="dealer" class="h-3 w-3 text-blue-600 rounded">
                                <label for="dealer" class="ml-2 text-sm">Left-Side Drive</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="private" class="h-3 w-3 text-blue-600 rounded">
                                <label for="private" class="ml-2 text-sm">Right-Side Drive</label>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white border rounded-lg shadow-sm px-6 pt-5">
                        <h1 class="font-bold mb-6 border-b-2 pb-4">Independent Vehicle Inspection</h1>

                        <div class="flex justify-between space-y-2 mb-6 lg:mr-20">
                            <div class="flex items-center">
                                <input type="checkbox" id="dealer" class="h-3 w-3 text-blue-600 rounded">
                                <label for="dealer" class="ml-2 text-sm">Yes</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="private" class="h-3 w-3 text-blue-600 rounded">
                                <label for="private" class="ml-2 text-sm">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white border rounded-lg shadow-sm px-6 pt-5">
                        <h1 class="font-bold mb-6 border-b-2 pb-4">Previously Registered Overseas</h1>

                        <div class="flex justify-between space-y-2 mb-6 lg:mr-20">
                            <div class="flex items-center">
                                <input type="checkbox" id="dealer" class="h-3 w-3 text-blue-600 rounded">
                                <label for="dealer" class="ml-2 text-sm">Yes</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="private" class="h-3 w-3 text-blue-600 rounded">
                                <label for="private" class="ml-2 text-sm">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white border rounded-lg shadow-sm px-6 pt-5">
                        <h1 class="font-bold mb-6 border-b-2 pb-4">Use</h1>

                        <div class="flex justify-between space-y-2 mb-6 lg:mr-20">
                            <div class="flex items-center">
                                <input type="checkbox" id="dealer" class="h-3 w-3 text-blue-600 rounded">
                                <label for="dealer" class="ml-2 text-sm">Yes</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="private" class="h-3 w-3 text-blue-600 rounded">
                                <label for="private" class="ml-2 text-sm">No</label>
                            </div>
                        </div>
                    </div>

                    <!-- Save Button -->
                    <div class="flex justify-end mt-8">
                        <button
                            class="px-6 py-2 bg-red-600 text-white font-medium rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                            Save
                        </button>
                    </div>
                </div>



            </div>
        </section>
    </AppLayout>
</template>