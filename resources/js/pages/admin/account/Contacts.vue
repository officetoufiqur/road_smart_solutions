<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import { ref } from 'vue';
import Table from '@/components/my-components/Table.vue';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Contacts',
        href: '/contacts',
    }
];

const Contacts = ref([
    {
        id: 1,
        contact_id: '#X1000',
        name: 'Billy Smith',
        email: 'runny99@mail.com',
        profiles: 'Customer Seller',
        accounts: 3,
        status: 'Active',
        action: 'Disable',
    },
    {
        id: 2,
        contact_id: '#X1001',
        name: 'Alison Grey',
        email: 'mbrutes@gmail.com',
        profiles: 'Customer',
        accounts: 1,
        status: 'No access',
        action: 'ZK 43447.80',
    }
]);

const columns = [
    { key: 'contact_id', label: 'contact_id' },
    { key: 'name', label: 'Name' },
    { key: 'email', label: 'Email' },
    { key: 'profiles', label: 'Profiles' },
    { key: 'accounts', label: 'Accounts' },
    { key: 'status', label: 'User Status' },
    { key: 'action', label: 'Action' }
];
</script>

<template>

    <Head title="Contacts" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <Table :plans="Contacts" :columns="columns" :shortIcon=true :show-create-button="true" :show-export-button="true" create-route="/add/contacts" create-title="Create Contact" :filter-btn="['Active', 'Closed', 'Suspended']">
                <template #status="{ item }">
                    <span class="text-[#56BD18] bg-green-100 px-3.5 py-1.5 rounded text-sm font-semibold">
                        {{ item.status }}
                    </span>
                </template>
            </Table>
        </div>
    </AppLayout>
</template>