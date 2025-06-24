<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import { ref } from 'vue';
import Table from '@/components/my-components/Table.vue';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Master Vehicles',
        href: '/master/vehicles',
    }
];

const vehicles = ref([
    {
        id: 1,
        contact_id: '#X1000',
        image: 'https://archive.org/download/placeholder-image//placeholder-image.jpg',
        make: 'Toyota',
        model: 'Corolla',
        year: '2022',
        variant: 'Petrol Sedan',
        type: '2.4 4WD',
        chassis: 'U6_AWD',
        engine: '19,99cc 140HP 83kW',
        status: 'Verified',
        vehicle_type: 'Car'
    }
]);

const columns = [
    { key: 'contact_id', label: 'ID' },
    { key: 'image', label: 'Image' },
    { key: 'make', label: 'Make' },
    { key: 'model', label: 'Model' },
    { key: 'year', label: 'Year' },
    { key: 'variant', label: 'Variant' },
    { key: 'type', label: 'Type' },
    { key: 'chassis', label: 'Chassis' },
    { key: 'engine', label: 'Engine' },
    { key: 'status', label: 'Status' },
    { key: 'vehicle_type', label: 'Vehicle Type' }
];
</script>

<template>

    <Head title="Master Vehicles" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <Table :plans="vehicles" :shortIcon=true :columns="columns" :show-create-button="true" :show-export-button="true" create-route="/add/master/vehicles" create-title="Add Make" :filter-btn="['Verified', 'Draft', 'Pending', 'Archived','Disabled']">
                <template #image="{ item }">
                    <div class="flex items-center gap-1">
                        <img :src="item.image" alt="" class="w-15 h-15 rounded-full">
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