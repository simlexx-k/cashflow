<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import DashTest from "@/Components/DashTest.vue";
</script>

<template>
    <AppLayout title="DashTest">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                DashTest
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <DashTest/>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<style scoped>

</style>
