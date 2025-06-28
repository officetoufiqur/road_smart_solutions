<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, router } from '@inertiajs/vue3';
import { SearchIcon } from 'lucide-vue-next';


const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Add Coverage',
        href: '/coverage',
    }
];

function addCoverage() {
    router.visit('/add/coverage');
}

</script>

<template>

    <Head title="Add Coverage" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="w-[80%] mx-auto pt-20 lg:px-20 px-5">
            <div class="border shadow flex flex-col gap-2 justify-center py-20">
                <div class="text-left items-start w-[75%] mx-auto">
                    <p class="text-lg text-[#5D5D5D]">To begin adding coverages</p>
                    <h1 class="text-3xl font-semibold text-[#343434] my-3">Find your coverage in roadsmart’s catalogue</h1>
                </div>
                <div class="w-[75%] mx-auto relative">
                    <input type="text" name="search" id="search" class="w-full border border-gray-400 py-3 px-5 text-sm rounded" placeholder="Search Coverage">
                    <button class="cursor-pointer"><SearchIcon class="absolute right-3 top-1/2 bg-[#D93243] px-1.5 rounded transform -translate-y-1/2 h-8 w-8 text-white" /></button>
                </div>
                <div class="w-[79%] mx-auto mt-16">
                    <div class="flex justify-between items-center border-y py-3 border-gray-300 px-5">
                        <p class="text-sm">Third Party Liability</p>
                        <button @click="addCoverage()" class="bg-[#CA2026] text-xs cursor-pointer text-white px-6 py-2 rounded-md hover:bg-red-700 transition-colors">Add</button>
                    </div>
                    <div class="flex justify-between items-center border-y py-3 border-gray-300 px-5">
                        <p class="text-sm">Comprehensive Own Damage</p>
                        <button class="bg-[#CA2026] text-xs cursor-pointer text-white px-6 py-2 rounded-md hover:bg-red-700 transition-colors">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>