<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import { ref } from 'vue';
import Table from '@/components/my-components/Table.vue';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Customers',
        href: '/customers',
    }
];

const Customers = ref([
    {
        id: 1,
        contact_id: '#X1000',
        acount_name: 'Billy Smith',
        account_type: 'Individual',
        status: 'Open',
        location: 'New York',
        contact: 'John Doe',
        order: '1 order',
        amount_Spent: 'ZK 1000'
    }
]);

const columns = [
    { key: 'contact_id', label: 'Account' },
    { key: 'acount_name', label: 'Account Name' },
    { key: 'account_type', label: 'Account Type' },
    { key: 'status', label: 'User Status' },
    { key: 'location', label: 'Location' },
    { key: 'contact', label: 'Contact' },
    { key: 'order', label: 'Order' },
    { key: 'amount_Spent', label: 'Amount Spent' }
];
</script>

<template>

    <Head title="Customers" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <Table :plans="Customers" :columns="columns" :shortIcon=true :show-create-button="true" :show-export-button="true" create-route="/add/customer" create-title="Add Customer" :filter-btn="['Active', 'Closed', 'Suspended']">
                <template #status="{ item }">
                    <span class="text-[#56BD18] bg-green-100 px-3.5 py-1.5 rounded text-sm font-semibold">
                        {{ item.status }}
                    </span>
                </template>
            </Table>
        </div>
    </AppLayout>
</template>