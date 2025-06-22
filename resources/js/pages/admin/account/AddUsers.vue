<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link } from '@inertiajs/vue3';
import { UserIcon, ChevronRightIcon } from 'lucide-vue-next';
import { ref } from 'vue';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Users',
        href: '/users',
    }
];

const userForm = ref({
    firstName: '',
    lastName: '',
    phone: '',
    email: '',
    type: ''
})

const personalDetails = ref({
    dateOfBirth: '25/05/201980',
    nationalId: '25/05/201980',
    driversLicense: '25/05/201980',
    licenseClass: 'license',
    licenseExpiry: 'March 30, 2026'
})

const userAccess = ref('enable')
const status = ref('Active')

</script>

<template>

    <Head title="Users" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <section class="pt-10 lg:px-20 md:px-10 px-5">
            <div class="flex justify-between mb-4 items-center">
                <h2 class="text-lg font-semibold text-gray-500">
                    <UserIcon class="inline mt-[-6px] text-[#D93243] w-5.5 h-5.5" />
                    <ChevronRightIcon class="inline mt-[-4px] text-gray-500 w-4 h-4" />Add User
                </h2>
                <Link :href="route('users')"
                    class="bg-red-700 duration-300 cursor-pointer text-white md:text-[16px] text-[14px] px-8 py-2.5 rounded">Back</Link>
            </div>

            <div class="min-h-screen">
                <form class="grid grid-cols-1 lg:grid-cols-3 gap-4">

                    <!-- User Overview Section -->
                    <div class="lg:col-span-2">
                        <div class="border shadow-md rounded-lg p-6 mb-4">
                            <h2 class="text-lg font-semibold mb-4 text-gray-800">User overview</h2>

                            <div class="grid lg:grid-cols-2 gap-4 mb-4">
                                <div class="">
                                    <label class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
                                    <div class="flex">
                                        <select class="border border-gray-300 rounded-l px-2 py-2 bg-white text-sm">
                                            <option>Mr</option>
                                            <option>Ms</option>
                                            <option>Mrs</option>
                                        </select>
                                        <input v-model="userForm.firstName" type="text"
                                            class="flex-1 w-50 sm:w-full md:w-full lg:w-full border-t border-b border-r border-gray-300 rounded-r px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
                                    <input v-model="userForm.lastName" type="text"
                                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
                                <div class="flex">
                                    <select class="border border-gray-300 rounded-l px-2 py-2 bg-white">
                                        <option>🇺🇸</option>
                                        <option>🇬🇧</option>
                                        <option>🇨🇦</option>
                                    </select>
                                    <input v-model="userForm.phone" type="tel" placeholder="+1 123 456 7890"
                                        class="flex-1 border-t w-50 border-b border-r border-gray-300 rounded-r px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                <input v-model="userForm.email" type="email" placeholder="alex@gmail.com"
                                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                            </div>

                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-700 mb-1">Type</label>
                                <select 
                                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <option selected>Select type</option>
                                    <option>Subscriber</option>
                                    <option>Admin</option>
                                    <option>User</option>
                                </select>
                            </div>
                        </div>

                        <!-- Default Address Section -->
                        <div class="border shadow rounded-lg p-6 mb-4">
                            <h3 class="text-lg font-semibold mb-2 text-gray-800">Default address</h3>
                            <p class="text-gray-600 text-sm mb-4">The primary address of this contact</p>
                            <input type="text" placeholder="Add address" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                            
                        </div>

                        <!-- Personal Details Section -->
                        <div class="border shadow rounded-lg p-6">
                            <h3 class="text-lg font-semibold mb-4 text-gray-800">Personal details</h3>

                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-700 mb-1">Date of Birth</label>
                                <input v-model="personalDetails.dateOfBirth" type="text" placeholder="25/05/201980"
                                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                            </div>

                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-700 mb-1">National ID Number</label>
                                <input v-model="personalDetails.nationalId" type="text" placeholder="25/05/201980"
                                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                            </div>

                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-700 mb-1">Drivers License
                                    Number</label>
                                <input v-model="personalDetails.driversLicense" type="text" placeholder="25/05/201980"
                                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                            </div>

                            <div class="grid lg:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">License Class</label>
                                    <select v-model="personalDetails.licenseClass"
                                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        <option>B</option>
                                        <option>A</option>
                                        <option>C</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">License expiry</label>
                                    <input v-model="personalDetails.licenseExpiry" type="text"
                                        placeholder="March 30, 2026"
                                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Sidebar -->
                    <div class="space-y-4">
                        <!-- User Access Section -->
                        <div class="border shadow rounded-lg p-6">
                            <h3 class="text-lg font-semibold mb-4 text-gray-800">User Access</h3>
                            <div class="space-y-2">
                                <label class="flex items-center">
                                    <input v-model="userAccess" type="radio" value="enable" class="mr-2" />
                                    <span class="ml-2">Enable Access</span>
                                </label>
                                <label class="flex items-center">
                                    <input v-model="userAccess" type="radio" value="disable" class="mr-2" />
                                    <span class="ml-2">No Access</span>
                                </label>
                            </div>
                        </div>

                        <!-- Status Section -->
                        <div class="border shadow rounded-lg p-6">
                            <h3 class="text-lg font-semibold mb-4 text-gray-800">Status</h3>
                            <p class="text-sm text-gray-600 mb-2">Active</p>
                            <select v-model="status"
                                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option>Active</option>
                                <option>Inactive</option>
                                <option>Pending</option>
                            </select>
                        </div>

                        <!-- Search Section -->
                        <div class="border shadow rounded-lg p-4">
                            <div class="relative mb-4">
                                <SearchIcon
                                    class="absolute left-3 top-1/2 transform -translate-y-1/2 h-4 w-4 text-gray-400" />
                                <input type="text" placeholder="Search..."
                                    class="w-full text-gray-700 bg-white border rounded px-10 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                            </div>

                            <div class="space-y-2">
                                <div class="text-red-400 text-sm">+ Create A New Contact</div>
                                <div class="text-gray-700">
                                    <div class="font-medium">Billy Smith</div>
                                    <div class="text-gray-400 text-sm">billy.smith@gmail.com</div>
                                </div><hr>
                                <div class="text-gray-700">
                                    <div class="font-medium">Binwell Ozark</div>
                                    <div class="text-gray-400 text-sm">binwell.ozark@gmail.com</div>
                                </div>
                            </div>
                        </div>

                        <!-- Notes Section -->
                        <div class="border shadow rounded-lg p-6">
                            <h3 class="text-lg font-semibold mb-4 text-gray-800">Notes</h3>
                            <p class="text-gray-500 text-sm">No Notes From Customer</p>
                        </div>
                    </div>

                    <button class="bg-red-700 w-50 duration-300 cursor-pointer text-white px-4 py-2.5 rounded">Save</button>
                </form>
            </div>
        </section>
    </AppLayout>
</template>
