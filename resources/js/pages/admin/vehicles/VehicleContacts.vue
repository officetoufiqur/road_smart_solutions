<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link } from '@inertiajs/vue3';
import { ref } from 'vue';
import Table from '@/components/my-components/Table.vue';
import {  SquarePenIcon, Trash2Icon } from 'lucide-vue-next';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Users',
        href: '/users',
    }
];

const users = ref([
    {
        id: 1,
        name: 'Billy Smith',
        phone: '1234567890',
        email: 'runny99@mail.com',
        profiles: 'Buyer, Seller',
        accounts: 2,
        status: 'No Access',
        action: 'Edit'
    }
]);

const columns = [
    { key: 'name', label: 'Name' },
    { key: 'phone', label: 'Phone' },
    { key: 'email', label: 'Email' },
    { key: 'profiles', label: 'Profiles' },
    { key: 'accounts', label: 'Accounts' },
    { key: 'status', label: 'Status' },
    { key: 'action', label: 'Action' }
];
</script>

<template>

    <Head title="Users" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 md:px-10 px-5">
            <Table :plans="users" :columns="columns" :filter-btn="['User', 'No User Access', 'Subscribers','Achieved']" :filter=true>
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
                    <div class="flex items-center gap-2">
                        <SquarePenIcon class="w-4 h-4" />
                        <Trash2Icon class="w-4 h-4" />
                    </div>
                </template>
            </Table>
        </div>
    </AppLayout>
</template>
