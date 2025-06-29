<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import {  CloudDownloadIcon } from 'lucide-vue-next';


const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Product Complete Listing',
        href: '/product/complete/listing',
    }
];


</script>

<template>

    <Head title="Product Complete Listing" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5 mb-20">
            <div class="flex gap-5">
                <div class="w-2/3">
                    <div class=" gap-4 border bg-white p-8 rounded-xl shadow">
                        <!-- Title & Status -->
                        <div class="">
                            <div class="md:col-span-2 space-y-4">
                                <label class="block text-sm font-medium text-gray-700">Title</label>
                                <input type="text" value="2013 Toyota Hilux Surf"
                                    class="w-full border text-sm border-gray-300 rounded px-4 py-2" />

                                <label class="block text-sm font-medium text-gray-700">Description</label>
                                <textarea rows="2" class="w-full text-sm border border-gray-300 rounded px-4 py-2 pl"
                                    placeholder="Replacement of spark plugs , air filter, air con filter for petrol engines"></textarea>

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
                                    <option>Toyota Surf</option>
                                </select>
                                <p class="text-xs text-[#707070]">Determines tax rates and adds metafields to improve
                                    search, filters, and cross-channel sales</p>
                            </div>
                        </div>
                    </div>
                    <div class="border bg-white p-8 rounded-xl shadow mt-5">
                        <!-- Vehicle Registration Mark (VRM) -->
                        <div class="">
                            <h2 class="text-lg font-semibold mb-4 border-b border-gray-300 pb-2">Vehicle Registration
                                Mark (VRM)</h2>
                            <div>
                                <h2>VRM = </h2>
                                <p class="text-xs text-[#707070]">We will use vehicle registration to populate your
                                    vehicle details</p>
                            </div>
                        </div>

                        <!-- Item Specifics -->
                        <div class="mt-5">
                            <h2 class="text-lg font-semibold mb-4 border-b border-gray-300 pb-2">Item Specifics</h2>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 pb-1">Year</label>
                                    <select name="" id="" class="w-full text-sm border px-4 py-2.5 rounded">
                                        <option value="">Year</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 pb-1">Milage <span
                                            class="text-red-600 text-lg">*</span></label>
                                    <input type="text" class="w-full text-sm border px-4 py-2.5 rounded">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 pb-1">Make <span
                                            class="text-red-600 text-lg">*</span></label>
                                    <select name="" id="" class="w-full text-sm border px-4 py-2.5 rounded">
                                        <option value="">2020</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 pb-1">Model <span
                                            class="text-red-600 text-lg">*</span></label>
                                    <select name="" id="" class="w-full text-sm border px-4 py-2.5 rounded">
                                        <option value="">2020</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5">
                            <h2 class="text-lg font-semibold mb-4 border-b border-gray-300 pb-2">Additional (Optional)
                            </h2>
                            <p class="text-xs text-[#707070]">Buyers also search for these details</p>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 pb-1">Body Type</label>
                                    <select name="" id="" class="w-full text-sm border px-4 py-2.5 rounded">
                                        <option value="">Sedan</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 pb-1">Car Type</label>
                                    <select name="" id="" class="w-full text-sm border px-4 py-2.5 rounded">
                                        <option value="">Modern Cars</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 pb-1">Number of Doors</label>
                                    <select name="" id="" class="w-full text-sm border px-4 py-2.5 rounded">
                                        <option value="">4</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 pb-1">Number of Seats</label>
                                    <select name="" id="" class="w-full text-sm border px-4 py-2.5 rounded">
                                        <option value="">6</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 pb-1">Exterior Color</label>
                                    <select name="" id="" class="w-full text-sm border px-4 py-2.5 rounded">
                                        <option value="">Black</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 pb-1">Interior Color</label>
                                    <select name="" id="" class="w-full text-sm border px-4 py-2.5 rounded">
                                        <option value="">Gray</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 pb-1">Engine</label>
                                    <input type="text" class="w-full text-sm border px-4 py-2.5 rounded"
                                        placeholder="Enter your own">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 pb-1">Fuel Type</label>
                                    <select name="" id="" class="w-full text-sm border px-4 py-2.5 rounded">
                                        <option value="">Diesel</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 pb-1">Engine Size (cc)</label>
                                    <select name="" id="" class="w-full text-sm border px-4 py-2.5 rounded">
                                        <option value="">3.2 L</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 pb-1">Number of
                                        Cylinders</label>
                                    <select name="" id="" class="w-full text-sm border px-4 py-2.5 rounded">
                                        <option value="">4</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 pb-1">Horse Power</label>
                                    <select name="" id="" class="w-full text-sm border px-4 py-2.5 rounded">
                                        <option value="">67-85kW (92-115hp)</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 pb-1">Engine Number</label>
                                    <select name="" id="" class="w-full text-sm border px-4 py-2.5 rounded">
                                        <option value="">Enter your own</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 pb-1">Transmission</label>
                                    <select name="" id="" class="w-full text-sm border px-4 py-2.5 rounded">
                                        <option value="">Automatic</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 pb-1">Drivertrain</label>
                                    <select name="" id="" class="w-full text-sm border px-4 py-2.5 rounded">
                                        <option value="">RWD</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 pb-1">Features</label>
                                    <select name="" id="" class="w-full text-sm border px-4 py-2.5 rounded">
                                        <option value="">Air Conditioning (+1)</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 pb-1">Safety Features</label>
                                    <select name="" id="" class="w-full text-sm border px-4 py-2.5 rounded">
                                        <option value="">Anti-Lock Brakes (+4)</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 pb-1">Country/Region of
                                        manufacture</label>
                                    <select name="" id="" class="w-full text-sm border px-4 py-2.5 rounded">
                                        <option value="">Japan</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 pb-1">Number of previous
                                        Owners</label>
                                    <select name="" id="" class="w-full text-sm border px-4 py-2.5 rounded">
                                        <option value="">2</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 pb-1">Date of 1st
                                        Registration</label>
                                    <select name="" id="" class="w-full text-sm border px-4 py-2.5 rounded">
                                        <option value="">Mon 21 September 2025</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 pb-1">Seller Warranty
                                        Expiry</label>
                                    <select name="" id="" class="w-full text-sm border px-4 py-2.5 rounded">
                                        <option value="">1 Month</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 pb-1">Service history
                                        Avaiable</label>
                                    <select name="" id="" class="w-full text-sm border px-4 py-2.5 rounded">
                                        <option value="">Yes</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 pb-1">Variation</label>
                                    <input type="text" class="w-full text-sm border px-4 py-2.5 rounded"
                                        placeholder="Type Here">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border bg-white p-8 rounded-xl shadow mt-5 relative">
                        <h2 class="text-lg font-semibold mb-4 border-b border-gray-300 pb-2">Condition</h2>
                        <div class="grid grid-cols-4 gap-4">
                            <div class="space-x-2">
                                <input type="radio" class="cursor-pointer" id="core" name="type" value="core">
                                <label for="core" class="text-sm cursor-pointer">New</label><br>
                            </div>
                            <div class="space-x-2">
                                <input type="radio" class="cursor-pointer" id="add-on" name="type" value="add-on">
                                <label for="add-on" class="text-sm cursor-pointer">Used</label><br>
                            </div>
                            <div class="space-x-2">
                                <input type="radio" class="cursor-pointer" id="add-on" name="type" value="add-on">
                                <label for="add-on" class="text-sm cursor-pointer">Other</label><br>
                            </div>
                        </div>

                        <div class="mt-5">
                            <label class="block text-sm font-medium text-gray-600 pb-1">Condition Description</label>
                            <textarea name="" id="" placeholder="Type Here"
                                class="w-full text-sm border border-gray-300 px-4 py-2.5 rounded"></textarea>
                        </div>

                        <div class="flex justify-end">
                            <button
                                class="px-6 py-2 bg-red-600 mt-5 cursor-pointer text-white font-medium rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">Save</button>
                        </div>
                    </div>
                </div>
                <div class=" w-1/3 space-y-4">
                    <div class="border bg-white p-8 rounded-xl shadow">
                        <h1 class="font-semibold border-b border-gray-300 pb-2">For Sell By</h1>
                        <div class="grid grid-cols-2 gap-4 mt-5">
                            <div class="space-x-2">
                                <input type="radio" class="cursor-pointer" id="core" name="type" value="core">
                                <label for="core" class="text-sm cursor-pointer">Bealer</label><br>
                            </div>
                            <div class="space-x-2">
                                <input type="radio" class="cursor-pointer" id="add-on" name="type" value="add-on">
                                <label for="add-on" class="text-sm cursor-pointer">Private Seller</label><br>
                            </div>
                        </div>
                    </div>

                    <div class="border bg-white p-8 rounded-xl shadow">
                        <h1 class="font-semibold border-b border-gray-300 pb-2">Driver Side</h1>
                        <div class="grid grid-cols-2 gap-4 mt-5">
                            <div class="space-x-2">
                                <input type="radio" class="cursor-pointer" id="core" name="type" value="core">
                                <label for="core" class="text-sm cursor-pointer">Left-Side Drive</label><br>
                            </div>
                            <div class="space-x-2">
                                <input type="radio" class="cursor-pointer" id="add-on" name="type" value="add-on">
                                <label for="add-on" class="text-sm cursor-pointer">Right-Side Drive</label><br>
                            </div>
                        </div>
                    </div>

                    <div class="border bg-white p-8 rounded-xl shadow">
                        <h1 class="font-semibold border-b border-gray-300 pb-2">Independent Vehicle Inspection</h1>
                        <div class="grid grid-cols-2 gap-4 mt-5">
                            <div class="space-x-2">
                                <input type="radio" class="cursor-pointer" id="core" name="type" value="core">
                                <label for="core" class="text-sm cursor-pointer">Yes</label><br>
                            </div>
                            <div class="space-x-2">
                                <input type="radio" class="cursor-pointer" id="add-on" name="type" value="add-on">
                                <label for="add-on" class="text-sm cursor-pointer">No</label><br>
                            </div>
                        </div>
                    </div>

                    <div class="border bg-white p-8 rounded-xl shadow">
                        <h1 class="font-semibold border-b border-gray-300 pb-2">Previously Registered Overseas</h1>
                        <div class="grid grid-cols-2 gap-4 mt-5">
                            <div class="space-x-2">
                                <input type="radio" class="cursor-pointer" id="core" name="type" value="core">
                                <label for="core" class="text-sm cursor-pointer">Yes</label><br>
                            </div>
                            <div class="space-x-2">
                                <input type="radio" class="cursor-pointer" id="add-on" name="type" value="add-on">
                                <label for="add-on" class="text-sm cursor-pointer">No</label><br>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </AppLayout>
</template>