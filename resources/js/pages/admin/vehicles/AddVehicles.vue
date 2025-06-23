<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import { ChevronRightIcon, CarIcon } from 'lucide-vue-next';
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';


const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Vehicles',
        href: '/vehicles',
    }
];


const formData = ref({
    vehicleType: 'Car',
    registrationNumber: 'BLA5632M',
    status: 'Active',
    vin: 'Toyota Surf',
    engineNumber: 'Toyota Surf',
    make: 'Toyota Surf',
    model: 'Toyota Surf',
    year: 'Car',
    variant: 'Toyota Surf',
    type: 'Toyota Surf',
    chassis: 'Toyota Surf',
    engine: 'Toyota Surf',
    color: 'Toyota Surf',
    use: 'Toyota Surf',
    mileage: 'Toyota Surf',
    estimatedValue: 'Toyota Surf',
    currency: 'USD'
})

const saveForm = () => {
    console.log('Form saved:', formData.value)
    // Add your save logic here
}
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

            <div class="min-h-screen lg:flex gap-5">
                <div class="bg-white border rounded-lg shadow-sm mb-10 w-1/1">
                    <!-- Tabs -->
                    <div class="border-b border-gray-200">
                        <nav class="lg:flex lg:space-x-8 px-6 py-5 lg:py-0">
                            <Link :href="route('add.vehicles')"
                                class="text-[#D93243] font-bold cursor-pointer md:text-[16px] text-[14px] px-2 py-2 rounded">
                            Details</Link>
                            <Link :href="route('specifications')"
                                class="font-bold cursor-pointer md:text-[16px] text-[16px] px-2 py-2 rounded">
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
                                <!-- Vehicle Type -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">
                                        Vehicle Type
                                    </label>
                                    <select v-model="formData.vehicleType"
                                        class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                        <option value="Car">Car</option>
                                        <option value="Truck">Truck</option>
                                        <option value="Motorcycle">Motorcycle</option>
                                    </select>
                                </div>

                                <div></div>

                                <!-- Registration Number -->
                                <div class="mt-4">
                                    <label class="block text-sm font-medium text-gray-700 mb-2">
                                        Registration Number
                                    </label>
                                    <div class="lg:flex md:flex gap-2 space-y-4 lg:space-y-0 md:space-y-0">
                                        <input v-model="formData.registrationNumber" type="text"
                                            class="flex-1 px-3 py-2 text-sm border border-gray-300 rounded-md shadow-sm" />
                                        <button
                                            class="px-4 py-2 bg-[#CA2026] cursor-pointer text-white text-sm font-medium rounded-md hover:bg-red-700">
                                            Deconde
                                        </button>
                                    </div>
                                    <p class="text-xs text-gray-500 mt-2">
                                        Vehicle registration number <a href="#"
                                            class="text-blue-600 hover:underline">Learn More</a>
                                    </p>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-5">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            VIN
                                        </label>
                                        <select v-model="formData.status"
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                            <option value="Active">Toyota Surf</option>
                                        </select>
                                    </div>

                                    <!-- Engine Number -->
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Engine Number
                                        </label>
                                        <select v-model="formData.engineNumber"
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                            <option value="Toyota Surf">Toyota Surf</option>
                                        </select>
                                    </div>

                                    <!-- Make -->
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Make
                                        </label>
                                        <select v-model="formData.make"
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                            <option value="Toyota Surf">Toyota Surf</option>
                                        </select>
                                    </div>

                                    <!-- Model -->
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Model
                                        </label>
                                        <select v-model="formData.model"
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                            <option value="Toyota Surf">Toyota Surf</option>
                                        </select>
                                    </div>

                                    <!-- Year -->
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Year
                                        </label>
                                        <select v-model="formData.year"
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                            <option value="Car">Car</option>
                                        </select>
                                    </div>

                                    <!-- Variant -->
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Variant
                                        </label>
                                        <select v-model="formData.variant"
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                            <option value="Toyota Surf">Toyota Surf</option>
                                        </select>
                                    </div>

                                    <!-- Type -->
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Type
                                        </label>
                                        <select v-model="formData.type"
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                            <option value="Toyota Surf">Toyota Surf</option>
                                        </select>
                                    </div>

                                    <!-- Chassis -->
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Chassis
                                        </label>
                                        <select v-model="formData.chassis"
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                            <option value="Toyota Surf">Toyota Surf</option>
                                        </select>
                                    </div>

                                    <!-- Engine -->
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Engine
                                        </label>
                                        <select v-model="formData.engine"
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                            <option value="Toyota Surf">Toyota Surf</option>
                                        </select>
                                    </div>

                                    <!-- Color -->
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Color
                                        </label>
                                        <select v-model="formData.color"
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                            <option value="Toyota Surf">Toyota Surf</option>
                                        </select>
                                    </div>

                                    <!-- Use -->
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Use
                                        </label>
                                        <select v-model="formData.use"
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                            <option value="Toyota Surf">Toyota Surf</option>
                                        </select>
                                    </div>

                                    <!-- Mileage -->
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Mileage
                                        </label>
                                        <select v-model="formData.mileage"
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                            <option value="Toyota Surf">Toyota Surf</option>
                                        </select>
                                    </div>

                                    <!-- Estimated Value -->
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Estimated Value
                                        </label>
                                        <select v-model="formData.estimatedValue"
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                            <option value="Toyota Surf">Toyota Surf</option>
                                        </select>
                                    </div>

                                    <!-- Currency -->
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">
                                            Currency
                                        </label>
                                        <select v-model="formData.currency"
                                            class="w-full px-3 py-3 border text-sm border-gray-300 rounded-md cursor-pointer shadow-sm">
                                            <option value="USD">USD</option>
                                            <option value="EUR">EUR</option>
                                            <option value="GBP">GBP</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Save Button -->
                        <div class="flex justify-end mt-8">
                            <button @click="saveForm"
                                class="px-6 py-2 bg-red-600 text-white font-medium rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                                Save
                            </button>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3">
                    <div class="right-sidebar bg-white border rounded-lg shadow-sm mb-10">
                        <div class="px-6 py-10">
                            <h1 class="text-lg font-semibold text-gray-800 border-b pb-3">Status</h1>
                            <p class="text-sm text-gray-600 my-4">Active</p>
                            <select v-model="formData.vehicleType"
                                class="w-full px-3 py-3 cursor-pointer border border-gray-300 rounded-md shadow-sm">
                                <option value="Car">Active</option>
                                <option value="Truck">Truck</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </AppLayout>
</template>