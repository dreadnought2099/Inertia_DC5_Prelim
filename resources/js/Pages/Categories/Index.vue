<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    categories:{
        type:Array,
        required:true,
    }
}
)
</script>

<template>

    <div class="min-h-screen w-full flex flex-col items-center gap-3 py-5">
        <h1 class="text-4xl text-center font-semibold bg-blue-400 text-white">Categories</h1>
        <table class="table-fixed border-collapse border border-slate-400 p-2">
            <thead class="bg-blue-400 text-white/80">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Description</th>
                </tr>
            </thead>

            <tbody>
                <tr v-for="category in categories" :key="category.id">
                    <td class="px-6 py-4 border-b border-gray-500 text-sm">{{ category.name }}</td>
                    <td class="px-6 py-4 border-b border-gray-500 text-sm">{{ category.description }}</td>
                </tr>
            </tbody>
        </table>

        <Link href="/products" class="hover:text-sky-800 hover:underline duration-100 text-sm">Go to Products</Link>
    </div>




</template>
