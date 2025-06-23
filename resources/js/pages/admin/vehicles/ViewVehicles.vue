<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import { ImageIcon, UserIcon, ChevronRightIcon, CheckIcon, Clock10Icon, PenIcon } from 'lucide-vue-next';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Users',
        href: '/users',
    }
];


</script>

<template>

    <Head title="Users" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <section class="my-16 xl:mx-20 md:mx-10 mx-5">
            <div class="min-h-screen space-y-5 lg:space-y-0">
                <!-- Top Navigation -->
                <nav class="border shadow  px-6 py-3">
                    <div class="lg:flex items-center justify-between space-x-6">
                        <div class="flex space-x-3">
                            <h2 class="text-lg flex font-semibold text-gray-500">
                                <UserIcon class="inline mt-3.5 text-[#D93243]" />
                                <ChevronRightIcon class="inline mt-4.5 text-gray-500 w-4 h-4" />
                            </h2>
                            <div class=" items-center space-x-2 mt-1">
                                <h1 class="text-gray-500 font-semibold">Billy Smith</h1>
                                <span class="text-gray-400 text-sm">New Sale • Jan 2024</span>
                            </div>
                        </div>
                        <div class="lg:flex space-x-6 text-gray-700 text-sm mt-3 lg:mt-0 space-y-1 lg:space-y-0">
                            <button class="">Edit</button>
                            <button class="">Transfer Vehicle</button>
                            <button class="">More action</button>
                        </div>
                    </div>
                </nav>

                <div class="min-h-screen flex">
                    <!-- Main Content Area -->
                    <div class="flex-1 pt-6 pr-6 space-y-6">
                        <!-- Card 1  -->
                        <div class="bg-white border rounded-lg p-8  shadow-sm">
                            <div class="flex justify-between items-start mb-4 border-b-2 pb-4 px-5">
                                <h3 class="text-lg font-semibold text-gray-900">Campaigns</h3>
                                <span class="text-sm text-green-600 bg-green-100 px-4 py-1 rounded">
                                    <CheckIcon
                                        class="inline w-4 h-4 bg-green-600 text-white rounded-full p-[2px] mr-1" />
                                    Verified
                                </span>
                            </div>
                            <div class="space-y-4">
                                <div class="flex justify-between px-5 border-b-2 pb-4">
                                    <div>
                                        <h5 class="font-medium text-[#5D5D5D]">Fitness</h5>
                                        <p class="text-sm text-[#707070]">RTSA</p>
                                    </div>
                                    <div class="text-right">
                                        <h5 class="font-medium text-[#5D5D5D]">Valid</h5>
                                        <p class="text-sm text-[#707070]">Expires on 30 June 2025</p>
                                    </div>
                                </div>
                                <div class="flex justify-between px-5 border-b-2 pb-4">
                                    <div>
                                        <h5 class="font-medium text-[#5D5D5D]">Fitness</h5>
                                        <p class="text-sm text-[#707070]">RTSA</p>
                                    </div>
                                    <div class="text-right">
                                        <h5 class="font-medium text-[#5D5D5D]">Valid</h5>
                                        <p class="text-sm text-[#707070]">Expires on 30 June 2025</p>
                                    </div>
                                </div>
                                <div class="flex justify-between px-5 items-center">
                                    <div>
                                        <p class="text-sm text-[#707070]">Show all certificates</p>
                                    </div>
                                    <button
                                        class="bg-[#CA2026] text-sm text-white px-4 py-2 rounded-md hover:bg-red-700 transition-colors">
                                        Create Campaign
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2  -->
                        <div class="bg-white border rounded-lg p-8  shadow-sm">
                            <div class="flex justify-between items-start mb-4 border-b-2 pb-4 px-5">
                                <h3 class="text-lg font-semibold text-gray-900">Save tyre size</h3>
                                <span class="">Add</span>
                            </div>
                            <div class="space-y-4">
                                <div class="flex justify-between px-5 border-b-2 pb-4">
                                    <div>
                                        <h5 class="font-medium text-[#5D5D5D]">Front Tyre</h5>
                                        <p class="text-sm text-[#707070]">RTSA</p>
                                    </div>
                                    <div>
                                        <h5 class="font-medium text-[#5D5D5D] text-sm">Edit</h5>
                                    </div>
                                </div>
                                <div class="flex justify-between px-5 border-b-2 pb-4">
                                    <div>
                                        <h5 class="font-medium text-[#5D5D5D]">Rear Tyre</h5>
                                        <p class="text-sm text-[#707070]">RTSA</p>
                                    </div>
                                    <div>
                                        <h5 class="font-medium text-[#5D5D5D] text-sm">Edit</h5>
                                    </div>
                                </div>
                                <div class="flex justify-between px-5 items-center">
                                    <div>
                                        <p class="text-sm text-[#707070]">Show all certificates</p>
                                    </div>
                                    <button
                                        class="bg-[#CA2026] text-sm text-white px-4 py-2 rounded-md hover:bg-red-700 transition-colors">
                                        Add Tyre Size
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3  -->
                        <div class="bg-white border rounded-lg p-8  shadow-sm">
                            <div class="flex justify-between items-start mb-4 border-b-2 pb-4 px-5">
                                <h3 class="text-lg font-semibold text-gray-900">Purchases</h3>
                            </div>
                            <div class="space-y-4">
                                <div class="flex justify-between px-5 border-b-2 pb-4">
                                    <div>
                                        <p class="text-xs text-[#707070]">#J12345-A</p>
                                        <h5 class="font-medium text-[#5D5D5D]">Motor Insurence</h5>
                                        <p class="text-sm text-[#707070]">Ordered On nov 13, 2015</p>
                                    </div>
                                    <div class="text-right">
                                        <h5 class="font-medium text-[#5D5D5D]">Valid</h5>
                                        <p class="text-sm text-[#707070]">View Job</p>
                                    </div>
                                </div>
                                <div class="flex justify-between px-5 border-b-2 pb-4">
                                    <div>
                                        <h5 class="font-medium text-[#5D5D5D]">iOS - Unknown</h5>
                                        <p class="text-sm text-[#707070]">Ordered On nov 13, 2015</p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-[#707070]">Log out</p>
                                    </div>
                                </div>
                                <div class="flex justify-between px-5 items-center">
                                    <div>
                                        <p class="text-sm text-[#707070]">Show all Session</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card 4  -->
                        <div class="bg-white border rounded-lg p-8  shadow-sm">
                            <div class="flex justify-between items-start mb-4 border-b-2 pb-4 px-5">
                                <h3 class="text-lg font-semibold text-gray-900">Jobs</h3>
                            </div>
                            <div class="space-y-4">
                                <div class="flex justify-between px-5 border-b-2 pb-4">
                                    <div>
                                        <p class="text-xs text-[#707070]">#J12345-A</p>
                                        <h5 class="font-medium text-[#5D5D5D]">Motor Insurence</h5>
                                        <p class="text-sm text-[#707070]">Ordered On nov 13, 2015</p>
                                    </div>
                                    <div class="text-right">
                                        <h5 class="font-medium text-[#5D5D5D]">Valid</h5>
                                        <p class="text-sm text-[#707070]">View Job</p>
                                    </div>
                                </div>
                                <div class="flex justify-between px-5 border-b-2 pb-4">
                                    <div>
                                        <h5 class="font-medium text-[#5D5D5D]">iOS - Unknown</h5>
                                        <p class="text-sm text-[#707070]">Ordered On nov 13, 2015</p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-[#707070]">Log out</p>
                                    </div>
                                </div>
                                <div class="flex justify-between px-5 items-center">
                                    <div>
                                        <p class="text-sm text-[#707070]">Show all JOb</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card 4 -->
                        <div class="bg-white border rounded-lg p-6 shadow-sm">
                            <div class="flex justify-between items-start mb-4">
                                <h3 class="text-lg font-semibold text-gray-900">Media Library</h3>
                                <span class="text-sm text-gray-500">Recent uploads</span>
                            </div>
                            <div class="grid grid-cols-4 gap-3">
                                <div v-for="i in 8" :key="i"
                                    class="aspect-square bg-gray-100 rounded-lg flex items-center justify-center">
                                    <ImageIcon class="w-6 h-6 text-gray-400" />
                                </div>
                            </div>
                        </div>

                        <!-- Card 5 - List Items -->
                        <div class="bg-white border rounded-lg p-8  shadow-sm">
                            <div class="flex justify-between items-start mb-4 border-b-2 pb-4 px-5">
                                <h3 class="text-lg font-semibold text-gray-900">Linked Accounts</h3>
                            </div>
                            <div class="space-y-4">
                                <div class="flex justify-between px-5 border-b-2 pb-4">
                                    <div>
                                        <h5 class="font-medium text-[#5D5D5D]">Chrome On windows</h5>
                                        <p class="text-sm text-[#707070]">Ordered On nov 13, 2015</p>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-sm text-[#707070]">Remove</p>
                                    </div>
                                </div>
                                <div class="flex justify-between px-5 border-b-2 pb-4">
                                    <div>
                                        <h5 class="font-medium text-[#5D5D5D]">iOS - Unknown</h5>
                                        <p class="text-sm text-[#707070]">Ordered On nov 13, 2015</p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-[#707070]">Remove</p>
                                    </div>
                                </div>
                                <div class="flex justify-between px-5 items-center">
                                    <div>
                                        <p class="text-sm text-[#707070]">Show all</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card 6 - Action Card -->
                        <div class="bg-white border rounded-lg p-8  shadow-sm">
                            <div class="flex justify-between items-start mb-4 border-b-2 pb-4 px-5">
                                <h3 class="text-lg font-semibold text-gray-900">Timeline</h3>
                            </div>
                            <div class="space-y-4">
                                <div>
                                    <textarea name="" id="" class="w-full border border-gray-300 rounded-lg p-2 text-sm"
                                        placeholder="Leave a comment"></textarea>
                                </div>
                                <div class="flex px-5 items-center">
                                    <button class="bg-[#D93243] text-white px-5 text-sm py-1 rounded mr-3">Post</button>
                                    <p class="text-xs text-[#707070]">Only you and other staff can see comments </p>
                                </div>
                            </div>
                        </div>

                        <!-- Bottom Cards -->
                        <div class="space-y-3">
                            <div class="bg-white border rounded-lg p-4 shadow-sm">
                                <div class="flex justify-between items-center">
                                    <div class="">
                                        <span class="text-sm text-gray-600">Order confirmation email was sent to Billy
                                            Smith (dainnanduba@gmail.com)</span>
                                        <div class="flex items-center mt-1.5">
                                            <Clock10Icon class="w-4 h-4 text-[#D93243] mr-1" /><span
                                                class="text-xs text-[#707070]">10:46 Am</span>
                                        </div>
                                    </div>
                                    <span class="text-sm font-medium text-[#D93243]">View email</span>
                                </div>
                            </div>
                            <div class="bg-white border rounded-lg p-4 shadow-sm">
                                <div class="">
                                    <span class="text-sm text-gray-600">Confirmation #5QJQLEMRS6 was generated for this
                                        order</span>
                                    <div class="flex items-center mt-1.5">
                                        <Clock10Icon class="w-4 h-4 text-[#D93243] mr-1" /><span
                                            class="text-xs text-[#707070]">10:46 Am</span>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white border rounded-lg p-4 shadow-sm">
                                <div class="">
                                    <span class="text-sm text-gray-600">You added payment terms to this order</span>
                                    <div class="flex items-center mt-1.5">
                                        <Clock10Icon class="w-4 h-4 text-[#D93243] mr-1" /><span
                                            class="text-xs text-[#707070]">10:46 Am</span>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white border rounded-lg p-4 shadow-sm">
                                <div class="">
                                    <span class="text-sm text-gray-600">You create this order for Billy Smith from draft
                                        order</span>
                                    <div class="flex items-center mt-1.5">
                                        <Clock10Icon class="w-4 h-4 text-[#D93243] mr-1" /><span
                                            class="text-xs text-[#707070]">10:46 Am</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="w-100 mt-6 space-y-5">
                        <div class="border bg-white shadow rounded p-6">
                            <div class="flex items-center justify-between border-b-2 pb-4">
                                <h1>Status</h1>
                                <PenIcon class="w-4 h-4 text-[#D93243] mr-1" />
                            </div>
                            <p class="text-sm text-[#707070] mt-5">Active</p>
                        </div>

                        <div class="border bg-white shadow rounded p-6">
                            <div class="flex items-center justify-between border-b-2 pb-4">
                                <h1>Vehicle</h1>
                                <PenIcon class="w-4 h-4 text-[#D93243] mr-1" />
                            </div>
                            <div class="flex justify-between items-center">
                                <div class="space-y-1 mt-5">
                                    <p class="text-sm text-[#707070] ">Nickname</p>
                                    <p class="text-sm text-[#707070] ">Plate</p>
                                    <p class="text-sm text-[#707070] ">VIN</p>
                                    <p class="text-sm text-[#707070] ">Engine No.</p>
                                    <p class="text-sm text-[#707070] ">Year</p>
                                    <p class="text-sm text-[#707070] ">Variant</p>
                                    <p class="text-sm text-[#707070] ">Type</p>
                                    <p class="text-sm text-[#707070] ">Chassis</p>
                                    <p class="text-sm text-[#707070] ">Color</p>
                                    <p class="text-sm text-[#707070] ">Engine</p>
                                    <p class="text-sm text-[#707070] ">Use</p>
                                    <p class="text-sm text-[#707070] ">Mileage</p>
                                    <p class="text-sm text-[#707070] ">Market Value</p>
                                    <p class="text-sm text-[#707070] ">Currency</p>
                                </div>
                                <div class="space-y-1 mt-5">
                                    <h1 class="font-semibold ">Black Panther</h1>
                                    <h1 class="font-semibold">BAC2323</h1>
                                    <h1 class="font-semibold">JTMB123456789</h1>
                                    <h1 class="font-semibold">2AZ-11123456</h1>
                                    <h1 class="font-semibold">2019</h1>
                                    <h1 class="font-semibold">Petrol SUV</h1>
                                    <h1 class="font-semibold">2.4 AWD</h1>
                                    <h1 class="font-semibold">_U6_4WD</h1>
                                    <h1 class="font-semibold">Black</h1>
                                    <h1 class="font-semibold">1999cc 110Hp 85kW 2Az</h1>
                                    <h1 class="font-semibold">Personal</h1>
                                    <h1 class="font-semibold">Personal</h1>
                                </div>
                            </div>
                        </div>

                        <div class="border bg-white shadow rounded p-6">
                            <div class="flex items-center justify-between border-b-2 pb-4">
                                <h1>Spece</h1>
                                <PenIcon class="w-4 h-4 text-[#D93243] mr-1" />
                            </div>
                            <div class="">
                                <div class="space-y-1 mt-5">
                                    <div class="flex justify-between">
                                        <p class="text-sm text-[#707070] ">Model code</p>
                                        <h1 class="font-semibold ">Billy Smit</h1>
                                    </div>
                                    <div class="flex justify-between">
                                        <p class="text-sm text-[#707070] ">Trim</p>
                                        <h1 class="font-semibold ">CFAD</h1>
                                    </div>
                                    <div class="flex justify-between">
                                        <p class="text-sm text-[#707070] ">Body Type</p>
                                        <h1 class="font-semibold ">Active</h1>
                                    </div>
                                    <div class="flex justify-between">
                                        <p class="text-sm text-[#707070] ">Doors</p>
                                        <h1 class="font-semibold ">Suspended</h1>
                                    </div>
                                    <div class="flex justify-between">
                                        <p class="text-sm text-[#707070] ">Seata</p>
                                        <h1 class="font-semibold ">Enabled</h1>
                                    </div>
                                    <p class="text-sm text-[#707070] ">GVM</p>
                                    <p class="text-sm text-[#707070] ">Engine Code</p>
                                    <p class="text-sm text-[#707070] ">Displacement (Cc)</p>
                                    <p class="text-sm text-[#707070] ">Displacement (L)</p>
                                    <p class="text-sm text-[#707070] ">Cylinders</p>
                                    <p class="text-sm text-[#707070] ">Enginders</p>
                                    <p class="text-sm text-[#707070] ">Engine Aspiration</p>
                                    <p class="text-sm text-[#707070] ">Fuel Type</p>
                                    <p class="text-sm text-[#707070] ">Engine Type</p>
                                    <p class="text-sm text-[#707070] ">Transmission</p>
                                    <p class="text-sm text-[#707070] ">Drive Type</p>
                                    <p class="text-sm text-[#707070] ">Front Tire Size</p>
                                    <p class="text-sm text-[#707070] ">Rear Tire Size</p>
                                </div>
                            </div>
                        </div>

                        <div class="border bg-white shadow rounded p-6">
                            <div class="flex items-center justify-between border-b-2 pb-4">
                                <h1>Ownership</h1>
                                <PenIcon class="w-4 h-4 text-[#D93243] mr-1" />
                            </div>
                            <div class="flex justify-between items-center">
                                <div class="space-y-1 mt-5">
                                    <p class="text-sm text-[#707070] ">Owner</p>
                                    <p class="text-sm text-[#707070] ">Owner ID</p>
                                    <p class="text-sm text-[#707070] ">First Registration</p>
                                    <p class="text-sm text-[#707070] ">Registration Certificate</p>
                                </div>
                                <div class="space-y-1 mt-5">
                                </div>
                            </div>
                        </div>

                        <div class="border bg-white shadow rounded p-6">
                            <div class="flex items-center justify-between border-b-2 pb-4">
                                <h1>Admin</h1>
                                <PenIcon class="w-4 h-4 text-[#D93243] mr-1" />
                            </div>
                            <div class="flex justify-between items-center">
                                <div class="space-y-1 mt-5">
                                    <p class="text-sm text-[#707070] ">Type</p>
                                    <p class="text-sm text-[#707070] ">Segment</p>
                                    <p class="text-sm text-[#707070] ">Weight Category</p>
                                    <p class="text-sm text-[#707070] ">Emissions Category</p>
                                    <p class="text-sm text-[#707070] ">Account</p>
                                </div>
                                <div class="space-y-1 mt-5">

                                </div>
                            </div>
                        </div>

                        <div class="border bg-white shadow rounded p-6">
                            <div class="flex items-center justify-between border-b-2 pb-4">
                                <h1>Status</h1>
                                <PenIcon class="w-4 h-4 text-[#D93243] mr-1" />
                            </div>
                            <p class="text-sm text-[#707070] mt-5">No Notes From Customer</p>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </AppLayout>
</template>
