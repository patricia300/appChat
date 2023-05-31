<script setup>
import { Head } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import ChatMain from '@/Components/Chat/ChatMain.vue';

</script>


<template>
  <Head title="Chat" />
  <AuthenticatedLayout>
    <div class="py-12">
        <ChatMain/>
    </div>
  </AuthenticatedLayout>

</template>

