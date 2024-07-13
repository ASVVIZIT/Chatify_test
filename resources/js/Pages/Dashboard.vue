<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

defineProps({
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});

</script>
<template>
    <Head title="Dashboard (Главная)" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Dashboard (Главная)</h2>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Laravel v {{ laravelVersion }} (PHP v{{ phpVersion }})</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">Вы вошли в систему! <strong>{{ $page.props.auth.user.name }} ({{ $page.props.auth.user.email }})</strong></div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
