<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import { ChevronRightIcon, CarIcon } from 'lucide-vue-next';
import { Link } from '@inertiajs/vue3';


const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Master Add Vehicles',
        href: '/add/master/vehicles',
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
                <Link :href="route('master.vehicles')"
                    class="bg-red-700 duration-300 cursor-pointer text-white md:text-[16px] text-[14px] px-8 py-2 rounded">
                Back</Link>
            </div>

            <div class="min-h-screen lg:flex gap-5">
                <div class=" w-1/1">

                    <div class="bg-white border rounded-lg shadow-sm mb-10 p-6">
                        <div class="grid grid-cols-1 gap-6">
                            <!-- Main Form Content -->
                            <div class="lg:col-span-3">
                                <div class="grid grid-cols-1 gap-6 mt-5">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Vehicle Type
                                        </label>
                                        <select
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                            <option value="">Car</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Make
                                        </label>
                                        <select
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                            <option value="">Toyota Surf</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Model
                                        </label>
                                        <select
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                            <option value="">Toyota Surf</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Year
                                        </label>
                                        <select
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                            <option value="">Car</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Variant
                                        </label>
                                        <select
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                            <option value="">Toyota Surf</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Type
                                        </label>
                                        <select
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                            <option value="">Toyota Surf</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Chassis
                                        </label>
                                        <select
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                            <option value="">Toyota Surf</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Engine
                                        </label>
                                        <select
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                            <option value="">Toyota Surf</option>
                                        </select>
                                    </div>
                                    <div>
                                        <p class="text-xs text-gray-500 border-b pb-3 mb-3">Registration Certificate</p>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Media
                                        </label>
                                        <input type="file"
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                

                
                <div class="lg:w-1/3 ">
                   <div class="space-y-5">

                    <div class="right-sidebar bg-white border rounded-lg shadow-sm mb-10">
                        <div class="px-6 py-10">
                            <h1 class="text-lg font-semibold text-gray-800 border-b pb-3">Status</h1>
                            <p class="text-sm text-gray-600 my-4">Active</p>
                            <select 
                                class="w-full px-3 py-3 cursor-pointer border border-gray-300 rounded-md shadow-sm">
                                <option value="Car">Active</option>
                                <option value="Truck">Truck</option>
                            </select>
                        </div>
                    </div>

                </div>
                </div>
            </div>
        </section>
    </AppLayout>
</template>