<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Add Contacts',
        href: '/add/contacts',
    }
];


</script>

<template>

    <Head title="Add Contacts" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <h1>view customer</h1>
    </AppLayout>
</template>
