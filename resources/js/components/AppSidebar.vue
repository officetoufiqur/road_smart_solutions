<script setup lang="ts">
import NavMain from '@/components/NavMain.vue';
import { Sidebar, SidebarContent, SidebarHeader, SidebarMenu, SidebarMenuItem } from '@/components/ui/sidebar';
import { type NavItem } from '@/types';
import { Link } from '@inertiajs/vue3';
import { CircleUserRoundIcon, LayoutGrid, User2Icon } from 'lucide-vue-next';

const mainNavItems: NavItem[] = [
    {
        title: 'Dashboard',
        href: '/dashboard',
        icon: LayoutGrid,
    },
    {
        title: 'Account',
        href: '/users',
        icon: CircleUserRoundIcon,
        subMenu: [
            {
                title: 'Users',
                href: '/users',
                icon: User2Icon,
            },
            {
                title: 'View Profile',
                href: '/view/profile',
                icon: User2Icon,
            }
        ]
    },
];
</script>

<template>
    <Sidebar collapsible="icon" variant="inset">
        <div class="mt-5">
            <SidebarHeader>
                <SidebarMenu>
                    <SidebarMenuItem>
                        <Link :href="route('dashboard')">
                        <div class="flex gap-2">
                            <div class="flex ml-3 aspect-square size-10 items-center justify-center rounded-md">
                                <img class="w-14" src="/assets/img/icon.png" alt="icon">
                            </div>
                            <div class="ml-1 grid flex-1 text-left text-sm mt-1.5">
                                <img class="w-32" src="/assets/img/logo.png" alt="">
                            </div>
                        </div>
                        </Link>
                    </SidebarMenuItem>
                </SidebarMenu>
            </SidebarHeader>
        </div>

        <SidebarContent>
            <NavMain :items="mainNavItems" />
        </SidebarContent>

        <!-- <SidebarFooter>
            <NavFooter :items="footerNavItems" />
            <NavUser />
        </SidebarFooter> -->
    </Sidebar>
    <slot />
</template>
