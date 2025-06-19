<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { ArrowDownUpIcon } from 'lucide-vue-next';
import { ref, computed, watch, defineProps, defineExpose } from 'vue';

interface TableData {
    [key: string]: any;
    id: number;
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

        <div class="flex items-center gap-2 justify-between mb-2">
            <div class="flex gap-2 mb-4">
                <button class="bg-red-700 duration-300 cursor-pointer text-white px-4 py-1 rounded">All</button>
                <button class="hover:bg-gray-200 duration-300 cursor-pointer px-4 py-1 rounded">Active</button>
                <button class="hover:bg-gray-200 duration-300 cursor-pointer px-4 py-1 rounded">Inactive</button>
                <button class="hover:bg-gray-200 duration-300 cursor-pointer px-4 py-1 rounded">Suspended</button>
            </div>
            <div>
                <div class="flex gap-2 mb-4">
                    <Link :href="route('users.add')" class="bg-red-700 duration-300 cursor-pointer text-white px-8 py-2 rounded">Add User</Link>
                    <button class="hover:bg-gray-200 duration-300 border border-[#707070] cursor-pointer px-8 py-1 rounded">Export</button>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-between mb-4">
            <div class="flex items-center gap-2">
                <select v-model="entriesPerPage" class="border px-2 py-1 rounded text-sm border-gray-300">
                    <option :value="5">5</option>
                    <option :value="10">10</option>
                    <option :value="20">20</option>
                </select>
                <span class="text-sm">Entries per page</span>
            </div>

            <div class="text-sm flex gap-2">
                <div>
                    <label class="mr-2">Search:</label>
                    <input v-model="search" type="text" class="border px-2 py-1 rounded border-gray-300" />
                </div>
                <ArrowDownUpIcon class="text-[#707070] cursor-pointer" />
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border">
                <thead class="bg-gray-100 text-sm text-gray-700">
                    <tr>
                        <th class="px-4 py-2 text-left">
                            <input
                                type="checkbox"
                                @change="(e) => {
                                    const target = e.target as HTMLInputElement;
                                    selectedRows = target.checked ? paginatedData.map(u => u.id) : [];
                                }"
                                :checked="paginatedData.every(row => selectedRows.includes(row.id))"
                            />
                        </th>
                        <th v-for="col in columns" :key="col.key" class="px-4 py-2 text-left cursor-pointer select-none" @click="() => toggleSort(col.key)">
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
                        <td v-for="col in columns" :key="col.key" class="border border-gray-200 px-4 py-2">
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
