<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link } from '@inertiajs/vue3';
import { SearchIcon } from 'lucide-vue-next';


const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Add Service',
        href: '/add/service',
    }
];


</script>

<template>

    <Head title="Add Service" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="w-[80%] mx-auto pt-20 lg:px-20 px-5">
            <div class="border shadow flex flex-col gap-2 justify-center py-20">
                <div class="text-left items-start w-[75%] mx-auto">
                    <p class="text-lg text-[#5D5D5D]">To begin adding Service</p>
                    <h1 class="text-3xl font-semibold text-[#343434] my-3">Find your Service in roadsmart’s catalogue</h1>
                </div>
                <div class="w-[75%] mx-auto relative">
                    <input type="text" name="search" id="search" class="w-full border border-gray-400 py-3 px-5 text-sm rounded" placeholder="Search Service">
                    <button class="cursor-pointer"><SearchIcon class="absolute right-3 top-1/2 bg-[#D93243] px-1.5 rounded transform -translate-y-1/2 h-8 w-8 text-white" /></button>
                </div>
                <div class="w-[79%] mx-auto mt-16">
                    <div class="flex justify-between items-center border-y py-3 border-gray-300 px-5">
                        <p class="text-sm">Change of Ownership</p>
                        <p class="text-sm">Compliance</p>
                        <Link href="/add/service" class="bg-[#CA2026] text-xs cursor-pointer text-white px-6 py-2 rounded-md hover:bg-red-700 transition-colors">Sell this Services</Link>
                    </div>
                    <div class="flex justify-between items-center border-y py-3 border-gray-300 px-5">
                        <p class="text-sm">Change of Particulars</p>
                        <p class="text-sm">Compliance</p>
                        <Link href="/add/service" class="bg-[#CA2026] text-xs cursor-pointer text-white px-6 py-2 rounded-md hover:bg-red-700 transition-colors">Sell this Services</Link>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>