<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link } from '@inertiajs/vue3';
import { CheckIcon, SearchIcon, TrashIcon, XIcon } from 'lucide-vue-next';
import { ref } from 'vue';


const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Add Coverage',
        href: '/coverage',
    }
];

const showModal = ref(false)

const closeModal = () => {
    showModal.value = false
}

</script>

<template>

    <Head title="Add Coverage" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <div class="flex justify-end">
                <Link href="/service/search"
                    class="text-white duration-300 cursor-pointer text-[14px] px-8 py-2.5 rounded bg-[#CA2026]">Back
                </Link>
            </div>
            <div class="flex gap-5 mt-5">
                <div class=" w-2/3">
                    <div class="border bg-white p-8 rounded-xl shadow">
                        <!-- Title & Status -->
                        <div class="">
                            <div class="md:col-span-2 space-y-4">
                                <label class="block text-sm font-medium text-gray-700">Title</label>
                                <input type="text" value="Change of Ownership"
                                    class="w-full border text-sm border-gray-300 rounded px-4 py-2" />

                                <label class="block text-sm font-medium text-gray-700">Description</label>
                                <textarea rows="2" class="w-full text-sm border border-gray-300 rounded px-4 py-2 pl"
                                    placeholder="Transfer of Ownership between persons or entities"></textarea>

                                <div class="mb-4">
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Media</label>

                                    <!-- Hidden file input -->
                                    <input id="fileUpload" type="file" class="hidden" />

                                    <!-- Upload area -->
                                    <label for="fileUpload"
                                        class="flex items-center justify-center space-x-5 border-2 border-dashed border-red-300 bg-red-50 rounded-lg h-32 cursor-pointer hover:bg-red-100 transition">
                                        <CloudDownloadIcon class="w-8 h-8 text-red-600" />
                                        <div class="text-center">
                                            <p class="text-sm text-gray-700">
                                                Drag and drop or <span class="text-red-600 underline">browse</span> to
                                                choose file
                                            </p>
                                            <p class="text-xs text-gray-500">Accepts image, videos, or 3D models</p>
                                        </div>
                                    </label>
                                </div>

                                <label class="block text-sm font-medium text-gray-700">Category</label>
                                <select class="w-full text-sm border border-gray-300 rounded px-4 py-2">
                                    <option>Compliance</option>
                                </select>
                                <p class="text-xs text-gray-500">Compliance > Change of Details</p>
                            </div>
                        </div>


                    </div>
                    <div class="border bg-white p-8 rounded-xl shadow mt-5">
                        <!-- Items -->
                        <div class="mt-5">
                            <h2 class="text-lg font-semibold mb-4">Items</h2>
                            <div class="space-y-4">
                                <div class="grid grid-cols-4 gap-4 items-center">
                                    <div class="">
                                        <label class="block text-sm font-medium text-gray-500 pb-1">Item</label>
                                        <select class="w-full text-sm border border-gray-300 rounded px-4 py-2">
                                            <option>Spark Plugs</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-500 pb-1">Quantity</label>
                                        <input type="text"
                                            class="w-full text-sm border border-gray-300 rounded px-4 py-2" value="4">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-500 pb-1">Amount</label>
                                        <input type="text"
                                            class="w-full text-sm border border-gray-300 rounded px-4 py-2" value="230">
                                    </div>
                                    <TrashIcon class="bg-[#CA2026] cursor-pointer text-white p-[3px] mt-5 rounded" />
                                </div>

                                <div class="grid grid-cols-4 gap-4 items-center">
                                    <div class="">
                                        <select class="w-full text-sm border border-gray-300 rounded px-4 py-2">
                                            <option>Air Filter</option>
                                        </select>
                                    </div>
                                    <div>
                                        <input type="text"
                                            class="w-full text-sm border border-gray-300 rounded px-4 py-2" value="1">
                                    </div>
                                    <div>
                                        <input type="text"
                                            class="w-full text-sm border border-gray-300 rounded px-4 py-2" value="200">
                                    </div>
                                    <TrashIcon class="bg-[#CA2026] cursor-pointer text-white p-[3px] rounded" />
                                </div>

                                <div class="grid grid-cols-4 gap-4 items-center">
                                    <div class="">
                                        <select class="w-full text-sm border border-gray-300 rounded px-4 py-2">
                                            <option>Cabin Filter</option>
                                        </select>
                                    </div>
                                    <div>
                                        <input type="text"
                                            class="w-full text-sm border border-gray-300 rounded px-4 py-2" value="1">
                                    </div>
                                    <div>
                                        <input type="text"
                                            class="w-full text-sm border border-gray-300 rounded px-4 py-2" value="200">
                                    </div>
                                    <TrashIcon class="bg-[#CA2026] cursor-pointer text-white p-[3px] rounded" />
                                </div>

                                <div class="grid grid-cols-4 gap-4 items-center">
                                    <div class="">
                                        <select class="w-full text-sm border border-gray-300 rounded px-4 py-2">
                                            <option>Select option</option>
                                        </select>
                                    </div>
                                    <div>
                                        <input type="text"
                                            class="w-full text-sm border border-gray-300 rounded px-4 py-2">
                                    </div>
                                    <div>
                                        <input type="text"
                                            class="w-full text-sm border border-gray-300 rounded px-4 py-2">
                                    </div>
                                    <TrashIcon class="bg-[#CA2026] cursor-pointer text-white p-[3px] rounded" />

                                    <div class="">
                                        <label class="block text-sm font-medium text-gray-500 pb-1">Package
                                            Discount</label>
                                        <select class="w-full text-sm border border-gray-300 rounded px-4 py-2">
                                            <option>35% off</option>
                                        </select>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <!-- Excess -->
                        <div class="mt-5">
                            <h2 class="text-lg font-semibold mb-4">Coverages</h2>
                            <div class="space-y-4">
                                <div class="flex justify-between items-center border-y py-3 border-gray-300 px-5">
                                    <p class="text-sm">Third Party Liability</p>
                                    <div class="flex items-center gap-5">
                                        <select class="w-full text-sm ">
                                            <option>Included</option>
                                        </select>
                                        <TrashIcon
                                            class="bg-[#CA2026] cursor-pointer w-10 h-6 text-white p-[4px] rounded" />
                                    </div>
                                </div>

                                <!-- Coverage Section -->
                                <div @click="showModal = true">
                                    <p class="font-semibold text-sm text-gray-700 cursor-pointer">+ Add Coverage</p>
                                </div>

                                <div v-if="showModal"
                                    class="fixed inset-0 flex items-center bg-gray-600/85 justify-center p-4 z-50">
                                    <!-- Modal Content -->
                                    <div class="border bg-white shadow rounded-lg p-10 w-full max-w-2xl relative">
                                        <!-- Modal Header -->
                                        <div
                                            class="flex justify-between items-center mb-6 border-b py-3 border-gray-300">
                                            <h2 class="text-lg font-semibold text-gray-800">Select Coverage</h2>
                                            <div class="text-gray-400 hover:text-gray-600">
                                                <XIcon @click="closeModal"
                                                    class="cursor-pointer text-[#CA2026] bg-[#FCF2F2] w-9 h-9 rounded p-2" />
                                            </div>
                                        </div>

                                        <!-- Form -->
                                        <form class="space-y-4">
                                            <!-- Search -->
                                            <div class="relative mb-6">
                                                <input type="text" placeholder="Search coverage"
                                                    class="w-full pl-10 pr-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-red-300" />
                                                <div class="absolute left-3 top-2.5 text-red-500">
                                                    <SearchIcon class="h-5 w-5" />
                                                </div>
                                            </div>

                                            <!-- List Items -->
                                            <div class="space-y-4">
                                                <!-- Item -->
                                                <div class="flex items-center justify-space-around space-x-5 border-b pb-4 border-gray-200">
                                                    <input type="checkbox" class="w-3 h-3" />
                                                    <img src="https://img.freepik.com/free-psd/black-isolated-car_23-2151852894.jpg?semt=ais_items_boosted&w=740" alt="car"
                                                        class="w-10 h-10  border rounded" />
                                                    <span class="text-sm">Third Party Liability</span>
                                                </div>

                                                <div class="flex items-center space-x-5 border-b pb-4 border-gray-200">
                                                    <input type="checkbox" class="w-3 h-3" />
                                                    <img src="https://img.freepik.com/free-psd/black-isolated-car_23-2151852894.jpg?semt=ais_items_boosted&w=740" alt="car"
                                                        class="w-10 h-10 border rounded" />
                                                    <span class="text-sm">Comprehensive</span>
                                                </div>

                                                <div class="flex items-center space-x-5">
                                                    <input type="checkbox" class="w-3 h-3" />
                                                    <img src="https://img.freepik.com/free-psd/black-isolated-car_23-2151852894.jpg?semt=ais_items_boosted&w=740" alt="car"
                                                        class="w-10 h-10 border rounded" />
                                                    <span class="text-sm">Fire & Theft</span>
                                                </div>
                                            </div>

                                            <!-- Action Buttons -->
                                            <div class="flex space-x-3 pt-4">
                                                <button type="submit"
                                                    class="bg-[#CA2026] text-sm cursor-pointer hover:bg-red-600 text-white px-6 py-2 rounded font-medium">
                                                    Save
                                                </button>
                                                <button type="button" @click="closeModal"
                                                    class="bg-gray-200 text-sm cursor-pointer hover:bg-gray-300 text-gray-700 px-6 py-2 rounded font-medium">
                                                    Cancel
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Excess -->
                        <div class="mt-5">
                            <h2 class="text-lg font-semibold mb-4 border-b border-gray-200 pb-2">Excess</h2>

                            <div class="grid gap-4 mt-5">
                                <div class="space-y-4">
                                    <div class="flex space-x-5">
                                        <select class="col-span-1 w-full text-sm border px-4 py-2 rounded">
                                            <option>10% Minimum on each and every Claim</option>
                                        </select>
                                        <div class="flex items-center gap-2">
                                            <TrashIcon class="bg-[#CA2026] cursor-pointer text-white p-[3px] rounded" />
                                        </div>
                                    </div>
                                    <div class="flex space-x-5">
                                        <select class="col-span-1 w-full text-sm border px-4 py-2 rounded">
                                            <option></option>
                                        </select>
                                        <div class="flex items-center gap-2">
                                            <TrashIcon class="bg-[#CA2026] cursor-pointer text-white p-[3px] rounded" />
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Eligibility -->
                        <div class="mt-5">
                            <div class="flex justify-between mb-4 border-b border-gray-200 pb-2">
                                <h2 class="text-lg font-semibold ">Eligibility</h2>
                                <button class="text-[#CA2026] text-sm font-semibold">Edit</button>
                            </div>

                            <p class="text-sm text-[#707070] mt-5">Private Vehicle</p>
                        </div>

                    </div>
                </div>
                <div class=" w-1/3 space-y-4">
                    <div class="border bg-white p-8 rounded-xl shadow ">
                        <h1 class="font-semibold border-b border-gray-300 pb-2">Type</h1>
                        <div class="flex justify-between items-center mt-5">
                            <div class="space-x-2">
                                <input type="radio" class="cursor-pointer" id="core" name="type" value="core">
                                <label for="core" class="text-sm cursor-pointer">Single Item</label><br>
                            </div>
                            <div class="space-x-2">
                                <input type="radio" class="cursor-pointer" id="add-on" name="type" value="add-on">
                                <label for="add-on" class="text-sm cursor-pointer">Package</label><br>
                            </div>
                        </div>
                    </div>

                    <div class="border bg-white p-8 rounded-xl shadow ">
                        <h1 class="font-semibold border-b border-gray-300 pb-2">Markets</h1>
                        <div class="mt-5">
                            <div class="flex space-x-2">
                                <CheckIcon
                                    class="border-2 border-[#CA2026] cursor-pointer text-[#CA2026] p-[2px] w-4 h-4 rounded" />
                                <span class="text-sm text-[#343434]">International, United And Zambia</span>
                            </div>
                            <div class="flex space-x-2 mt-3">
                                <CheckIcon
                                    class="border-2 border-[#343434] cursor-pointer text-[#343434] p-[2px] w-4 h-4 rounded" />
                                <span class="text-sm text-[#343434]">International</span>
                            </div>
                        </div>
                    </div>

                    <div class="border bg-white p-8 rounded-xl shadow">
                        <h1 class="font-semibold border-b border-gray-300 pb-2">Insights</h1>
                        <div class="space-y-5">
                            <p class="text-sm text-[#707070] mt-5">Insights will display when the product has had recent
                                sales</p>
                        </div>
                    </div>

                    <div class="border bg-white p-8 rounded-xl shadow">
                        <h1 class="font-semibold border-b border-gray-300 pb-2">Status</h1>
                        <div class="space-y-5">
                            <p class="text-sm text-[#707070] mt-5">Active</p>
                            <select name="" id="" class="col-span-1 text-sm border px-4 py-2 rounded w-full">
                                <option value="">Active</option>
                            </select>
                        </div>
                    </div>


                </div>


            </div>
        </div>
    </AppLayout>
</template>