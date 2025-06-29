<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { ArrowDownUpIcon, SearchIcon } from 'lucide-vue-next';

const props = defineProps({
    title: String,
    subTitle: String,
    btnText: String,
    btnUrl: String
})

</script>

<template>
    <div class="py-10 lg:px-30 px-5">
        <div class="lg:flex md:flex items-center justify-between mb-4 space-y-2 lg:space-y-0">
            <div class="flex items-center gap-5">
                <button
                    class="border border-gray-300 cursor-pointer text-[13px] md:text-[15px] lg:[16px] px-5 py-2 rounded">All</button>
            </div>

            <div class="text-sm flex gap-2 items-center">
                <div class="relative">
                    <input type="text" class="border pl-7 py-2 rounded border-gray-300" placeholder="Search" />
                    <SearchIcon class="absolute left-2 top-1/2 transform -translate-y-1/2 h-4 w-4 text-gray-400" />
                </div>
                <ArrowDownUpIcon
                    class="text-[#707070] w-9 h-9 mt-1 lg:mt-0 cursor-pointer border border-gray-300 p-2 rounded" />
            </div>
        </div>

        <div
            class="flex flex-col items-center justify-between text-center mt-7 border border-gray-200 rounded-lg shadow py-20 gap-10">
            <div>
                <img src="/assets/img/image.png" alt="Brand Logo">
            </div>
            <div>
                <h1 class="text-2xl font-bold text-[#343434]">{{ props.title }}</h1>
                <p class="text-[#707070] text-sm pb-5 pt-3">{{ props.subTitle }}</p>
                <Link  :href="btnUrl ?? '#'" class="bg-[#D93243] text-white px-5 py-2 rounded">{{ props.btnText?? 'Add' }}</Link>
            </div>
        </div>

    </div>
</template>
