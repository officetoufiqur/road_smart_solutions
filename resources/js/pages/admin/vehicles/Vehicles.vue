<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import { ref } from 'vue';
import Table from '@/components/my-components/Table.vue';
import { CheckIcon } from 'lucide-vue-next';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Vehicles',
        href: '/vehicles',
    }
];

const Vehicles = ref([
    {
        id: 1,
        vehicle_name: '2011 BMW X3',
        reg_no: 'BAG6187',
        vin: 'JTDKBRFU9J30593O7',
        make: 'BMW',
        model: 'X3',
        year: '2011',
        source: 'VIN',
        verified: 'VIN',
        status: 'Active',
        type: 'Car',
        confilict: 'Engine Mismatch'
    }
]);

const columns = [
    { key: 'vehicle_name', label: 'Vehicle Name' },
    { key: 'reg_no', label: 'Reg No' },
    { key: 'vin', label: 'Vin' },
    { key: 'make', label: 'Make' },
    { key: 'model', label: 'Model' },
    { key: 'year', label: 'Year' },
    { key: 'source', label: 'Source' },
    { key: 'verified', label: 'Verified' },
    { key: 'status', label: 'Status' },
    { key: 'type', label: 'Type' },
    { key: 'confilict', label: 'Confilict' }
];
</script>

<template>

    <Head title="Vehicles" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <Table :plans="Vehicles" :columns="columns" :show-create-button="true" :show-export-button="true" create-route="/add/vehicles" create-title="Add Vehicle" :filter-btn="['Active', 'Flagged', 'Duplicate', 'Archived']">
                <template #verified="{ item }">
                    <div class="flex items-center gap-1">
                        <CheckIcon class="bg-green-600 text-white w-3.5 h-3.5 rounded p-[2px]" />
                        <p>{{ item.verified }}</p>
                    </div>
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