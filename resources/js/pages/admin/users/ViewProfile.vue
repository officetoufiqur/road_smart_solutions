<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import { ref } from 'vue';
import { ChevronDownIcon, UserIcon, ChevronRightIcon } from 'lucide-vue-next';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Users',
        href: '/users',
    }
];
const comment = ref('')

const postComment = () => {
    if (comment.value.trim()) {
        // Handle comment posting logic here
        console.log('Posting comment:', comment.value)
        comment.value = ''
    }
}


</script>

<template>

    <Head title="Users" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <section class="my-16 mx-20">
            <div class="min-h-screen">
                <!-- Top Navigation -->
                <nav class="border shadow  px-6 py-3">
                    <div class="flex items-center justify-between space-x-6">
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
                        <div class="flex space-x-6 text-gray-700 text-sm">
                            <button class="hover:text-white">Rest MFA</button>
                            <button class="hover:text-white">Disable MFA</button>
                            <button class="hover:text-white">Reset Password</button>
                            <button class="hover:text-white">More action</button>
                        </div>
                    </div>
                </nav>

                <div class="flex gap-6 p-6">
                    <!-- Left Column -->
                    <div class="flex-1 space-y-6">
                        <!-- Sessions Section -->
                        <div class="border shadow rounded-lg p-6">
                            <div class="flex justify-between items-center mb-4">
                                <h2 class="text-lg font-semibold">Sessions</h2>
                                <button class="text-blue-600 text-sm hover:underline">Log out all sessions</button>
                            </div>

                            <div class="space-y-3">
                                <div class="flex justify-between items-center py-2 border-b border-gray-100">
                                    <div>
                                        <div class="font-medium">Chrome on Windows</div>
                                        <div class="text-sm text-gray-500">London, United • May 29, 2024 @ 8:41</div>
                                    </div>
                                    <button class="text-blue-600 text-sm hover:underline">Log out</button>
                                </div>

                                <div class="flex justify-between items-center py-2 border-b border-gray-100">
                                    <div>
                                        <div class="font-medium">iOS • Unknown</div>
                                        <div class="text-sm text-gray-500">London, United • May 29, 2024 @ 8:41</div>
                                    </div>
                                    <button class="text-blue-600 text-sm hover:underline">Log out</button>
                                </div>
                            </div>

                            <button class="text-gray-500 text-sm mt-4 flex items-center">
                                Show All Sessions
                                <ChevronDownIcon class="h-4 w-4 ml-1" />
                            </button>
                        </div>

                        <!-- Comment Section -->
                        <p class="text-gray-400 border-b border-gray-300 py-2">Timeline</p>
                        <div class="border shadow rounded-lg p-6">
                            <textarea v-model="comment" placeholder="Leave a comment"
                                class="w-full border border-gray-300 rounded p-3 h-24 resize-none focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                            <div class="flex justify-between items-center mt-4">
                                <button @click="postComment"
                                    class="bg-red-700 hover:bg-red-600 cursor-pointer text-white px-6 py-2 rounded">
                                    Post
                                </button>
                                <span class="text-gray-500 text-sm">Only you and other staff can see comments</span>
                            </div>
                        </div>

                        <!-- Activity/Notifications Section -->
                        <p class="text-gray-400 border-b border-gray-300 py-2">Today</p>
                        <div class="space-y-3">
                            <div class="border shadow rounded-lg p-4 flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="w-2 h-2 bg-blue-500 rounded-full mr-3"></div>
                                    <span class="text-sm">Order confirmation email was sent to Billy Smith
                                        (billysmith@gmail.com)</span>
                                </div>
                                <button class="text-blue-600 text-sm hover:underline">View email</button>
                            </div>

                            <div class="border shadow rounded-lg p-4 flex items-center">
                                <div class="w-2 h-2 bg-blue-500 rounded-full mr-3"></div>
                                <span class="text-sm">You added payment terms to this order</span>
                                <span class="text-gray-500 text-sm ml-auto">10:48 AM</span>
                            </div>

                            <div class="border shadow rounded-lg p-4 flex items-center">
                                <div class="w-2 h-2 bg-blue-500 rounded-full mr-3"></div>
                                <span class="text-sm">Confirmation #SQLEXPRESS was generated for this order</span>
                                <span class="text-gray-500 text-sm ml-auto">10:48 AM</span>
                            </div>

                            <div class="border shadow rounded-lg p-4 flex items-center">
                                <div class="w-2 h-2 bg-blue-500 rounded-full mr-3"></div>
                                <span class="text-sm">You closed this order for Billy Smith from draft order</span>
                                <span class="text-gray-500 text-sm ml-auto">10:48 AM</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="w-80 space-y-6">
                        <!-- User Profile Section -->
                        <div class="border shadow rounded-lg p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-gray-300 rounded-full mr-3 flex items-center justify-center">
                                    <UserIcon class="h-6 w-6 text-gray-600" />
                                </div>
                                <div>
                                    <h3 class="font-semibold">Ursula</h3>
                                    <span class="text-sm bg-green-100 text-green-800 px-2 py-1 rounded">AB0019</span>
                                </div>
                            </div>

                            <div class="space-y-3 text-sm">
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Status</span>
                                    <span class="text-green-600 font-medium">Active</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Sex</span>
                                    <span>Male</span>
                                </div>
                            </div>

                            <div class="mt-6">
                                <h4 class="font-medium mb-3">Contact Information</h4>
                                <div class="space-y-2 text-sm">
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Email</span>
                                        <span class="text-blue-600">billysmith@gmail.com</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Phone</span>
                                        <div class="flex items-center">
                                            <span class="text-green-500 mr-1">●</span>
                                            <span>+260 97 770 000</span>
                                        </div>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Website</span>
                                        <span class="text-blue-600">www.facebook.com</span>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-6">
                                <h4 class="font-medium mb-3">Default Address</h4>
                                <div class="text-sm">
                                    <div class="font-medium">Billy Smith</div>
                                    <div class="text-gray-600">CFAO</div>
                                </div>
                            </div>

                            <div class="mt-6">
                                <h4 class="font-medium mb-3">Roles</h4>
                                <div class="space-y-2">
                                    <div class="flex justify-between items-center">
                                        <span class="text-sm">Accountant</span>
                                        <span class="text-green-600 text-sm">Active</span>
                                    </div>
                                    <div class="flex justify-between items-center">
                                        <span class="text-sm">Seller</span>
                                        <span class="text-orange-600 text-sm">Suspended</span>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-6">
                                <h4 class="font-medium mb-3">Security</h4>
                                <div class="flex justify-between items-center">
                                    <span class="text-sm">2FA</span>
                                    <span class="text-green-600 text-sm font-medium">Enabled</span>
                                </div>
                            </div>
                        </div>

                        <!-- Notes Section -->
                        <div class="border shadow rounded-lg p-6">
                            <h4 class="font-medium mb-3">Notes</h4>
                            <p class="text-gray-500 text-sm">No Notes From Customer</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </AppLayout>
</template>
