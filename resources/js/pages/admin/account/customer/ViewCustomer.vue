<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import { ref } from 'vue'
import { UserIcon, ChevronRightIcon, ClockIcon } from 'lucide-vue-next';

const breadcrumbs: BreadcrumbItem[] = [
  {
    title: 'Add Contacts',
    href: '/add/contacts',
  }
];

const products = ref([
  {
    id: 1,
    name: 'Sachs Airmatic Shocks',
    description: 'Toyota Land cruises ALP 1612',
    qty: 2,
    price: '34,000.00',
    image: 'https://via.placeholder.com/56x56?text=Car' // Replace with real image URL
  },
  {
    id: 2,
    name: 'Bosch Front Brake Discs',
    description: 'Mercedes Ben AC21201',
    qty: 1,
    price: '34,000.00',
    image: 'https://via.placeholder.com/56x56?text=Car' // Replace with real image URL
  }
]);

</script>

<template>

  <Head title="Add Contacts" />

  <AppLayout :breadcrumbs="breadcrumbs">
    <section class="my-16 xl:mx-20 md:mx-10 mx-5">
      <div class="min-h-screen">
        <!-- Top Navigation -->
        <nav class="border border-gray-300 shadow rounded-md px-6 py-3">
          <div class="lg:flex md:flex items-center justify-between space-x-6 space-y-5 lg:space-y-0">
            <div class="flex space-x-3">
              <h2 class="text-lg flex font-semibold text-gray-500">
                <UserIcon class="inline mt-3.5 text-[#D93243]" />
                <ChevronRightIcon class="inline mt-4.5 text-gray-500 w-4 h-4" />
              </h2>
              <div class=" items-center space-x-2 mt-1">
                <h1 class="text-gray-500 font-semibold">Billy Smith</h1>
                <span class="text-gray-400 text-sm">New Sale • Jan 2024</span>
              </div>
            </div>
            <div class="flex space-x-6 text-gray-700 text-sm">
              <button
                class="border-2 cursor-pointer border-[#D93243] rounded px-8 py-2 hover:bg-[#D93243] duration-300 hover:text-white">Delete</button>
            </div>
          </div>
        </nav>

        <div class="bg-white border text-sm rounded-xl mt-5 shadow-sm p-6 lg:flex  justify-between lg:text-center space-x-6 space-y-4 lg:space-y-0">
          <div class="flex-1 space-y-1">
            <div class="text-[#5D5D5D] font-semibold">Amount Spent</div>
            <div class="text-[#707070] font-medium">ZK43,000</div>
          </div>
          <div class="w-px bg-gray-300"></div>

          <div class="flex-1 space-y-1">
            <div class="font-semibold text-[#5D5D5D]">Requests</div>
            <div class="font-medium text-[#707070]">18</div>
          </div>
          <div class="w-px bg-gray-200"></div>

          <div class="flex-1 space-y-1">
            <div class="font-semibold text-[#5D5D5D]">Orders</div>
            <div class="font-medium text-[#707070]">1</div>
          </div>
          <div class="w-px bg-gray-200"></div>

          <div class="flex-1 space-y-1">
            <div class="font-semibold text-[#5D5D5D]">Policies</div>
            <div class="font-medium text-[#707070]">0</div>
          </div>
          <div class="w-px bg-gray-200"></div>

          <div class="flex-1 space-y-1">
            <div class="font-semibold text-[#5D5D5D]">Claims</div>
            <div class="font-medium text-[#707070]">1</div>
          </div>
          <div class="w-px bg-gray-200"></div>
          <div class="flex-1 space-y-1">
            <div class="font-semibold text-[#5D5D5D]">Contacts</div>
            <div class="font-medium text-[#707070]">1</div>
          </div>
          <div class="w-px bg-gray-200"></div>
          <div class="flex-1 space-y-1">
            <div class="font-semibold text-[#5D5D5D]">Vehicles</div>
            <div class="font-medium text-[#707070]">106</div>
          </div>
        </div>


        <div class="lg:flex gap-6 lg:p-6">
          <!-- Left Column -->
          <div class="flex-1 space-y-6">
            <!-- Orders Section -->
            <div class="border shadow p-6 mt-5 rounded-lg bg-white text-[#5D5D5D]">
              <h2 class="text-lg font-semibold mb-4 border-b border-gray-200 pb-2">Orders</h2>

              <!-- Order Header -->
              <div class="bg-[#FCF2F2] p-4 rounded mb-4">
                <div class="flex justify-between items-center">
                  <div>
                    <p class="text-sm font-medium">#1001 <span class="text-red-600">Partially fulfilled</span></p>
                    <p class="text-xs text-gray-500">May 25, 2025 at 8:42 From Estimates</p>
                  </div>
                  <div class="text-right font-semibold text-sm">ZK 495,000</div>
                </div>
              </div>

              <!-- Product List -->
              <div class="space-y-4">
                <div v-for="product in products" :key="product.id"
                  class="flex items-center justify-between border-b pb-3">
                  <div class="flex items-center space-x-3">
                    <img :src="product.image" class="w-14 h-14 rounded object-cover bg-pink-100" />
                    <div>
                      <p class="font-medium text-sm">{{ product.name }}</p>
                      <p class="text-xs text-gray-500">{{ product.description }}</p>
                    </div>
                  </div>
                  <div class="flex items-center gap-8">
                    <p class="text-sm font-medium">Qty {{ product.qty }}</p>
                    <p class="text-sm font-medium">ZK {{ product.price }}</p>
                  </div>
                </div>
              </div>

              <!-- Footer -->
              <div class="mt-4 flex justify-between items-center">
                <button class="text-sm cursor-pointer text-gray-600 flex items-center space-x-1 hover:underline">
                  <span>Show all 8 products</span>
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                  </svg>
                </button>
                <div class="space-x-2">
                  <button class="border border-gray-300 px-4 py-2 cursor-pointer text-sm rounded hover:bg-gray-100">View
                    all
                    orders</button>
                  <button class="bg-red-600 text-white px-4 py-2 cursor-pointer text-sm rounded hover:bg-red-700">Create
                    order</button>
                </div>
              </div>
            </div>


            <!-- Timeline Section -->
            <div class="bg-white border rounded-lg shadow p-6">
              <h2 class="text-lg font-semibold mb-4">Timeline</h2>
              <div class="text-sm mb-4">
                <textarea class="w-full border border-gray-300 rounded-lg p-2" rows="3"
                  placeholder="Leave a comment"></textarea>
              </div>
              <div class="flex items-center">
                <button class="bg-[#D93243] hover:bg-red-600 text-white px-8 py-2 cursor-pointer rounded text-sm mr-3">
                  Post
                </button>
                <span class="text-gray-500 text-sm">Only you and other staff can see comments</span>
              </div>
            </div>

            <!-- Today Section -->
            <div class="bg-white border rounded-lg shadow p-6">
              <h2 class="text-lg font-semibold mb-4 border-b border-gray-200 pb-2">Today</h2>
              <div class="space-y-4">
                <div class="flex items-start relative">
                  <div class="w-2 h-2 bg-[#D93243] rounded-full mt-2"></div>
                  <div class="flex-1 border shadow rounded-lg p-4 ml-3 cursor-pointer">
                    <p class="text-sm">Order confirmation email was sent to Billy Smith (billysmith@gmail.com)</p>
                    <p class="text-xs text-gray-500 mt-1">
                      <ClockIcon class="w-3 h-3 inline-block mt-[-2px] mr-1" /> 10:48 AM
                    </p>
                  </div>
                  <button class="text-[#D93243] cursor-pointer text-sm hover:underline absolute right-5 top-5">View
                    email</button>
                </div>

                <div class="flex items-start space-x-3">
                  <div class="w-2 h-2 bg-[#D93243] rounded-full mt-2"></div>
                  <div class="flex-1 border shadow rounded-lg p-4 cursor-pointer">
                    <p class="text-sm">You added payment terms to this order</p>
                    <p class="text-xs text-gray-500 mt-1">
                      <ClockIcon class="w-3 h-3 inline-block mt-[-2px] mr-1" /> 10:48 AM
                    </p>
                  </div>
                </div>

                <div class="flex items-start space-x-3">
                  <div class="w-2 h-2 bg-[#D93243] rounded-full mt-2"></div>
                  <div class="flex-1 border shadow rounded-lg p-4 cursor-pointer">
                    <p class="text-sm">Confirmation #SQLEXPRESS was generated for this order</p>
                    <p class="text-xs text-gray-500 mt-1">
                      <ClockIcon class="w-3 h-3 inline-block mt-[-2px] mr-1" /> 10:48 AM
                    </p>
                  </div>
                </div>

                <div class="flex items-start space-x-3">
                  <div class="w-2 h-2 bg-[#D93243] rounded-full mt-2"></div>
                  <div class="flex-1 border shadow rounded-lg p-4 cursor-pointer">
                    <p class="text-sm">You closed this order for Billy Smith from draft order</p>
                    <p class="text-xs text-gray-500 mt-1">
                      <ClockIcon class="w-3 h-3 inline-block mt-[-2px] mr-1" /> 10:48 AM
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Right Column -->
          <div class="lg:w-100 space-y-6 mt-5 lg:mt-0">
            <!-- Customer Section -->
            <div class="bg-white border rounded-lg shadow p-6">
              <h3 class="font-semibold mb-4 border-b border-[#BEBEBE] pb-2 text-[#343434]">Customer</h3>
              <div class="space-y-1">
                <div class="flex justify-between">
                  <p class="text-sm text-gray-600">User</p>
                  <p class="font-medium text-[14px] md:text-[16px]">BillSmall08</p>
                </div>
                <div class="flex justify-between">
                  <p class="text-sm text-gray-600">Type</p>
                  <p class="font-medium text-[14px] md:text-[16px]">Individual</p>
                </div>
                <div class="flex justify-between">
                  <p class="text-sm text-gray-600">Status</p>
                  <p class="font-medium text-[14px] md:text-[16px]">Active</p>
                </div>
                <div class="flex justify-between">
                  <p class="text-sm text-gray-600">Account Owner</p>
                  <p class="font-medium text-[14px] md:text-[16px]">Major One</p>
                </div>
              </div>

              <div class="mt-6">
                <h3 class="font-semibold mb-3 border-b border-[#BEBEBE] pb-2 text-[#343434]">Contact Information</h3>
                <div class="space-y-2">
                  <div class="flex justify-between">
                    <p class="text-sm text-gray-600">Email</p>
                    <p class="text-[#CA2026] font-semibold text-[14px] md:text-[16px]">billysmith@gmail.com</p>
                  </div>
                  <div class="flex justify-between">
                    <p class="text-sm text-gray-600">Phone</p>
                    <div class="flex items-center">
                      <span class="font-semibold text-[14px] md:text-[16px]">+260 97 770 000</span>
                    </div>
                  </div>
                  <div class="flex justify-between">
                    <p class="text-sm text-gray-600">Website</p>
                    <p class="font-semibold text-[14px] md:text-[16px]">www.facebook.com</p>
                  </div>
                </div>
              </div>

              <div class="mt-6">
                <h3 class="font-semibold mb-3 border-b border-[#BEBEBE] pb-2 text-[#343434]">Default Address</h3>
                <div class="flex justify-between">
                  <p class="font-medium text-gray-600 text-sm">Address</p>
                  <div>
                    <p class="font-medium text-[14px] md:text-[16px]">Billy Smith</p>
                    <p class="font-medium text-[14px] md:text-[16px]">CFAO</p>
                    <p class="font-medium text-[14px] md:text-[16px]">Zambia</p>
                  </div>
                </div>
              </div>

              <div class="mt-3">
                <h3 class="font-semibold mb-3 border-b border-[#BEBEBE] pb-2 text-[#343434]">Tax Details</h3>
                <p class="text-sm text-gray-500">Don't Collect Tax</p>
              </div>
            </div>

            <!-- Contacts Section -->
            <div class="bg-white border rounded-lg shadow p-6">
              <h3 class="font-semibold mb-3 border-b border-[#BEBEBE] pb-2 text-[#343434]">Vehicles (2+)</h3>
              <div class="space-y-3 border-b border-[#BEBEBE] pb-3">
                <div class="flex items-center space-x-3">
                  <div class="space-y-1">
                    <p class="text-[#CA2026]">Toyota Hilux ALX1672ZM</p>
                    <p class="text-xs text-gray-500">2020 Diesel Pickup 2.4 AWD 4WS 1,999cc......</p>
                  </div>
                </div>

                <div class="flex items-center space-x-3">
                  <div class="space-y-1">
                    <p class="text-[#CA2026]">Toyota RAV4 2020</p>
                    <p class="text-xs text-gray-500 ">Petrol SUV 2.0 AWD 4WS 1,999cc 111HP......</p>
                  </div>
                </div>
              </div>
              <button class="text-[#CA2026] text-sm hover:underline mt-3">See all</button>
            </div>

            <!-- Notes Section -->
            <div class="bg-white border rounded-lg shadow p-6">
              <h3 class="font-medium mb-3 border-b border-[#BEBEBE] pb-2 text-[#343434]">Notes</h3>
              <p class="text-gray-500 text-sm">No Notes From Customer</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </AppLayout>
</template>
