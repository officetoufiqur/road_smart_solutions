<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, router } from '@inertiajs/vue3';
import { ref } from 'vue';
import Table from '@/components/my-components/Table.vue';
import { CarFrontIcon, CheckIcon } from 'lucide-vue-next';
import { EllipsisIcon, PencilIcon } from 'lucide-vue-next';

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
    { key: 'confilict', label: 'Confilict' },
    { key: 'action', label: 'Action' },
];

const activeAction = ref<number | null>(null);

function viewVehicle(id: number) {
    router.visit(`/view/vehicles/${id}`);
}

function editVehicle(id: number) {
    router.visit(`/edit/vehicles/${id}`);
}
</script>

<template>

    <Head title="Vehicles" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            
          <Table :plans="Vehicles" :columns="columns" :show-create-button="true" :show-export-button="true" create-route="/add/vehicles" :shortIcon=true create-title="Add Vehicle" :filter-btn="['Active', 'Flagged', 'Duplicate', 'Archived']">
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
                <template #action="{ item }">
                    <div class="text-gray-400 text-center cursor-pointer relative"
                        @click="activeAction = activeAction === item.id ? null : item.id">
                        <EllipsisIcon />
                    </div>
                    <transition name="fade" class="absolute">
                        <div v-if="activeAction === item.id"
                            class="absolute z-10 right-40 mt-2 bg-white rounded-xl shadow border w-50">
                            <ul class="py-4 px-2">
                                <li @click="viewVehicle(item.id)"
                                    class="flex items-center gap-2 px-4 py-2 hover:bg-red-50 cursor-pointer">
                                    <span  class="text-lg"><CarFrontIcon class="text-red-700 bg-red-100 w-9 h-9 p-2 rounded-md" /></span> View Vehicle
                                </li>
                                <li @click="editVehicle(item.id)"
                                    class="flex items-center gap-2 px-4 py-2 hover:bg-red-50 cursor-pointer">
                                    <span class="text-lg"><PencilIcon class="text-red-700 bg-red-100 w-8 h-8 p-2 rounded-md" /></span> Edit Vehicle
                                </li>
                            </ul>
                        </div>
                    </transition>
                </template>
            </Table>
        </div>
    </AppLayout>
</template>