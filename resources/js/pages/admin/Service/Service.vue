<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link } from '@inertiajs/vue3';
import { ref } from 'vue';
import Table from '@/components/my-components/Table.vue';
import { EyeIcon, DollarSign, Timer, LineChart } from 'lucide-vue-next';
import NoDataFound from '@/components/my-components/NoDataFound.vue';



const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Service',
        href: '/service',
    },
];

const cards = [
    {
        value: '0%',
        label: 'Service By Sell Through Rate',
        percentage: 38,
        icon: DollarSign,
    },
    {
        value: '10 Days',
        label: 'Service By Days Of Inventory Remaining',
        percentage: 25,
        icon: Timer,
    },
    {
        value: 0,
        label: 'ABC Service Analysis',
        percentage: 14,
        icon: LineChart,
    },
];

const service = ref([
    {
        id: 1,
        image:'https://static.vecteezy.com/system/resources/thumbnails/026/175/448/small/sport-car-model-photo.jpg',
        product: 'Registration',
        status: 'Draft',
        variants: '3',
        category:'Compliance',
        tags: 'Good'
    },
    {
        id: 2,
        image:'https://static.vecteezy.com/system/resources/thumbnails/026/175/448/small/sport-car-model-photo.jpg',
        product: 'Change of Ownership',
        status: 'Active',
        variants: '6',
        category:'Uncategorized',
        tags: 'Service'
    },
]);

const columns = [
    { key: 'image', label: 'Image' },
    { key: 'product', label: 'Product' },
    { key: 'status', label: 'Status' },
    { key: 'variants', label: 'Variants' },
    { key: 'category', label: 'Category' },
    { key: 'tags', label: 'Tags' },
    { key: 'action', label: 'Action' },
];

</script>

<template>

    <Head title="Service" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <NoDataFound v-if="service.length === 0" :title="'Add Your Service'" :subTitle="'Lorem ipsum dolor sit amet consectetur adipisicing elit.'" :btnText="'Add Service'" :btnUrl="'/service'" />
            <div v-else>
            <!-- Card Section -->
            <div class="grid grid-cols-1 2xl:grid-cols-3 xl:grid-cols-2 lg:grid-cols-2 gap-4 mb-8">
                <div v-for="(card, index) in cards" :key="index"
                    class="flex items-center justify-between p-4 h-28 bg-white rounded-xl shadow border border-gray-200">
                    <div class="flex items-center gap-3">
                        <div class="bg-red-100 p-2 rounded-md">
                            <component :is="card.icon" class="w-6 h-6 text-[#CA2026]" />
                        </div>
                        <div>
                            <div class="text-xl font-semibold">{{ card.value }}</div>
                            <div class="text-sm text-gray-500 leading-tight">{{ card.label }}</div>
                        </div>
                    </div>
                    <div class="relative h-14 w-14">
                        <svg class="absolute top-0 left-0 w-full h-full">
                            <circle class="text-gray-200" stroke-width="4" stroke="currentColor" fill="transparent"
                                r="26" cx="30" cy="30" />
                            <circle class="text-[#CA2026] transition-all duration-500" stroke-width="6"
                                :stroke-dasharray="163.36"
                                :stroke-dashoffset="163.36 - (card.percentage * 163.36) / 100" stroke-linecap="round"
                                stroke="currentColor" fill="transparent" r="26" cx="30" cy="30" />
                        </svg>
                        <div
                            class="absolute inset-0 flex items-center justify-center text-xs font-medium text-[#CA2026]">
                            {{ card.percentage }}%
                        </div>
                    </div>

                </div>
            </div>

            <!-- Table Section -->
            <Table :plans="service" :shortIcon="true" :import-button="true" :more-action-button="true"
                :columns="columns" :show-create-button="true" :show-export-button="true"
                create-route="/service/search" create-title="Add Service"
                :filter-btn="['Active', 'Draft', 'Archived']">
                <template #image="{ item }">
                    <img :src="item.image" class="w-15 h-10 rounded-lg" />
                </template>

                <template #action="{ item }">
                    <div class="flex items-center gap-1">
                        <Link :href="`/view/service/${item.id}`"
                            class="bg-green-500 px-3.5 py-1.5 rounded text-sm cursor-pointer text-white hover:underline">
                            <EyeIcon class="w-5 h-5" />
                        </Link>
                    </div>
                </template>

                <template #status="{ item }">
                    <span v-if="item.status === 'Active'"
                        class="text-[#56BD18] bg-green-100 px-3.5 py-1.5 rounded text-sm font-semibold">
                        {{ item.status }}
                    </span>
                    <span v-if="item.status === 'Draft'"
                        class="text-[#377DD7] bg-[#EAF3FF] px-3.5 py-1.5 rounded text-sm font-semibold">
                        {{ item.status }}
                    </span>
                </template>
            </Table>
            </div>
        </div>
    </AppLayout>
</template>
