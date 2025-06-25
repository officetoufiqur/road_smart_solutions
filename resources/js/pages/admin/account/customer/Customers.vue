<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, router } from '@inertiajs/vue3';
import { ref } from 'vue';
import Table from '@/components/my-components/Table.vue';
import { EllipsisIcon, PencilIcon, UserIcon } from 'lucide-vue-next';

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
    { key: 'amount_Spent', label: 'Amount Spent' },
    { key: 'action', label: 'Action' }
];

const activeAction = ref<number | null>(null);

function viewProfile(id: number) {
    router.visit(`/view/customer/${id}`);
}
</script>

<template>

    <Head title="Customers" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <Table :plans="Customers" :columns="columns" :shortIcon=true :show-create-button="true" :show-export-button="true" create-route="/add/customer" create-title="Add Customer" :filter-btn="['Active', 'Closed', 'Suspended']">
                <template #action="{ item }">
                    <div class="text-gray-400 text-center cursor-pointer relative"
                        @click="activeAction = activeAction === item.id ? null : item.id">
                        <EllipsisIcon />
                    </div>
                    <transition name="fade" class="absolute">
                        <div v-if="activeAction === item.id"
                            class="absolute z-10 right-40 mt-2 bg-white rounded-xl shadow border w-50">
                            <ul class="py-4 px-2">
                                <li @click="viewProfile(item.id)"
                                    class="flex items-center gap-2 px-4 py-2 hover:bg-red-50 cursor-pointer">
                                    <span  class="text-lg"><UserIcon class="text-red-700 bg-red-100 w-9 h-9 p-2 rounded-md" /></span> View Customer
                                </li>
                                <li
                                    class="flex items-center gap-2 px-4 py-2 hover:bg-red-50 cursor-pointer">
                                    <span class="text-lg"><PencilIcon class="text-red-700 bg-red-100 w-8 h-8 p-2 rounded-md" /></span> Edit Customer
                                </li>
                            </ul>
                        </div>
                    </transition>
                </template>
                 <template #status="{ item }">
                    <span class="text-[#56BD18] bg-green-100 px-3.5 py-1.5 rounded text-sm font-semibold">
                        {{ item.status }}
                    </span>
                </template>
            </Table>
        </div>
    </AppLayout>
</template>