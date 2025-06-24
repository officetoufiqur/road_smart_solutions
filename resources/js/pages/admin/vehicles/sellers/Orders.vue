
<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import { ArrowLeftIcon } from 'lucide-vue-next';
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';
import ClientTable from '@/components/my-components/ClientTable.vue';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Vendor Details',
        href: '/sellers',
    }
];

const Vehicles = ref([
    {
        id: 1,
        custom_id: '#13919',
        dates: '21-11-2024',
        customer_name: 'On Site',
        payment_status: 'Pending',
        total: 'K9,1000',
        fulfilment_status: 'Unfulfilled',
        items: '5'
    },
    {
        id: 2,
        custom_id: '#13919',
        dates: '21-11-2024',
        customer_name: 'Home',
        payment_status: 'Partially Paid',
        total: 'K9,1000',
        fulfilment_status: 'Partially Fulfilled',
        items: '5'
    },
    {
        id: 2,
        custom_id: '#13919',
        dates: '21-11-2024',
        customer_name: 'Home',
        payment_status: 'Paid',
        total: 'K9,1000',
        fulfilment_status: 'Fulfilled',
        items: '5'
    }
]);

const columns = [
    { key: 'custom_id', label: 'Order' },
    { key: 'dates', label: 'Dates' },
    { key: 'customer_name', label: 'Customer Name' },
    { key: 'payment_status', label: 'Payment Status' },
    { key: 'total', label: 'Total' },
    { key: 'fulfilment_status', label: 'Fulfilment Status' },
    { key: 'items', label: 'Items' }
];

</script>

<template>

    <Head title="Sellers" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="py-10 lg:px-20 px-5">
            <div class="lg:flex justify-between mb-10 space-y-5 lg:space-y-0">
                <div>
                    <h1 class="text-xl font-bold">Hensons Garage</h1>
                    <ul class="list-disc flex space-x-6 text-sm text-[#333333B5]">
                        <p>Business</p>
                        <li>Zambia</li>
                        <li>Seller for about 6 hours</li>
                    </ul>
                </div>
                <div class="flex space-x-4">
                    <select name="" id="" class="bg-[#D93243] text-white rounded px-6 text-sm py-2 cursor-pointer">
                        <option value="">More Actions</option>
                        <option value="">Suspended</option>
                    </select>
                    <div class="flex items-center bg-gray-100 rounded px-6 py-2 text-sm cursor-pointer">
                        <ArrowLeftIcon class="w-4 h-4" />
                        <button> Back</button>
                    </div>
                </div>
            </div>
            <div class=" bg-white border shadow">
                <!-- Top Navigation -->
                <nav class="bg-white border-b border-gray-200">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="flex justify-between lg:h-16 py-5 lg:py-0">
                            <div class="flex">
                                <div class="lg:flex space-x-8">
                                    <Link :href="route('vendor.details')"
                                        class=" border-transparent hover:text-red-500 hover:border-red-500 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                                    Overview
                                    </Link>
                                    <Link :href="route('orders')"
                                        class=" border-red-500  text-red-500 hover:text-red-500 hover:border-red-500 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                                    Orders
                                    </Link>
                                    <Link :href="route('request')"
                                        class="border-transparent hover:text-red-500 hover:border-red-500 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                                        Request
                                    </Link>
                                    <a href="#"
                                        class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                                        Product
                                    </a>
                                    <a href="#"
                                        class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                                        Service
                                    </a>
                                    <a href="#"
                                        class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                                        Payments
                                    </a>
                                    <a href="#"
                                        class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                                        Setting
                                    </a>
                                    <a href="#"
                                        class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                                        Review
                                    </a>
                                    <a href="#"
                                        class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                                        Contacts
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>

                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                    <div class="lg:flex gap-8 space-y-5 lg:space-y-0">
                        <!-- Left Sidebar -->
                        <div class="lg:w-2/3 space-y-4 border  p-5 rounded">
                            <ClientTable :plans="Vehicles" :columns="columns" :filter-btn="'Bulk Edit'">
                                <template #fulfilment_status="{ item }">
                                    <div class="flex items-center gap-1">
                                        <span v-if="item.fulfilment_status === 'Unfulfilled'"
                                            class="text-red-600 bg-red-100 text-xs px-3.5 py-1.5 rounded font-semibold">
                                            {{ item.fulfilment_status }}
                                        </span>
                                        <span v-else-if="item.fulfilment_status === 'Fulfilled'"
                                            class="text-[#56BD18] bg-green-100 text-xs px-3.5 py-1.5 rounded font-semibold">
                                            {{ item.fulfilment_status }}
                                        </span>
                                        <span v-else
                                            class="text-yellow-700 bg-[#DECB1F] text-xs px-3.5 py-1.5 rounded font-semibold">
                                            {{ item.fulfilment_status }}
                                        </span>
                                    </div>
                                </template>

                                <template #payment_status="{ item }">
                                    <span v-if="item.payment_status === 'Pending'"
                                        class="text-red-600 bg-red-100 text-xs px-3.5 py-1.5 rounded font-semibold">
                                        {{ item.payment_status }}
                                    </span>
                                    <span v-if="item.payment_status === 'Partially Paid'"
                                        class="text-yellow-700 bg-[#DECB1F] text-xs px-3.5 py-1.5 rounded font-semibold">
                                        {{ item.payment_status }}
                                    </span>
                                    <span v-if="item.payment_status === 'Paid'"
                                        class="text-[#56BD18] bg-green-100 text-xs px-3.5 py-1.5 rounded font-semibold">
                                        {{ item.payment_status }}
                                    </span>
                                </template>
                            </ClientTable>

                            <div class="bg-white border rounded-lg shadow mt-10">
                                <div class="px-6 py-4 border-b border-gray-200">
                                    <h2 class="font-bold text-gray-900">Comments</h2>
                                </div>
                                <div class="px-6 pt-4 pb-14 relative">
                                    <div class="flex gap-4 ">
                                        <textarea name="" id="" placeholder="Add a comment..."
                                            class="w-full border border-gray-300 text-xs p-3 h-20 rounded"></textarea>
                                    </div>
                                    <button
                                        class="bg-red-500 absolute my-3 text-xs cursor-pointer right-6 text-white px-6 py-2 rounded font-medium hover:bg-red-600 h-fit">
                                        Post
                                    </button>
                                </div>
                            </div>

                            <!-- Account Owner -->
                            <div class="bg-white border rounded-lg shadow">
                                <div class="px-6 py-4">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-12 h-12 bg-blue-500 rounded-md flex items-center justify-center">
                                            <span class="text-white font-medium text-lg">JD</span>
                                        </div>
                                        <div>
                                            <p class="font-medium text-gray-900">John Doe</p>
                                            <p class="text-sm text-gray-900">john.doe@example.com</p>
                                            <p class="text-sm text-gray-600">Tested</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="p-6">

                                <!-- Timeline -->
                                <div class="relative border-l-2  pl-6 space-y-8">
                                    <!-- Item 1 -->
                                    <div class="relative">
                                        <div
                                            class="absolute -left-[2.1rem] top- w-4 h-4 bg-red-600 rounded-full border-2 border-white">
                                        </div>
                                        <p class="text-red-600 font-semibold text-sm">July 23</p>
                                        <p class="text-gray-400 text-x">You fulfilled 1 item from Cairo Road</p>
                                    </div>

                                    <!-- Item 2 -->
                                    <div class="relative">
                                        <div
                                            class="absolute -left-[2.1rem] top-1 w-4 h-4 bg-red-600 rounded-full border-2 border-white">
                                        </div>
                                        <p class="text-red-600 font-semibold text-sm">July 24</p>
                                        <p class="text-gray-400 text-x">You fulfilled 1 item from Cairo Road</p>
                                    </div>

                                    <div class="relative">
                                        <div
                                            class="absolute -left-[2.1rem] top- w-4 h-4 bg-red-600 rounded-full border-2 border-white">
                                        </div>
                                        <p class="text-red-600 font-semibold text-sm">July 25</p>
                                        <p class="text-gray-400 text-x">You fulfilled 1 item from Cairo Road</p>
                                    </div>
                                </div>
                            </div>


                        </div>


                        <!-- Right Sidebar -->
                        <div class="lg:w-100 space-y-6">
                            <div class="w-full max-w-md mx-auto space-y-4 ">
                                <!-- Customer Info -->
                                <div class="bg-white border p-4 rounded shadow-sm relative">
                                    <h2 class="font-bold text-lg mb-4">Customer Info</h2>
                                    <p class="text-sm font-semibold mb-1">Customer Type</p>
                                    <p class="text-xs text-gray-600 mb-5">Individual</p>

                                    <div class="text-sm text-gray-800 mt-3">
                                        <p class="font-semibold">Contact Info</p>
                                        <p class="text-red-600">youexample@gmail.com</p>
                                        <p>+923088289291</p>
                                        <p class="text-xs text-gray-500">Will receive Notification in English</p>
                                    </div>

                                    <div class="text-sm text-gray-800 mt-3">
                                        <p class="font-semibold">Default Address</p>
                                        <p>2972 Westheimer Rd. Santa Ana, Illinois 85486</p>
                                    </div>

                                    <div class="text-sm text-gray-800 mt-3">
                                        <p class="font-semibold">Tax Settings</p>
                                        <p>Yes Collect Exemptions</p>
                                    </div>

                                    <div class="text-sm text-gray-800 mt-3">
                                        <p class="font-semibold">Marketing</p>
                                        <div class="flex items-center gap-2 text-sm mt-1">
                                            <span class="w-2.5 h-2.5 bg-green-500 rounded-full"></span>
                                            SMS Subscribed
                                        </div>
                                        <div class="flex items-center gap-2 text-sm">
                                            <span class="w-2.5 h-2.5 bg-green-500 rounded-full"></span>
                                            Email Subscribed
                                        </div>
                                    </div>

                                    <!-- Dots -->
                                    <div class="absolute top-4 right-4 text-gray-400 cursor-pointer">⋮</div>
                                </div>

                                <!-- Contacts -->
                                <div class="bg-white border p-4 rounded shadow-sm relative">
                                    <h2 class="font-semibold mb-2">Contacts <span
                                            class="ml-1 bg-green-100 text-green-600 text-xs px-2 py-0.5 rounded-full">2</span>
                                    </h2>
                                    <p class="text-sm font-semibold text-gray-700">Soft UI UX</p>
                                    <p class="text-sm text-red-600">youexample@gmail.com</p>
                                    <p class="text-sm text-gray-600">Director, Finance</p>
                                    <p class="text-sm text-gray-600">+923088289291</p>
                                    <div class="absolute top-4 right-4 text-gray-400 cursor-pointer">⋮</div>
                                </div>

                                <!-- Category -->
                                <div class="bg-white border p-4 rounded shadow-sm flex justify-between items-center">
                                    <div>
                                        <h2 class="font-semibold text-sm mb-1">Category</h2>
                                        <p class="text-sm text-gray-700">Prospect</p>
                                    </div>
                                    <button class="text-red-500 text-sm">Edit</button>
                                </div>

                                <!-- Driver License -->
                                <div class="bg-white p-4 rounded shadow-sm flex justify-between">
                                    <div>
                                        <h2 class="font-semibold text-sm mb-1">Driver License</h2>
                                        <p class="text-sm text-gray-700">License NO</p>
                                        <p class="text-sm text-gray-500">UN2133845</p>
                                        <p class="text-sm text-gray-700 mt-1">Expiry Date</p>
                                        <p class="text-sm text-gray-500">21/06/2027</p>
                                    </div>
                                    <button class="text-red-500 text-sm">Edit</button>
                                </div>

                                <!-- Status -->
                                <div class="bg-white border p-4 rounded shadow-sm flex justify-between items-center">
                                    <div>
                                        <h2 class="font-semibold text-sm mb-1">Status</h2>
                                        <p class="text-sm text-green-600 font-semibold">Active</p>
                                    </div>
                                    <button class="text-red-500 text-sm">Edit</button>
                                </div>

                                <!-- Notes -->
                                <div class="bg-white border p-4 rounded shadow-sm relative">
                                    <h2 class="font-semibold text-sm mb-2">Notes</h2>
                                    <p class="text-sm text-gray-600 leading-relaxed">
                                        Just a heads-up that I’m taking a little break from service. No essential tools
                                        or systems to delay my
                                        tasks.
                                        I appreciate your support and understanding during this time. Don’t worry: I’ll
                                        be back in action soon.
                                    </p>
                                    <button class="absolute top-4 right-4 text-gray-400 hover:text-black">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.232 5.232l3.536 3.536M9 13h3l9-9a1.5 1.5 0 00-2.121-2.121L9 10v3z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 20H4a1 1 0 01-1-1V4a1 1 0 011-1h11" />
                                        </svg>
                                    </button>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>