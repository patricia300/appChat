<script setup>
import { Head } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import ChatList from '@/Components/Chat/ChatList.vue';
import ChatBox from '@/Components/Chat/ChatBox.vue';
import SendMessage from '@/Components/Chat/SendMessage.vue';
import { computed } from 'vue';
import { ref } from 'vue';

const props = defineProps({
    conversations: {
        type: Object
    }
});

let messages = ref();

function getConversation(conversationId){
    console.log('MainChat convers id', conversationId);
    const conversation  =  props.conversations.find((value) => {
        if(value.id == conversationId) {
            return value
        }
    })

    messages.value = conversation.messages;
}

</script>


<template>
  <Head title="Chat" />
  <AuthenticatedLayout>
    <div>
        <!-- chat-container -->
        <div class="fixed w-full h-93/100 flex flex-wrap left-0 top-16">

            <!-- chat-list-container -->
            <div class="relative w-full md:w-2/5 lg:w-2/5 xl:w-1/4 h-full border border-solid border-gray-400">
                <ChatList :conversations="conversations" @click="getConversation"/>
            </div>
            <!-- chat-box-container -->
            <div class="relative w-3/5 lg:w-3/5 xl:w-3/4 h-full border-t border-r border-b border-solid border-gray-400">
                <ChatBox :messages="messages"/>
                <SendMessage/>
            </div>
        </div>
    </div>
  </AuthenticatedLayout>

</template>

