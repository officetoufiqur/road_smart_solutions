<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, router } from '@inertiajs/vue3';
import { ref } from 'vue';
import Table from '@/components/my-components/Table.vue';
import { EyeIcon } from 'lucide-vue-next';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Coverage',
        href: '/coverage',
    }
];

const coverage = ref([
    {
        id: 1,
        coverage: 'Third Party Liability',
        status: 'Active',
        type: 'Core',
    },
    {
        id: 2,
        coverage: 'Comprehensive Own Damage',
        status: 'Inactive',
        type: 'Add On',
    }
]);

const columns = [
    { key: 'coverage', label: 'Coverage' },
    { key: 'status', label: 'Status' },
    { key: 'type', label: 'Type' },
    { key: 'action', label: 'Action' },
];

function editUser(id: number) {
    router.visit(`/coverage/view/${id}`);
}
</script>

<template>

    <Head title="Coverage" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <Table :plans="coverage" :shortIcon=true :columns="columns" :show-create-button="true" create-route="/add/coverage/search" create-title="Add Coverage" :filter-btn="['Active','Inactive']">
                <template #action="{ item }">
                    <div class="flex items-center gap-1">
                        <button @click="editUser(item.id)" class="bg-green-500 px-3.5 py-1.5 rounded text-sm cursor-pointer text-white hover:underline"><EyeIcon class="w-5 h-5" /></button>
                    </div>
                </template>
                <template #status="{ item }">
                    <span v-if="item.status === 'Active'" class="text-[#56BD18] bg-green-100 px-3.5 py-1.5 rounded text-sm font-semibold">
                        {{ item.status }}
                    </span>
                    <span v-if="item.status === 'Inactive'" class="text-red-700 bg-red-100 px-3.5 py-1.5 rounded text-sm font-semibold">
                        {{ item.status }}
                    </span>
                </template>
            </Table>
        </div>
    </AppLayout>
</template>