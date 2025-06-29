<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head , Link } from '@inertiajs/vue3';
import { MinusIcon, PlusIcon } from 'lucide-vue-next';


const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Add Coverage',
        href: '/coverage',
    }
];


</script>

<template>

    <Head title="Add Coverage" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <div class="flex justify-end">
                <Link href="/add/coverage/search" class="text-white duration-300 cursor-pointer text-[14px] px-8 py-2.5 rounded bg-[#CA2026]">Back</Link>
            </div>
            <div class="flex gap-5 mt-5">
                <div class="border bg-white p-8 rounded-xl shadow w-2/3">
                    <div class=" gap-4">
                        <!-- Title & Status -->
                        <div class="">
                            <div class="md:col-span-2 space-y-4">
                                <label class="block text-sm font-medium text-gray-700">Title</label>
                                <input type="text" value="Third Party Liability"
                                    class="w-full border text-sm border-gray-300 rounded px-4 py-2" />

                                <label class="block text-sm font-medium text-gray-700">Description</label>
                                <textarea rows="2" class="w-full text-sm border border-gray-300 rounded px-4 py-2 pl"
                                    placeholder="Replacement of spark plugs, air filter, or clean filter for petrol engines."></textarea>

                                <label class="block text-sm font-medium text-gray-700">Policy</label>
                                <select class="w-full text-sm border border-gray-300 rounded px-4 py-2">
                                    <option>Motor Insurance</option>
                                </select>

                                <label class="block text-sm font-medium text-gray-700">Category</label>
                                <select class="w-full text-sm border border-gray-300 rounded px-4 py-2">
                                    <option>Mandatory</option>
                                </select>
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
                        <h1 class="font-semibold border-b border-gray-300 pb-2">Type</h1>
                        <div class="flex justify-between items-center mt-5">
                            <div class="space-x-2">
                                <input type="radio" class="cursor-pointer" id="core" name="type" value="core">
                                <label for="core" class="text-sm cursor-pointer">Core</label><br>
                            </div>
                            <div class="space-x-2">
                                <input type="radio" class="cursor-pointer" id="add-on" name="type" value="add-on">
                                <label for="add-on" class="text-sm cursor-pointer">Add-On</label><br>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </AppLayout>
</template>