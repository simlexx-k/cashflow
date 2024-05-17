<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Distributable from '@/Components/Distributables.vue';
</script>

<template>
    <AppLayout title="Distributable">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Distributable
            </h2>
        </template>

        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <Distributable />
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<style scoped>

</style>
