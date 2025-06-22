<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import Chart from '@/components/my-components/BarChart.vue';

import {
    BarChart3Icon,
    ChevronRightIcon,
    TrendingUpIcon,
    MousePointerIcon,
    ShoppingBagIcon,
    SmartphoneIcon,
    AppleIcon,
    ShirtIcon
} from 'lucide-vue-next'
import LineChart from '@/components/my-components/LineChart.vue';
const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Dashboard',
        href: '/dashboard',
    }
];
</script>

<template>
    <Head title="Dashboard" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="min-h-screen bg-gray-50 p-6">
        <div class="max-w-7xl mx-auto space-y-6">
            <!-- Top Metrics Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Visits Card -->
                <div class="bg-white rounded-lg p-6 shadow-sm border">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-2">
                            <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center">
                                <BarChart3Icon class="h-4 w-4 text-blue-600" />
                            </div>
                            <span class="text-gray-600 font-medium">Visits</span>
                            <ChevronRightIcon class="h-4 w-4 text-gray-400" />
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <div class="text-3xl font-bold text-gray-900">40,314</div>
                        <div class="flex items-center text-green-600 text-sm">
                            <span>+12%</span>
                            <TrendingUpIcon class="h-4 w-4 ml-1" />
                        </div>
                    </div>
                </div>

                <!-- Clicks Card -->
                <div class="bg-white rounded-lg p-6 shadow-sm border">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-2">
                            <div class="w-8 h-8 bg-orange-100 rounded-lg flex items-center justify-center">
                                <MousePointerIcon class="h-4 w-4 text-orange-600" />
                            </div>
                            <span class="text-gray-600 font-medium">Clicks</span>
                            <ChevronRightIcon class="h-4 w-4 text-gray-400" />
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <div class="text-3xl font-bold text-gray-900">8,750</div>
                        <div class="flex items-center text-green-600 text-sm">
                            <span>+2.6%</span>
                            <TrendingUpIcon class="h-4 w-4 ml-1" />
                        </div>
                    </div>
                </div>

                <!-- Orders Card -->
                <div class="bg-red-500 rounded-lg p-6 shadow-sm text-white">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-2">
                            <div class="w-8 h-8 bg-white/20 rounded-lg flex items-center justify-center">
                                <ShoppingBagIcon class="h-4 w-4 text-white" />
                            </div>
                            <span class="font-medium">Orders</span>
                            <ChevronRightIcon class="h-4 w-4 text-white/70" />
                        </div>
                    </div>
                    <div class="flex items-end justify-between">
                        <div class="text-3xl font-bold">1,126</div>
                        <div class="flex items-center text-sm">
                            <span>+22%</span>
                            <TrendingUpIcon class="h-4 w-4 ml-1" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Left Column -->
                <div class="lg:col-span-2 space-y-6">
                    <!-- Revenue Statistics Chart -->
                    <div class="bg-white rounded-lg p-6 shadow-sm border">
                        <!-- Chart Area -->
                        <LineChart />
                    </div>

                    <!-- Bottom Row -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Top Performing Product -->
                        <div class="bg-white rounded-lg p-6 shadow-sm border">
                            <h3 class="text-lg font-semibold text-gray-900 mb-4">Top Performing Product</h3>
                            <div class="space-y-4">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                        <SmartphoneIcon class="h-5 w-5 text-blue-600" />
                                    </div>
                                    <div class="flex-1">
                                        <div class="font-medium text-gray-900">Premium Tech Gadgets</div>
                                        <div class="text-sm text-gray-500">Electronics</div>
                                    </div>
                                    <div class="text-right">
                                        <div class="text-green-600 font-medium">40%</div>
                                        <div class="text-xs text-gray-500">Growth</div>
                                    </div>
                                </div>

                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center">
                                        <AppleIcon class="h-5 w-5 text-orange-600" />
                                    </div>
                                    <div class="flex-1">
                                        <div class="font-medium text-gray-900">Organic Superfoods</div>
                                        <div class="text-sm text-gray-500">Grocery</div>
                                    </div>
                                    <div class="text-right">
                                        <div class="text-green-600 font-medium">35%</div>
                                        <div class="text-xs text-gray-500">Growth</div>
                                    </div>
                                </div>

                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-pink-100 rounded-lg flex items-center justify-center">
                                        <ShirtIcon class="h-5 w-5 text-pink-600" />
                                    </div>
                                    <div class="flex-1">
                                        <div class="font-medium text-gray-900">Stylish Fashion Accessories</div>
                                        <div class="text-sm text-gray-500">Fashion</div>
                                    </div>
                                    <div class="text-right">
                                        <div class="text-green-600 font-medium">35%</div>
                                        <div class="text-xs text-gray-500">Growth</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Products Revenue Breakdown -->
                        <div class="bg-white rounded-lg p-6 shadow-sm border">
                            <Chart />
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="space-y-6">
                    <!-- Revenue Distribution -->
                    <div class="bg-white rounded-lg p-6 shadow-sm border">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Revenue Distribution</h3>
                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <div class="w-3 h-3 bg-gray-800 rounded-full"></div>
                                    <span class="text-gray-700">North America</span>
                                </div>
                                <div class="text-right">
                                    <div class="font-semibold">$4000</div>
                                    <div class="text-sm text-gray-500">50%</div>
                                </div>
                            </div>

                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                                    <span class="text-gray-700">Europe</span>
                                </div>
                                <div class="text-right">
                                    <div class="font-semibold">$2500</div>
                                    <div class="text-sm text-gray-500">31%</div>
                                </div>
                            </div>

                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <div class="w-3 h-3 bg-blue-500 rounded-full"></div>
                                    <span class="text-gray-700">Asia Pacific</span>
                                </div>
                                <div class="text-right">
                                    <div class="font-semibold">$1500</div>
                                    <div class="text-sm text-gray-500">19%</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Consumer Distribution -->
                    <div class="bg-white rounded-lg p-6 shadow-sm border">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Consumer Distribution</h3>

                        <!-- Progress bars -->
                        <div class="mb-4">
                            <div class="flex h-2 rounded-full overflow-hidden">
                                <div class="bg-gray-800 flex-1"></div>
                                <div class="bg-red-500" style="flex: 0.7;"></div>
                                <div class="bg-blue-500" style="flex: 0.5;"></div>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <div class="w-3 h-3 bg-gray-800 rounded-full"></div>
                                    <span class="text-gray-700">North America</span>
                                </div>
                                <div class="text-right">
                                    <div class="font-semibold">558</div>
                                    <div class="text-sm text-gray-500">40%</div>
                                </div>
                            </div>

                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                                    <span class="text-gray-700">Europe</span>
                                </div>
                                <div class="text-right">
                                    <div class="font-semibold">894</div>
                                    <div class="text-sm text-gray-500">35%</div>
                                </div>
                            </div>

                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <div class="w-3 h-3 bg-blue-500 rounded-full"></div>
                                    <span class="text-gray-700">Asia Pacific</span>
                                </div>
                                <div class="text-right">
                                    <div class="font-semibold">417</div>
                                    <div class="text-sm text-gray-500">25%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </AppLayout>
</template>
