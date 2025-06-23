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

            <div class="">
                <div class="bg-white border rounded-lg shadow-sm mb-10 xl:w-2/3">
                    <!-- Tabs -->
                    <div class="border-b border-gray-200">
                        <nav class="lg:flex lg:space-x-8 px-6 py-5 lg:py-0">
                            <Link :href="route('add.vehicles')"
                                class="font-bold cursor-pointer md:text-[16px] text-[14px] px-2 py-2 rounded">
                            Details</Link>
                            <Link :href="route('specifications')"
                                class="text-[#D93243] font-bold cursor-pointer md:text-[16px] text-[16px] px-2 py-2 rounded">
                            Specifications </Link>
                            <Link :href="route('ownership')"
                                class="font-bold cursor-pointer md:text-[16px] text-[16px] px-2 py-2 rounded">
                            Ownership </Link>
                            <Link :href="route('vehicles')"
                                class="font-bold cursor-pointer md:text-[16px] text-[16px] px-2 py-2 rounded">
                            Administrative </Link>
                        </nav>
                    </div>

                    <div class="p-6">
                        <div class="grid grid-cols-1 gap-6">
                            <!-- Main Form Content -->
                            <div class="lg:col-span-3">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-5">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Model Code
                                        </label>
                                        <select
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                            <option value="">Sedan</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Trim Level
                                        </label>
                                        <select
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                            <option value="">Sedan</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Body type
                                        </label>
                                        <select
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                            <option value="">Sedan</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            GMW
                                        </label>
                                        <select
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                            <option value="">Sedan</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Number of doors
                                        </label>
                                        <select
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                            <option value="">4</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Number of seats
                                        </label>
                                        <select
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                            <option value="">6</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Brive Side
                                        </label>
                                        <select
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                            <option value="">Left Side Drive</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Color
                                        </label>
                                        <select
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                            <option value="">Gray</option>
                                        </select>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white border rounded-lg shadow-sm mb-10 xl:w-2/3  pb-8">
                    <h1 class="py-3 px-6 text-lg font-semibold text-gray-800 border-b">Engine</h1>

                    <div class="px-6">
                        <div class="grid grid-cols-1 gap-6">
                            <!-- Main Form Content -->
                            <div class="lg:col-span-3">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-5">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Engine Code
                                        </label>
                                        <select
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                            <option value="">Sedan</option>
                                        </select>
                                    </div>

                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Engine Number
                                        </label>
                                        <select
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                            <option value="">Enter Your Own</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Engine size (cc)
                                        </label>
                                        <select
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                            <option value="">3.2 L</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Engine size (L)
                                        </label>
                                        <select
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                            <option value="">3.2 L</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Horse Power
                                        </label>
                                        <select
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                            <option value="">67-85W(89.78-113.9Hp)</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Fuel type
                                        </label>
                                        <select
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                            <option value="">Diesel</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Engine Configuration
                                        </label>
                                        <input type="text"
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm"
                                            placeholder="14">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Number of Cylinders
                                        </label>
                                        <select
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                            <option value="">4</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Valve train
                                        </label>
                                        <input type="text"
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm"
                                            placeholder="Enter Your Own">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Engine Aspiration
                                        </label>
                                        <input type="text"
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm"
                                            placeholder="Enter Your Own">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white border rounded-lg shadow-sm mb-10 xl:w-2/3 pb-8">
                    <h1 class="py-3 px-6 text-lg font-semibold text-gray-800 border-b">Drivetrain</h1>

                    <div class="px-6">
                        <div class="grid grid-cols-1 gap-6">
                            <!-- Main Form Content -->
                            <div class="lg:col-span-3">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-5">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Drivetrain
                                        </label>
                                        <select
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                            <option value="">RWD</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Transmission
                                        </label>
                                        <select
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                            <option value="">Automatic</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white border rounded-lg shadow-sm mb-10 xl:w-2/3  pb-8">
                    <h1 class="py-3 px-6 text-lg font-semibold text-gray-800 border-b">Wheels & Tyres</h1>

                    <div class="px-6">
                        <div class="grid grid-cols-1 gap-6">
                            <!-- Main Form Content -->
                            <div class="lg:col-span-3">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-5">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Front Tire Size
                                        </label>
                                        <select
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                            <option value="">size</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Rear Tire Size
                                        </label>
                                        <select
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                            <option value="">size</option>
                                        </select>
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
                    </div>
                </div>

            </div>
        </section>
    </AppLayout>
</template>