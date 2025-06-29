<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link } from '@inertiajs/vue3';
import { SearchIcon, TrashIcon, XIcon } from 'lucide-vue-next';
import { ref } from 'vue';


const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'View Coverage',
        href: '/coverage',
    }
];

const showModal = ref(false)

const closeModal = () => {
    showModal.value = false
}

</script>

<template>

    <Head title="View Coverage" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="py-10 lg:px-20 px-5">
            <div class="flex justify-end">
                <Link href="/service"
                    class="text-white duration-300 cursor-pointer text-[14px] px-8 py-2.5 rounded bg-[#CA2026]">Back
                </Link>
            </div>
            <div class="flex gap-5 mt-5">
                <div class=" w-1/3 space-y-4">
                    <div class="max-w-md w-full bg-white border shadow rounded-2xl p-10 space-y-4">

                        <!-- Top Header -->
                        <div class="flex items-center space-x-4">
                            <img src="https://img.freepik.com/free-psd/black-isolated-car_23-2151852894.jpg?semt=ais_items_boosted&w=740"
                                class="border w-15 h-12 rounded border-gray-200" alt="car" />
                            <div>
                                <div class="font-semibold text-sm">Third Party Insurance</div>
                                <div class="text-xs text-red-500">8 Variants</div>
                            </div>
                        </div>

                        <!-- Search -->
                        <div>
                            <input type="text" placeholder="Search variants"
                                class="w-full px-4 py-2 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-red-300 text-sm" />
                        </div>

                        <!-- Filter Buttons -->
                        <div class="flex flex-col space-y-2">
                            <select name="" id="" class="w-full border text-sm border-gray-300 rounded px-4 py-2">
                                <option value="">Vehicle Weight</option>
                            </select>
                            <select name="" id="" class="w-full border text-sm border-gray-300 rounded px-4 py-2">
                                <option value="">Engine Capacity</option>
                                <option value="">1000cc</option>
                                <option value="">2500cc</option>
                                <option value="">3500cc</option>
                            </select>
                        </div>

                        <!-- Variant List -->
                        <div class="space-y-4 pt-4">
                            <div class="flex items-center space-x-4">
                                <img src="https://img.freepik.com/free-psd/black-isolated-car_23-2151852894.jpg?semt=ais_items_boosted&w=740"
                                    class="w-14 h-10 rounded border border-gray-300" alt="car" />
                                <span class="text-sm">&lt;800kg / &lt;1000cc</span>
                            </div>

                            <div class="flex items-center space-x-4">
                                <img src="https://img.freepik.com/free-psd/black-isolated-car_23-2151852894.jpg?semt=ais_items_boosted&w=740"
                                    class="w-14 h-10 rounded border border-gray-300" alt="car" />
                                <span class="text-sm">Commercial Motor / 3–6 Months</span>
                            </div>

                            <div class="flex items-center space-x-4">
                                <img src="https://img.freepik.com/free-psd/black-isolated-car_23-2151852894.jpg?semt=ais_items_boosted&w=740"
                                    class="w-14 h-10 rounded border border-gray-300" alt="car" />
                                <span class="text-sm">Commercial Motor / 6–9 Months</span>
                            </div>

                            <div class="flex items-center space-x-4">
                                <img src="https://img.freepik.com/free-psd/black-isolated-car_23-2151852894.jpg?semt=ais_items_boosted&w=740"
                                    class="w-14 h-10 rounded border border-gray-300" alt="car" />
                                <span class="text-sm">Commercial Motor / Above 9 Months</span>
                            </div>
                        </div>

                    </div>


                </div>

                <div class=" w-2/3">
                    <div class="border bg-white p-8 rounded-xl shadow">
                        <!-- Title & Status -->
                        <div class="">
                            <div class="md:col-span-2 space-y-4">
                                <label class="block text-2xl font-medium text-gray-700">Options</label>
                                <input type="text" value="Vehicle Type"
                                    class="w-full border text-sm border-gray-300 rounded px-4 py-2" />

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
                                                <div
                                                    class="flex items-center justify-space-around space-x-5 border-b pb-4 border-gray-200">
                                                    <input type="checkbox" class="w-3 h-3" />
                                                    <img src="https://img.freepik.com/free-psd/black-isolated-car_23-2151852894.jpg?semt=ais_items_boosted&w=740"
                                                        alt="car" class="w-10 h-10  border rounded" />
                                                    <span class="text-sm">Third Party Liability</span>
                                                </div>

                                                <div class="flex items-center space-x-5 border-b pb-4 border-gray-200">
                                                    <input type="checkbox" class="w-3 h-3" />
                                                    <img src="https://img.freepik.com/free-psd/black-isolated-car_23-2151852894.jpg?semt=ais_items_boosted&w=740"
                                                        alt="car" class="w-10 h-10 border rounded" />
                                                    <span class="text-sm">Comprehensive</span>
                                                </div>

                                                <div class="flex items-center space-x-5">
                                                    <input type="checkbox" class="w-3 h-3" />
                                                    <img src="https://img.freepik.com/free-psd/black-isolated-car_23-2151852894.jpg?semt=ais_items_boosted&w=740"
                                                        alt="car" class="w-10 h-10 border rounded" />
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

                    <div class="border bg-white p-8 rounded-xl shadow mt-5">
                        <!-- Title & Status -->
                        <div class="">
                            <div class="md:col-span-2 space-y-4">
                                <div class="flex justify-between">
                                    <label class="block text-2xl font-medium text-gray-700">Options</label>
                                    <div>
                                        <p>See Pricing Options</p>
                                    </div>
                                </div>

                                <div class="grid grid-cols-2 gap-4 items-center">
                                    <div class="">
                                        <label class="block text-sm font-medium text-gray-500 pb-1">Formate</label>
                                        <select class="w-full text-sm border border-gray-300 rounded px-4 py-2">
                                            <option>Request-For-Service</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="grid grid-cols-2 gap-4 items-center">
                                    <div class="">
                                        <label class="block text-sm font-medium text-gray-500 pb-1">Price</label>
                                        <input type="text"
                                            class="w-full text-sm border border-gray-300 rounded px-4 py-2" value="ZMW">
                                    </div>
                                    <div class="">
                                        <label class="block text-sm font-medium text-gray-500 pb-1">Discount</label>
                                        <select class="w-full text-sm border border-gray-300 rounded px-4 py-2">
                                            <option>38% Off</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="border border-gray-300 mt-5 rounded-md p-5">
                                    <div>
                                        <h4 class="text-[#5D5D5D] font-medium">Short Period Rates</h4>
                                        <p class="text-[#707070] text-sm mt-2">Apply short period rates</p>
                                    </div>

                                    <div class="grid grid-cols-2 gap-4 items-center mt-5 border-b border-gray-300 pb-5">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-500 pb-1">Periods</label>
                                            <select class="w-full text-sm border border-gray-300 rounded px-4 py-2">
                                                <option>Quarterly</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="space-y-4">
                                    <div class="flex space-x-5 mt-5">
                                        <select class="col-span-1 w-full text-sm border px-4 py-2 rounded">
                                            <option>Period</option>
                                        </select>
                                        <input type="text" class="col-span-1 w-full text-sm border px-4 py-2 rounded" value="ZMW">
                                        <div class="flex items-center gap-2">
                                            <TrashIcon class="bg-[#CA2026] cursor-pointer text-white p-[3px] rounded" />
                                        </div>
                                    </div>
                                    <div class="flex space-x-5 mt-5">
                                        <select class="col-span-1 w-full text-sm border px-4 py-2 rounded">
                                            <option>Period</option>
                                        </select>
                                        <input type="text" class="col-span-1 w-full text-sm border px-4 py-2 rounded" value="ZMW">
                                        <div class="flex items-center gap-2">
                                            <TrashIcon class="bg-[#CA2026] cursor-pointer text-white p-[3px] rounded" />
                                        </div>
                                    </div>
                                    <div class="flex space-x-5 mt-5">
                                        <select class="col-span-1 w-full text-sm border px-4 py-2 rounded">
                                            <option>Period</option>
                                        </select>
                                        <input type="text" class="col-span-1 w-full text-sm border px-4 py-2 rounded" value="ZMW">
                                        <div class="flex items-center gap-2">
                                            <TrashIcon class="bg-[#CA2026] cursor-pointer text-white p-[3px] rounded" />
                                        </div>
                                    </div>
                                    <div class="flex space-x-5 mt-5">
                                        <select class="col-span-1 w-full text-sm border px-4 py-2 rounded">
                                            <option>Period</option>
                                        </select>
                                        <input type="text" class="col-span-1 w-full text-sm border px-4 py-2 rounded" value="ZMW">
                                        <div class="flex items-center gap-2">
                                            <TrashIcon class="bg-[#CA2026] cursor-pointer text-white p-[3px] rounded" />
                                        </div>
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