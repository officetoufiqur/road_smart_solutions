<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link } from '@inertiajs/vue3';
import { UserIcon, ChevronRightIcon, XIcon, InfoIcon } from 'lucide-vue-next';
import { ref } from 'vue';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Customer',
        href: '/add/contacts',
    }
];

const userForm = ref({
    firstName: '',
    lastName: '',
    phone: '',
    email: '',
    type: ''
})

const userAccess = ref('enable')
const status = ref('Active')

const showModal = ref(false)

const closeModal = () => {
    showModal.value = false
}

</script>

<template>

    <Head title="Customer" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <section class="my-16 xl:mx-20 md:mx-10 mx-5">
            <div class="flex justify-between mb-4 items-center">
                <h2 class="text-lg font-semibold text-gray-500">
                    <UserIcon class="inline mt-[-6px] text-[#D93243] w-5.5 h-5.5" />
                    <ChevronRightIcon class="inline mt-[-4px] text-gray-500 w-4 h-4" />New Customer
                </h2>
                <Link :href="route('customers')"
                    class="bg-red-700 duration-300 cursor-pointer text-white px-8 py-2 text-[14px] sm:text-[16px] rounded">Back</Link>
            </div>

            <div class="min-h-screen">
                <form class="grid grid-cols-1 lg:grid-cols-3 gap-4">

                    <!-- User Overview Section -->
                    <div class="lg:col-span-2">
                        <div class="border shadow-md rounded-lg p-6 mb-4">
                            <h2 class="text-lg font-semibold mb-4 text-gray-800">Customer overview</h2>

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
                                <label class="block text-sm font-medium text-gray-700 mb-1">Customer Name</label>
                                <div class="flex">
                                    <input type="text" placeholder="Enter customer name"
                                        class="flex-1 border-t border-b border-r border-gray-300 rounded-r px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-700 mb-1">User Name</label>
                                <select
                                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <option selected>Select user name</option>
                                    <option>Subscriber</option>
                                    <option>Admin</option>
                                    <option>User</option>
                                </select>
                                <p class="text-sm text-gray-600 mt-2"><InfoIcon class="inline mt-[-4px] text-gray-500 w-4 h-4" /> This is the name will be displayed on the markets</p>
                            </div>

                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                <input v-model="userForm.email" type="email" placeholder="alex@gmail.com"
                                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
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
                        </div>

                        <!-- Default Address Section -->
                        <div class="border shadow rounded-lg p-6 mb-4">
                            <h3 class="text-lg font-semibold mb-2 text-gray-800 border-b pb-2">Default address</h3>
                            <p class="text-gray-600 text-sm mb-4">The primary address of this customer</p>
                            <div @click="showModal = true"
                                class="flex items-center justify-between font-semibold text-gray-600 w-full text-left cursor-pointer border border-gray-300 rounded px-3 py-2">
                                <div class="flex items-center">
                                    <PlusIcon class="h-4 w-4 mr-2" />
                                    + Add Address
                                </div>
                                <ChevronRightIcon class="h-4 w-4" />
                            </div>
                        </div>

                        <div v-if="showModal"
                            class="fixed inset-0 flex items-center bg-gray-600/85 justify-center p-4 z-50">
                            <!-- Modal Content -->
                            <div class="border bg-white shadow rounded-lg p-10 w-full max-w-2xl relative">
                                <!-- Modal Header -->
                                <div class="flex justify-between items-center mb-6 border-b py-3 border-gray-300">
                                    <h2 class="text-lg font-semibold text-gray-800">Add default address</h2>
                                    <div class="text-gray-400 hover:text-gray-600">
                                        <XIcon @click="closeModal" class="cursor-pointer text-[#CA2026] bg-[#FCF2F2] w-9 h-9 rounded p-2" />
                                    </div>
                                </div>

                                <!-- Form -->
                                <form class="space-y-4">
                                    <!-- Address Type and Country Row -->
                                    <div class="grid grid-cols-2 gap-4">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Address
                                                Type</label>
                                            <select
                                                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                                <option>Mailing Address</option>
                                                <option>Billing Address</option>
                                                <option>Shipping Address</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Country</label>
                                            <select
                                                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                                <option>🇿🇦 South Africa</option>
                                                <option>🇺🇸 United States</option>
                                                <option>🇬🇧 United Kingdom</option>
                                                <option>🇨🇦 Canada</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Attention -->
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Attention</label>
                                        <input type="text"
                                            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                    </div>

                                    <!-- Address -->
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Address</label>
                                        <input type="text" placeholder="Select address"
                                            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                    </div>

                                    <!-- Address, Suite, Etc. -->
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Address, Suite,
                                            Etc.</label>
                                        <input type="text"
                                            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                    </div>

                                    <!-- City and Postal Code Row -->
                                    <div class="grid grid-cols-2 gap-4">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">City</label>
                                            <input type="text"
                                                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Postal
                                                code</label>
                                            <input type="text"
                                                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                        </div>
                                    </div>

                                    <!-- Phone -->
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
                                        <div class="flex">
                                            <select class="border border-gray-300 rounded-l px-2 py-2 bg-white">
                                                <option value="+27">🇿🇦 +27</option>
                                                <option value="+1">🇺🇸 +1</option>
                                                <option value="+44">🇬🇧 +44</option>
                                            </select>
                                            <input type="tel" placeholder="497 5854 241"
                                                class="flex-1 border-t border-b border-r border-gray-300 rounded-r px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                        </div>
                                    </div>

                                    <!-- Action Buttons -->
                                    <div class="flex space-x-3 pt-4">
                                        <button type="submit"
                                            class="bg-[#CA2026] cursor-pointer hover:bg-red-600 text-white px-6 py-2 rounded font-medium">
                                            Save
                                        </button>
                                        <button type="button" @click="closeModal"
                                            class="bg-gray-200 cursor-pointer hover:bg-gray-300 text-gray-700 px-6 py-2 rounded font-medium">
                                            Cancel
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Tax details Section -->
                        <div class="border shadow rounded-lg p-6">
                            <h3 class="text-lg font-semibold mb-4 text-gray-800">Tax details</h3>

                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-700 mb-1">Collect tax</label>
                                <select class="border border-gray-300 rounded-l px-2 py-2 bg-white w-full">
                                    <option selected>Collect tax</option>
                                    <option>Collect taxes uniess exemption applies</option>
                                    <option>Do not collect taxes</option>
                                </select>
                            </div>

                        </div>

                    </div>

                    <!-- Right Sidebar -->
                    <div class="space-y-4">
                        <!-- User Access Section -->
                        <div class="border shadow rounded-lg p-6">
                            <h3 class="text-lg font-semibold mb-4 text-gray-800">Type</h3>
                            <div class="flex justify-between md:block xl:flex">
                                <label class="flex items-center">
                                    <input v-model="userAccess" type="radio" value="enable" class="mr-2" />
                                    <span class="ml-2">Business</span>
                                </label>
                                <label class="flex items-center mr-20">
                                    <input v-model="userAccess" type="radio" value="disable" class="mr-2" />
                                    <span class="ml-2">Individual</span>
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
                            <h1 class="text-lg font-semibold mb-4 text-gray-800">Primary Contact</h1>
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
                                </div>
                                <hr>
                                <div class="text-gray-700">
                                    <div class="font-medium">Binwell Ozark</div>
                                    <div class="text-gray-400 text-sm">binwell.ozark@gmail.com</div>
                                </div>
                            </div>
                        </div>

                        <!-- Notes Section -->
                        <div class="border shadow rounded-lg p-6">
                            <h3 class="text-lg font-semibold mb-4 text-gray-800 border-b pb-2">Notes</h3>
                            <p class="text-gray-500 text-sm">No Notes From Customer</p>
                        </div>
                    </div>

                    <button
                        class="bg-red-700 w-50 duration-300 cursor-pointer text-white px-4 py-2.5 rounded">Save</button>
                </form>
            </div>
        </section>
    </AppLayout>
</template>
