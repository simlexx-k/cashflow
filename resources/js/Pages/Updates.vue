<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import updates from '@/Components/updates.vue';
</script>

<template>
    <AppLayout title="Updates">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Recent Updates
            </h2>
        </template>

        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <updates />
                </div>
            </div>
        </div>
    </AppLayout>
</template>


<style scoped>

</style>
