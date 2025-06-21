<script setup lang="ts">
import { Link } from '@inertiajs/vue3';


defineProps<{
    title?: string;
    description?: string;
}>();
</script>

<template>
    <div style="background-image: url('/assets/img/login.png'); background-size: cover" class="relative grid h-dvh flex-col items-center justify-center px-8 sm:px-0 lg:max-w-none lg:grid-cols-2 lg:px-0">
        <div class="lg:p-8">
            <div class="mx-auto flex w-full flex-col justify-center space-y-6 sm:w-[350px]">
                <div class="flex flex-col space-y-2 text-center">
                    <h1 class="text-2xl font-semibold tracking-tight" v-if="title">{{ title }}</h1>
                    <p class="text-sm text-muted-foreground" v-if="description">{{ description }}</p>
                </div>
                <slot />
            </div>
        </div>
        <div class="flex items-center justify-center">
            <Link :href="route('home')" class="relative w-[22rem] z-20 flex items-center text-lg font-medium">
                <img src="/assets/img/main_logo.png" alt="Brand Logo">
            </Link>
        </div>
        
    </div>
</template>
