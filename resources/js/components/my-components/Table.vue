<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { ArrowDownUpIcon } from 'lucide-vue-next';
import { ref, computed, watch, defineProps, defineExpose } from 'vue';

interface TableData {
    [key: string]: any;
    id: number;
    contact_id?: number | string;
}

interface TableColumn {
    key: string;
    label: string;
    icon?: any;
    sortable?: boolean;
}

const props = defineProps<{
    plans: TableData[];
    columns: TableColumn[];
    title?: string;
    showCreateButton?: boolean;
    showExportButton?: boolean;
    importButton?: boolean;
    moreActionButton?: boolean;
    createRoute?: string;
    createTitle?: string;
    filterBtn?: Array<string>;
    filter?: boolean;
    shortIcon?: boolean;
}>();

const entriesPerPage = ref(10);
const currentPage = ref(1);
const search = ref('');
const sortKey = ref('');
const sortAsc = ref(true);
const selectedRows = ref<number[]>([]);


const toggleSort = (key: string) => {
    if (sortKey.value === key) {
        sortAsc.value = !sortAsc.value;
    } else {
        sortKey.value = key;
        sortAsc.value = true;
    }
};

const filteredData = computed(() => {
    const data = [...props.plans].filter((item) =>
        Object.values(item)
            .join(' ')
            .toLowerCase()
            .includes(search.value.toLowerCase())
    );
    if (sortKey.value) {
        data.sort((a, b) => {
            const aVal = a[sortKey.value];
            const bVal = b[sortKey.value];
            if (aVal === bVal) return 0;
            if (sortAsc.value) {
                return aVal > bVal ? 1 : -1;
            } else {
                return aVal < bVal ? 1 : -1;
            }
        });
    }
    return data;
});

const totalPages = computed(() =>
    Math.ceil(filteredData.value.length / entriesPerPage.value)
);

const paginatedData = computed(() => {
    const start = (currentPage.value - 1) * entriesPerPage.value;
    return filteredData.value.slice(start, start + entriesPerPage.value);
});

watch([search, entriesPerPage], () => {
    currentPage.value = 1;
});

defineExpose({ selectedRows });
</script>

<template>
    <div class="">
        <h2 class="text-2xl font-semibold mb-4">{{ title }}</h2>

        <div class="lg:flex md:flex items-center gap-2 justify-between mb-2">
            <div class="flex gap-1 mb-4">
                <button class="bg-red-700 duration-300 cursor-pointer text-[13px] md:text-[15px] lg:[16px] text-white px-4 py-1 rounded">All</button>
                <button v-for="item in filterBtn" :key="item"
                    class="hover:bg-gray-200 duration-300 text-[13px] md:text-[15px] lg:[16px] cursor-pointer px-4 py-1 rounded">
                    {{ item }}
                </button>

            </div>
            <div>
                <div class="lg:flex gap-2 mb-4 space-x-4 space-y-5 lg:space-y-0 lg:space-x-0">
                    <template v-if="showExportButton">
                        <button
                            class="hover:bg-gray-200  text-[13px] md:text-[15px] lg:[16px] duration-300 border border-[#707070] cursor-pointer px-8 py-1 rounded">
                            Export
                        </button>
                    </template>
                    <template v-if="importButton">
                        <button
                            class="hover:bg-gray-200  text-[13px] md:text-[15px] lg:[16px] duration-300 border border-[#707070] cursor-pointer px-8 py-1 rounded">
                            Import
                        </button>
                    </template>
                    <template v-if="moreActionButton">
                        <button
                            class="hover:bg-gray-200  text-[13px] md:text-[15px] lg:[16px] duration-300 border border-[#707070] cursor-pointer px-8 py-1 rounded">
                            More Action
                        </button>
                    </template>
                    <template v-if="showCreateButton">
                        <Link :href="createRoute ?? '#'"
                            class="bg-red-700 duration-300 text-[13px] md:text-[15px] lg:[16px] cursor-pointer text-white px-8 py-2 rounded">
                        {{ props.createTitle ?? 'Create' }}
                        </Link>
                    </template>
                </div>
            </div>
        </div>

        <div class="lg:flex md:flex items-center justify-between mb-4 space-y-2 lg:space-y-0">
            <div class="flex items-center gap-5">
                <select v-model="entriesPerPage" class="border px-2 py-1 rounded text-sm border-gray-300">
                    <option :value="5">5</option>
                    <option :value="10">10</option>
                    <option :value="20">20</option>
                </select>
                <span class="text-sm">Entries per page</span>

                <div v-if="filter" class="">
                    <select name="" id="" class="text-sm cursor-pointer bg-[#F4F4F3] px-6 py-2 rounded">
                        <option value="">User Access</option>
                    </select>
                </div>
                <div v-if="filter" class="">
                    <select name="" id="" class="text-sm cursor-pointer bg-[#F4F4F3] px-6 py-2 rounded">
                        <option value="">User Type</option>
                    </select>
                </div>
                <div v-if="filter" class="">
                    <select name="" id="" class="text-sm cursor-pointer bg-[#F4F4F3] px-6 py-2 rounded">
                        <option value="">Classification</option>
                    </select>
                </div>
            </div>

            <div class="text-sm flex gap-2">
                <div>
                    <label class="mr-2">Search:</label>
                    <input v-model="search" type="text" class="border px-2 py-1 rounded border-gray-300" />
                </div>
                <ArrowDownUpIcon class="text-[#707070] w-5 h-5 mt-1 lg:mt-0 cursor-pointer" v-if="shortIcon" />
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border">
                <thead class="bg-[#FCF2F2] text-sm text-gray-500">
                    <tr>
                        <th class="px-4 py-2 text-left">
                            <input type="checkbox" @change="(e) => {
                                const target = e.target as HTMLInputElement;
                                selectedRows = target.checked ? paginatedData.map(u => u.id) : [];
                            }" :checked="paginatedData.every(row => selectedRows.includes(row.id))" />
                        </th>
                        <th v-for="col in columns" :key="col.key" class="px-4 py-2 text-left cursor-pointer select-none"
                            @click="() => toggleSort(col.key)">
                            {{ col.label }}
                            <component :is="col.icon" v-if="col.icon" class="inline w-4 h-4 ml-1" />
                            <span v-if="sortKey === col.key">
                                {{ sortAsc ? '▲' : '▼' }}
                            </span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="item in paginatedData" :key="item.id">
                        <td class="border border-gray-200 px-4 py-2">
                            <input type="checkbox" :value="item.id" v-model="selectedRows" />
                        </td>
                        <td v-for="col in columns" :key="col.key" class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                            <slot :name="col.key" :item="item">
                                {{ item[col.key] }}
                            </slot>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="flex items-center justify-between mt-4 text-sm text-gray-600">
            <div>
                Showing
                {{ (currentPage - 1) * entriesPerPage + 1 }}
                to
                {{ Math.min(currentPage * entriesPerPage, filteredData.length) }}
                of {{ filteredData.length }} entries
            </div>
            <div class="flex gap-1">
                <button @click="currentPage--" :disabled="currentPage === 1"
                    class="px-2 py-1 border rounded disabled:opacity-50">
                    ‹
                </button>
                <button class="px-2 py-1 border rounded bg-blue-600 text-white">{{ currentPage }}</button>
                <button @click="currentPage++" :disabled="currentPage >= totalPages"
                    class="px-2 py-1 border rounded disabled:opacity-50">
                    ›
                </button>
            </div>
        </div>
    </div>
</template>
