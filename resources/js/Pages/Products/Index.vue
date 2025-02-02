<script setup>
import { Link } from '@inertiajs/vue3';

defineProps( {
 categories:{
    type:Array,
    required:true
 },

 products:{
    type:Array,
    required:true
 },
 selectedCategory:{
    type:Object,
    required:null
 }
})

</script>

<template>
    <div class="flex">
        <nav class="min-h-screen w-[20%] shadow-lg border-b border-gray-200">
            <h2 class="text-center text-2xl font-semibold my-3 bg-blue-400 text-white">
                <Link href="/products" prefetch class="hover:underline">Categories</Link>
            </h2>
            <ul>
                <li v-for="category in categories" :key="category.id" class="px-6 py-4 cursor-pointer hover:bg-gray-500 hover:text-slate-300 duration-50 text-sm">
                    <Link :href='"/products/"+ category.id' class="block w-full" :preserve-state="true" prefetch>
                        <div class="w-full">
                            {{ category.name }}
                        </div>
                    </Link>
                </li>
            </ul>
        </nav>


        <div class="w-3/4 px-3">
            <h1  class="text-center text-2xl font-semibold my-3 bg-blue-400 text-white">{{ selectedCategory? selectedCategory.name: "All Products" }}</h1>
            <div class="grid grid-cols-3 gap-3">
                <div v-for="product in products" :key="product.id">
                   <div class="shadow-lg p-2 rounded-lg animation-bounce text-sm hover:bg-gray-400 duration-500 cursor-pointer">
                    <h5 class="text-lg font-semibold"> {{ product.name }}</h5>
                    <p>{{ product.description  }}</p>
                    <div class="flex justify-between">
                        <p class="text-[10px]">Whole Sale Price: P{{ product.whole_sale_price  }}</p>
                    <p class="text-[10px]">Retail Price: P{{ product.retail_price  }}</p>
                    </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</template>
