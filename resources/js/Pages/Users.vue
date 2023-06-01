
<script setup>

import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, router } from '@inertiajs/vue3';

defineProps({
    users: {
        type: Object,
    },
});

function createConverstation(id)
{
    router.post(`/chat/${id}`);
}

</script>

<template>
    <Head title="Users" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Users</h2>
        </template>

        <div class="py-12">
            <ul class="w-2/5 mx-auto border-t-2 border-r-2 border-l-2 rounded-md border-neutral-200 border-opacity-100">
                <li
                    v-for="user in users"
                    :key="user.id"
                    @click="createConverstation(user.id)"
                    class="w-full border-b-2 border-neutral-200 border-opacity-100 py-4 dark:border-opacity-50 pl-3 hover:bg-gray-200 cursor-pointer">
                     {{ user.name }}
                </li>
            </ul>
        </div>
    </AuthenticatedLayout>
</template>
