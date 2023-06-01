<script setup>
import { Head } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import ChatMain from '@/Components/Chat/ChatMain.vue';

</script>


<template>
  <Head title="Chat" />
  <AuthenticatedLayout>
    <ChatMain/>
  </AuthenticatedLayout>

</template>

