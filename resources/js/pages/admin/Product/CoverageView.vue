<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import { CheckIcon, CloudDownloadIcon, MinusIcon, PlusIcon } from 'lucide-vue-next';


const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'View Coverage',
        href: '/coverage',
    }
];


</script>

<template>

    <Head title="View Coverage" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5 mb-20">
            <div class="flex justify-between items-center mb-10">
                <div class="flex gap-5">
                    <h1 class="text-2xl font-bold text-[#343434]">Third Party Liability</h1>
                    <button class="bg-[#6CCC34] text-white px-4 text-xs rounded cursor-pointer">Active</button>
                </div>
                <div class="flex gap-5">
                    <button
                        class="border border-gray-300 text-gray-600 px-4 py-2 text-sm rounded cursor-pointer">Duplicate</button>
                    <button
                        class="border border-gray-300 text-gray-600 px-4 py-2 text-sm rounded cursor-pointer">Preview</button>
                    <select name="" id="" class="bg-[#CA2026] text-white px-4 py-2 text-sm rounded cursor-pointer">
                        <option value="">Share</option>
                    </select>
                </div>
            </div>
            <div class="flex gap-5">
                <div class="border bg-white p-8 rounded-xl shadow w-2/3">
                    <div class=" gap-4">
                        <!-- Title & Status -->
                        <div class="">
                            <div class="md:col-span-2 space-y-4">
                                <label class="block text-sm font-medium text-gray-700">Title</label>
                                <input type="text" value="Tune up"
                                    class="w-full border text-sm border-gray-300 rounded px-4 py-2" />

                                <label class="block text-sm font-medium text-gray-700">Description</label>
                                <textarea rows="2" class="w-full text-sm border border-gray-300 rounded px-4 py-2 pl"
                                    placeholder="Replacement of spark plugs , air filter, air con filter for petrol engines"></textarea>

                                <div class="mb-4">
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Media</label>

                                    <!-- Hidden file input -->
                                    <input id="fileUpload" type="file" class="hidden" />

                                    <!-- Upload area -->
                                    <label for="fileUpload" class="flex items-center justify-center space-x-5 border-2 border-dashed border-red-300 bg-red-50 rounded-lg h-32 cursor-pointer hover:bg-red-100 transition">
                                        <CloudDownloadIcon class="w-8 h-8 text-red-600" />
                                        <div class="text-center">
                                        <p class="text-sm text-gray-700">
                                            Drag and drop or <span class="text-red-600 underline">browse</span> to choose file
                                        </p>
                                        <p class="text-xs text-gray-500">Accepts image, videos, or 3D models</p>
                                        </div>
                                    </label>
                                    </div>


                                
                                <label class="block text-sm font-medium text-gray-700">Category</label>
                                <select class="w-full text-sm border border-gray-300 rounded px-4 py-2">
                                    <option>Coverage</option>
                                </select>
                                <p class="text-xs text-[#707070]">Determines tax rates and adds metafields to improve
                                    search, filters, and cross-channel sales</p>
                            </div>
                        </div>

                        <!-- Coverage Limits -->
                        <div class="mt-5">
                            <h2 class="text-lg font-semibold mb-4">Coverage Limits</h2>
                            <div class="space-y-4">
                                <div class="grid grid-cols-4 gap-4">
                                    <input class="col-span-1 text-sm border px-4 py-2 rounded" value="100/300" />
                                    <select class="col-span-1 text-sm border px-4 py-2 rounded">
                                        <option>Per person/event</option>
                                    </select>
                                    <input type="number" value="1.5"
                                        class="col-span-1 text-sm border px-4 py-2 rounded" />
                                    <div class="flex items-center gap-2">
                                        <MinusIcon class="border-2 cursor-pointer text-gray-600 p-[2px] rounded" />
                                        <PlusIcon class="bg-[#CA2026] cursor-pointer text-white p-[2px] rounded" />
                                    </div>
                                </div>
                                <div class="grid grid-cols-4 gap-4">
                                    <input class="col-span-1 text-sm border px-4 py-2 rounded" value="100/200" />
                                    <select class="col-span-1 text-sm border px-4 py-2 rounded">
                                        <option>Per person/event</option>
                                    </select>
                                    <input type="number" value="1.5"
                                        class="col-span-1 text-sm border px-4 py-2 rounded" />
                                    <div class="flex items-center gap-2">
                                        <MinusIcon class="border-2 cursor-pointer text-gray-600 p-[2px] rounded" />
                                        <PlusIcon class="bg-[#CA2026] cursor-pointer text-white p-[2px] rounded" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Excess -->
                        <div class="mt-5">
                            <h2 class="text-lg font-semibold mb-4">Excess</h2>
                            <div class="space-y-4">
                                <div class="grid grid-cols-3 gap-4">
                                    <input class="col-span-1 text-sm border px-4 py-2 rounded" value="10%/500 min" />
                                    <select class="col-span-1 text-sm border px-4 py-2 rounded">
                                        <option>Each And Every Claim</option>
                                    </select>
                                    <div class="flex items-center gap-2">
                                        <MinusIcon class="border-2 cursor-pointer text-gray-600 p-[2px] rounded" />
                                        <PlusIcon class="bg-[#CA2026] cursor-pointer text-white p-[2px] rounded" />
                                    </div>
                                </div>
                                <div class="grid grid-cols-3 gap-4">
                                    <input class="col-span-1 text-sm border px-4 py-2 rounded" value="20%" />
                                    <select class="col-span-1 text-sm border px-4 py-2 rounded">
                                        <option>Underage Driver</option>
                                    </select>
                                    <div class="flex items-center gap-2">
                                        <MinusIcon class="border-2 cursor-pointer text-gray-600 p-[2px] rounded" />
                                        <PlusIcon class="bg-[#CA2026] cursor-pointer text-white p-[2px] rounded" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Coverage Terms -->
                        <div class="mt-5">
                            <h2 class="text-lg font-semibold mb-4 border-b border-gray-200 pb-2">Coverage Terms</h2>
                            <div class="flex items-center gap-4">
                                <span class="w-2 h-2 bg-[#CA2026] rounded-full"></span>
                                <p class="text-sm text-[#707070]">Coverage Territory</p>
                                <p class="text-sm text-[#5D5D5D] font-semibold">Zambia</p>
                            </div>
                            <div class="flex items-center gap-4 my-2">
                                <span class="w-2 h-2 bg-[#CA2026] rounded-full"></span>
                                <p class="text-sm text-[#707070]">Coverage Period</p>
                                <p class="text-sm text-[#5D5D5D] font-semibold">Policy Period(12 Months)</p>
                            </div>
                            <div class="flex items-center gap-4">
                                <span class="w-2 h-2 bg-[#CA2026] rounded-full"></span>
                                <p class="text-sm text-[#707070]">Insured Persons</p>
                                <p class="text-sm text-[#5D5D5D] font-semibold">Named Insured</p>
                                <p class="text-sm text-[#5D5D5D] font-semibold">Family Member</p>
                                <p class="text-sm text-[#5D5D5D] font-semibold">Authorized Driver</p>
                            </div>
                            <div class="grid gap-4 mt-5">
                                <div class="space-y-4">
                                    <div class="grid grid-cols-3 gap-4">
                                        <select class="col-span-1 text-sm border px-4 py-2 rounded">
                                            <option>Coverage Territory</option>
                                        </select>
                                        <select class="col-span-1 text-sm border px-4 py-2 rounded">
                                            <option>Zambia</option>
                                        </select>
                                        <div class="flex items-center gap-2">
                                            <MinusIcon class="border-2 cursor-pointer text-gray-600 p-[2px] rounded" />
                                            <PlusIcon class="bg-[#CA2026] cursor-pointer text-white p-[2px] rounded" />
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-3 gap-4">
                                        <select class="w-full text-sm border px-4 py-2 rounded">
                                            <option>Coverage Period</option>
                                        </select>
                                        <select class="col-span-1 text-sm border px-4 py-2 rounded">
                                            <option>Policy Period (12 Months)</option>
                                        </select>
                                        <div class="flex items-center gap-2">
                                            <MinusIcon class="border-2 cursor-pointer text-gray-600 p-[2px] rounded" />
                                            <PlusIcon class="bg-[#CA2026] cursor-pointer text-white p-[2px] rounded" />
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-3 gap-4">
                                        <select class="w-full text-sm border px-4 py-2 rounded">
                                            <option>Insured Persons</option>
                                        </select>
                                        <select class="col-span-1 text-sm border px-4 py-2 rounded">
                                            <option>Name Insured</option>
                                        </select>
                                        <div class="flex items-center gap-2">
                                            <MinusIcon class="border-2 cursor-pointer text-gray-600 p-[2px] rounded" />
                                            <PlusIcon class="bg-[#CA2026] cursor-pointer text-white p-[2px] rounded" />
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class=" w-1/3 space-y-4">
                    <div class="border bg-white p-8 rounded-xl shadow">
                        <h1 class="font-semibold border-b border-gray-300 pb-2">Status</h1>
                        <div class="space-y-5">
                            <p class="text-sm text-[#707070] mt-5">Active</p>
                            <select name="" id="" class="col-span-1 text-sm border px-4 py-2 rounded w-full">
                                <option value="">Type Here</option>
                            </select>
                        </div>
                    </div>

                    <div class="border bg-white p-8 rounded-xl shadow ">
                        <h1 class="font-semibold border-b border-gray-300 pb-2">Taxes</h1>
                        <div class="flex items-center my-5 space-x-2">
                            <CheckIcon
                                class="border-2 border-gray-300 cursor-pointer text-gray-600 p-[2px] w-4 h-4 rounded" />
                            <span class="text-sm text-[#707070]">Change Tax On This Product</span>
                        </div>
                        <label for="" class="text-sm text-gray-500">Default Taxes</label>
                        <select name="" id="" class="col-span-1 text-sm border px-4 py-2 rounded w-full">
                            <option value="">Type Here</option>
                        </select>
                    </div>

                    <div class="border bg-white p-8 rounded-xl shadow ">
                        <h1 class="font-semibold border-b border-gray-300 pb-2">Markets</h1>
                        <div class="flex items-center my-5 space-x-2">
                            <CheckIcon
                                class="border-2 border-[#CA2026] cursor-pointer text-[#CA2026] p-[2px] w-4 h-4 rounded" />
                            <span class="text-sm text-[#707070]">International, United And Zambia</span>
                        </div>
                        <div class="flex items-center my-5 space-x-2">
                            <CheckIcon
                                class="border-2 border-gray-300 cursor-pointer text-gray-600 p-[2px] w-4 h-4 rounded" />
                            <span class="text-sm text-[#707070]">International</span>
                        </div>
                    </div>

                    <div class="border bg-white p-8 rounded-xl shadow ">
                        <h1 class="font-semibold border-b border-gray-300 pb-2">Insights</h1>
                        <p class="text-sm pt-5 text-[#707070]">Insights will display when the product has had recent
                            sales</p>
                    </div>

                    <div class="border bg-white p-8 rounded-xl shadow ">
                        <h1 class="font-semibold border-b border-gray-300 pb-2">Product Type</h1>
                        <div class="mt-5">
                            <label for="" class="text-sm text-gray-500">Default Taxes</label>
                            <select name="" id="" class="col-span-1 text-sm mt-1.5 border px-4 py-2 rounded w-full mb-5">
                                <option value="">Type Here</option>
                            </select>
                            <label for="" class="text-sm text-gray-500">Vendor</label>
                            <select name="" id="" class="col-span-1 text-sm border px-4 py-2 mt-1.5 rounded w-full">
                                <option value="">Type Here</option>
                            </select>
                        </div>
                    </div>
                    <button class="px-6 py-2 bg-red-600 float-end cursor-pointer text-white font-medium rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">Save</button>
                </div>


            </div>
        </div>
    </AppLayout>
</template>