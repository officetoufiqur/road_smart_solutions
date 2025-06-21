<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import { ref } from 'vue';
import Table from '@/components/my-components/Table.vue';
import { EllipsisIcon, HandIcon, PencilIcon, UserIcon } from 'lucide-vue-next';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Users',
        href: '/users',
    }
];
const activeAction = ref<number | null>(null);

const users = ref([
    {
        id: 1,
        name: 'Billy Smith',
        email: 'runny99@mail.com',
        role: ['Customer', 'Seller'],
        profiles: 3,
        status: 'Active',
        lastLogin: '2 days ago',
        avatar: 'https://i.pravatar.cc/50?u=1'
    },
    {
        id: 2,
        name: 'Alison Grey',
        email: 'mbrutes@gmail.com',
        role: ['Customer'],
        profiles: 1,
        status: 'Active',
        lastLogin: 'Not joined yet',
        avatar: 'https://i.pravatar.cc/50?u=2'
    },
    {
        id: 3,
        name: 'Alison Grey',
        email: 'mbrutes@gmail.com',
        role: ['Customer'],
        profiles: 1,
        status: 'Active',
        lastLogin: 'Not joined yet',
        avatar: 'https://i.pravatar.cc/50?u=2'
    },
    {
        id: 4,
        name: 'Alison Grey',
        email: 'mbrutes@gmail.com',
        role: ['Customer'],
        profiles: 1,
        status: 'Active',
        lastLogin: 'Not joined yet',
        avatar: 'https://i.pravatar.cc/50?u=2'
    },
    {
        id: 5,
        name: 'Alison Grey',
        email: 'mbrutes@gmail.com',
        role: ['Customer'],
        profiles: 1,
        status: 'Active',
        lastLogin: 'Not joined yet',
        avatar: 'https://i.pravatar.cc/50?u=2'
    },
]);

const columns = [
    { key: 'avatar', label: 'Name' },
    { key: 'email', label: 'Email' },
    { key: 'role', label: 'Role' },
    { key: 'profiles', label: 'Profiles' },
    { key: 'status', label: 'User Status' },
    { key: 'lastLogin', label: 'Last Login' },
    { key: 'action', label: 'Action' }
];
</script>

<template>

    <Head title="Users" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 px-20">
            <Table :plans="users" :columns="columns" :show-create-button="true" :show-export-button="true" create-route="/add/users" create-title="Add User" :filter-btn="['Active', 'Inactive', 'Suspended']">
                <template #avatar="{ item }">
                    <div class="flex items-center gap-2">
                        <img :src="item.avatar" class="w-8 h-8 rounded-full" />
                        <span>{{ item.name }}</span>
                    </div>
                </template>

                <template #role="{ item }">
                    <div class="flex gap-1">
                        <span v-for="r in item.role" :key="r" class="text-xs px-2 py-0.5 rounded-full"
                            :class="r === 'Customer' ? 'bg-green-100 text-green-700' : 'bg-blue-900 text-white'">
                            {{ r }}
                        </span>
                    </div>
                </template>

                <template #status="{ item }">
                    <span :class="{
                        'text-green-600 font-semibold': item.status === 'Active',
                        'text-gray-400': item.status !== 'Active'
                    }">
                        {{ item.status }}
                    </span>
                </template>
                <template #action="{ item }">
                    <div class="text-gray-400 text-center cursor-pointer relative"
                        @click="activeAction = activeAction === item.id ? null : item.id">
                        <EllipsisIcon />
                    </div>
                    <transition name="fade" class="absolute">
                        <div v-if="activeAction === item.id"
                            class="absolute z-10 right-40 mt-2 bg-white rounded-xl shadow border w-50">
                            <ul class="py-4 px-2">
                                <li
                                    class="flex items-center gap-2 px-4 py-2 hover:bg-red-50 cursor-pointer">
                                    <span class="text-lg"><UserIcon class="text-red-700 bg-red-100 w-9 h-9 p-2 rounded-md" /></span> View Profile
                                </li>
                                <li
                                    class="flex items-center gap-2 px-4 py-2 hover:bg-red-50 cursor-pointer">
                                    <span class="text-lg"><PencilIcon class="text-red-700 bg-red-100 w-9 h-9 p-2 rounded-md" /></span> Edit Access
                                </li>
                                <li
                                    class="flex items-center gap-2 px-4 py-2 hover:bg-red-50 cursor-pointer">
                                    <span class="text-lg"><HandIcon class="text-red-700 bg-red-100 w-9 h-9 p-2 rounded-md" /></span> De-active
                                </li>
                            </ul>
                        </div>
                    </transition>
                </template>
            </Table>
        </div>
    </AppLayout>
</template>
