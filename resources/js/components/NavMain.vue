<script setup lang="ts">
import {
  SidebarGroup,
  SidebarGroupLabel,
  SidebarMenu,
  SidebarMenuButton,
  SidebarMenuItem,
} from '@/components/ui/sidebar';

import { type NavItem } from '@/types';
import { Link, usePage } from '@inertiajs/vue3';
import { ref, watchEffect } from 'vue';
import { ChevronRightIcon } from 'lucide-vue-next';

const props = defineProps<{
  items: NavItem[];
}>();

const page = usePage();
const openMenus = ref<Record<string, boolean>>({});

function toggleMenu(title: string) {
  openMenus.value[title] = !openMenus.value[title];
}

function hasActiveSubMenu(item: NavItem): boolean {
  return item.subMenu?.some(sub => sub.href === page.url) ?? false;
}

watchEffect(() => {
  props.items.forEach((item) => {
    if (item.subMenu && hasActiveSubMenu(item)) {
      openMenus.value[item.title] = true;
    }
  });
});
</script>



<template>
  <SidebarGroup class="px-2 py-0">
    <SidebarGroupLabel>Platform</SidebarGroupLabel>
    <SidebarMenu>
      <template v-for="item in items" :key="item.title">
        <!-- Item with Submenu -->
        <SidebarMenuItem v-if="item.subMenu && item.subMenu.length">
          <SidebarMenuButton
            :tooltip="item.title"
            @click="toggleMenu(item.title)"
            class="flex justify-between items-center w-full"
          >
            <div class="flex items-center gap-2">
              <component :is="item.icon" />
              <span>{{ item.title }}</span>
            </div>
            <ChevronRightIcon
              class="w-4 h-4 transition-transform duration-200"
              :class="{ 'rotate-90': openMenus[item.title] }"
            />
          </SidebarMenuButton>

          <transition name="fade" mode="out-in">
            <SidebarMenu
              v-show="openMenus[item.title]"
              class="pl-4 transition-all duration-200 mt-3"
            >
              <SidebarMenuItem
                v-for="sub in item.subMenu"
                :key="sub.title"
              >
                <SidebarMenuButton
                  as-child
                  :is-active="sub.href === page.url"
                  :tooltip="sub.title"
                >
                  <Link :href="sub.href" class="flex items-center">
                    <component :is="sub.icon" />
                    <span>{{ sub.title }}</span>
                  </Link>
                </SidebarMenuButton>
              </SidebarMenuItem>
            </SidebarMenu>
          </transition>
        </SidebarMenuItem>

        <!-- Single Item -->
        <SidebarMenuItem v-else>
          <SidebarMenuButton
            as-child
            :is-active="item.href === page.url"
            :tooltip="item.title"
          >
            <Link :href="item.href" class="flex items-center gap-2">
              <component :is="item.icon" />
              <span>{{ item.title }}</span>
            </Link>
          </SidebarMenuButton>
        </SidebarMenuItem>
      </template>
    </SidebarMenu>
  </SidebarGroup>
</template>

<style scoped>

</style>
