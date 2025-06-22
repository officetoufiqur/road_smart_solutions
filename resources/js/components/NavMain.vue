<script setup lang="ts">
import { SidebarGroup, SidebarGroupLabel, SidebarMenu } from '@/components/ui/sidebar';
import { type NavItem } from '@/types';
import SidebarRecursiveMenu from '@/components/SidebarRecursiveMenu.vue';

defineProps<{
  items: NavItem[];
}>();
</script>

<template>
  <SidebarGroup class="px-2 py-0">
    <SidebarGroupLabel>Platform</SidebarGroupLabel>
    <SidebarMenu>
      <SidebarRecursiveMenu :items="items" />
    </SidebarMenu>
  </SidebarGroup>
</template>

<style scoped>

</style>
