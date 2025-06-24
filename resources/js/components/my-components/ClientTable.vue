<script setup lang="ts">
import { ref, computed, watch, defineProps, defineExpose } from 'vue';

interface TableData {
    [key: string]: any;
    id: number;
    custom_id?: number | string;
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
    createRoute?: string;
    createTitle?: string;
    filterBtn?: string;
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

        <div class="mb-4">
            <!-- <div></div> -->
            <div class="text-sm flex gap-2">
                <div class="flex w-full gap-5">
                    <input v-model="search" placeholder="search customer" type="text" class="border w-full px-5 py-2.5 rounded border-gray-300" />
                    <button v-if="filterBtn" class="border cursor-pointer w-40 text-xs cuesor-pointer px-5 rounded border-gray-300">{{ filterBtn }}</button>
                </div>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border">
                <thead class="text-sm text-gray-500">
                    <tr>
                        <th v-for="col in columns" :key="col.key" class="px-4 py-2 text-left text-xs cursor-pointer select-none"
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
                        <td v-for="col in columns" :key="col.key" class="border text-xs border-gray-200 px-4 py-2">
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
                <button class="px-2 py-1 border rounded bg-red-600 text-white">{{ currentPage }}</button>
                <button @click="currentPage++" :disabled="currentPage >= totalPages"
                    class="px-2 py-1 border rounded disabled:opacity-50">
                    ›
                </button>
            </div>
        </div>
    </div>
</template>
