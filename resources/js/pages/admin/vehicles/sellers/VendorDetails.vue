<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import { ArrowLeftIcon, NotebookPenIcon } from 'lucide-vue-next';
import { Link } from '@inertiajs/vue3';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Vendor Details',
        href: '/sellers',
    }
];

</script>

<template>

    <Head title="Sellers" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="py-10 lg:px-20 px-5">
            <div class="lg:flex justify-between mb-10">
                <div>
                    <h1 class="text-xl font-bold">Hensons Garage</h1>
                    <ul class="list-disc flex space-x-6 text-sm text-[#333333B5]">
                        <p>Business</p>
                        <li>Zambia</li>
                        <li>Seller for about 6 hours</li>
                    </ul>
                </div>
                <div class="lg:flex space-x-4 space-y-3 mt-3 lg:mt-0 lg:space-y-0">
                    <!-- <button class="bg-[#ed4c78] text-white px-20 py-2 w-[100%] text-sm rounded font-medium hover:bg-red-600 cursor-pointer">Suspend This Vendor</button> -->
                     <button class="w-[15rem] bg-[#ed4c78] text-white text-sm py-2 cursor-pointer rounded">Suspend This Vendor</button>
                    <select name="" id="" class="bg-[#D93243] text-white rounded px-6 text-sm py-2 cursor-pointer">
                        <option value="">More Actions</option>
                        <option value="">Suspended</option>
                    </select>
                    <div class="flex items-center cursor-pointer bg-gray-100 text-sm lg:w-[100% rounded px-6 py-2 text-sm cursor-pointer">
                        <ArrowLeftIcon class="w-4 h-4" />
                        <button class="cursor-pointer"> Back</button>
                    </div>
                </div>
            </div>
            <div class="min-h-screen bg-white border shadow">
                <!-- Top Navigation -->
                <nav class="bg-white border-b border-gray-200">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="flex justify-between lg:h-16 py-5 lg:py-0">
                            <div class="flex">
                                <div class="lg:flex space-x-8">
                                    <Link :href="route('vendor.details')"
                                        class=" border-red-500  text-red-500 hover:text-red-500 hover:border-red-500 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                                        Overview
                                    </Link>
                                    <Link :href="route('orders')"
                                        class=" border-transparent hover:text-red-500 hover:border-red-500 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
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
                    <div class="lg:flex gap-8">
                        <!-- Left Sidebar -->
                        <div class="lg:w-64 space-y-4">
                            <!-- Total Products -->
                            <div class="bg-white rounded-lg shadow p-6">
                                <h3 class="text-sm font-medium text-gray-500 mb-2">Total Products</h3>
                                <p class="text-3xl font-bold text-gray-900">23</p>
                            </div>

                            <!-- Total Services -->
                            <div class="bg-white rounded-lg shadow p-6">
                                <h3 class="text-sm font-medium text-gray-500 mb-2">Total Services</h3>
                                <p class="text-3xl font-bold text-gray-900">16</p>
                            </div>

                            <!-- Total Discounts -->
                            <div class="bg-red-500 rounded-lg shadow p-6">
                                <h3 class="text-sm font-medium text-white mb-2">Total Requests</h3>
                                <p class="text-3xl font-bold text-white">-</p>
                            </div>

                            <!-- Total Orders -->
                            <div class="bg-white rounded-lg shadow p-6">
                                <h3 class="text-sm font-medium text-gray-500 mb-2">Total Orders</h3>
                                <p class="text-3xl font-bold text-gray-900">-</p>
                            </div>
                        </div>

                        <!-- Main Content -->
                        <div class="lg:flex-1 space-y-6">
                            <!-- Store Info -->
                            <div class="bg-white border rounded-lg shadow">
                                <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
                                    <h2 class="font-bold text-gray-900">Store Info</h2>
                                    <button
                                        class="text-red-500 px-4 py-2 rounded text-sm font-medium">
                                        Edit
                                    </button>
                                </div>
                                <div class="flex justify-between px-6 py-4">
                                    <p class="text-gray-600 text-sm">Hensos Garage</p>
                                    <p class="text-gray-600 text-sm">view live</p>
                                </div>
                            </div>

                            <!-- Location -->
                            <div class="bg-white border rounded-lg shadow">
                                <div class="px-6 py-4 border-b border-gray-200">
                                    <h2 class="font-bold text-gray-900">Location</h2>
                                </div>
                                <div class="px-6 py-4">
                                    <p class="text-gray-600 text-sm">2972 Westheimer Rd. Santa Ana, Illinois 85486</p>
                                </div>
                            </div>

                            <!-- Status -->
                            <div class="bg-white border rounded-lg shadow">
                                <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
                                    <h2 class="font-bold text-gray-900">Status</h2>
                                    <button
                                        class="text-red-500 px-4 py-2 rounded text-sm font-medium ">
                                        Edit
                                    </button>
                                </div>
                                <div class="px-6 py-4">
                                    <p class="text-green-600 text-sm">Active</p>
                                </div>
                            </div>

                            <!-- Notes -->
                            <div class="bg-white border rounded-lg shadow">
                                <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
                                    <h2 class="font-bold text-gray-900">Notes</h2>
                                    <NotebookPenIcon class="text-gray-500 w-4.5 h-4.5" />
                                </div>
                                <div class="px-6 py-4">
                                    <p class="text-gray-600 text-sm">Just a heads-up that I'm taking a little break from service. It's essential to recharge to deliver my best. I appreciate your support and understanding during this time. Don't worry; I'll be back in action soon</p>
                                </div>
                            </div>

                            <!-- Comments -->
                            <div class="bg-white border rounded-lg shadow">
                                <div class="px-6 py-4 border-b border-gray-200">
                                    <h2 class="font-bold text-gray-900">Comments</h2>
                                </div>
                                <div class="px-6 py-4">
                                    <div class="flex gap-4">
                                        <textarea
                                            class="flex-1 h-20 p-3 border border-gray-300 rounded-md resize-none focus:ring-2 focus:ring-red-500 focus:border-red-500"
                                            placeholder="Add a comment..."></textarea>
                                        <button
                                            class="bg-red-500 text-white px-6 py-2 rounded text-sm font-medium hover:bg-red-600 h-fit">
                                            Post
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Right Sidebar -->
                        <div class="lg:w-80 space-y-6">
                            <!-- Seller Info -->
                            <div class="bg-white border rounded-lg shadow">
                                <div class="px-6 py-4 border-b border-gray-200">
                                    <h2 class="font-bold text-gray-900">Seller Info</h2>
                                    <p class="text-xs font-bold text-gray-900 mt-1">Seller Name</p>
                                </div>
                                <div class="px-6 py-4">
                                    <p class="text-xs text-gray-600 mb-1">Hensons Garage</p>
                                    <p class="text-xs text-gray-600">Busines</p>
                                    <p class="text-xs text-gray-600">11134567</p>
                                </div>
                            </div>

                            <!-- Contact Info -->
                            <div class="bg-white border rounded-lg shadow">
                                <div class="px-6 py-4 border-b border-gray-200">
                                    <h2 class="font-bold text-gray-900">Contact Info</h2>
                                </div>
                                <div class="px-6 py-4">
                                    <p class="text-xs text-red-600 mb-1">contact@example.com</p>
                                    <p class="text-xs text-gray-600">+62 812 3456 7890</p>
                                    <p class="text-xs text-gray-600">Will Recive Notification in English</p>
                                </div>
                            </div>

                            <!-- Tax Identity Number -->
                            <div class="bg-white border rounded-lg shadow">
                                <div class="px-6 py-4 border-b border-gray-200">
                                    <h2 class="font-bold text-gray-900">Tax Identity Number</h2>
                                </div>
                                <div class="px-6 py-4">
                                    <p class="text-xs text-gray-600">1234567</p>
                                </div>
                            </div>

                            <!-- Registered Address -->
                            <div class="bg-white border rounded-lg shadow">
                                <div class="px-6 py-4 border-b border-gray-200">
                                    <h2 class="font-bold text-gray-900">Registered Address</h2>
                                </div>
                                <div class="px-6 py-4">
                                    <p class="text-xs text-gray-600">Jl. Raya Bogor Km 26 No.1 Depok 16951</p>
                                </div>
                            </div>

                            <!-- Store Information -->
                            <div class="bg-white border rounded-lg shadow">
                                <div class="px-6 py-4 border-b border-gray-200">
                                    <h2 class="font-bold text-gray-900">Bank Information</h2>
                                </div>
                                <div class="px-6 py-4 space-y-2">
                                    <p class="text-xs text-gray-600">Bank Name</p>
                                    <p class="text-xs text-gray-600">Account Name</p>
                                    <p class="text-xs text-gray-600">Account Number</p>
                                    <p class="text-xs text-gray-600">Branch</p>
                                </div>
                            </div>

                            <!-- Account Owner -->
                            <div class="bg-white border rounded-lg shadow">
                                <div class="px-6 py-4 border-b border-gray-200">
                                    <h2 class="font-bold text-gray-900">Account Owner</h2>
                                </div>
                                <div class="px-6 py-4">
                                    <div class="flex items-center space-x-3">
                                        <div
                                            class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center">
                                            <span class="text-white font-medium text-lg">JD</span>
                                        </div>
                                        <div>
                                            <p class="text-sm font-medium text-gray-900">John Doe</p>
                                            <p class="text-sm text-gray-600">john.doe@example.com</p>
                                            <p class="text-sm text-gray-600">+123456789</p>
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-600 text-white mt-1">
                                                Change
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>