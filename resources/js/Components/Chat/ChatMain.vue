<script setup>
import ChatBox from './ChatBox.vue';
import ChatList from './ChatList.vue';
import SendMessage from './SendMessage.vue';

</script>

<template>
    <div>
        <!-- chat-container -->
        <div class="fixed w-11/12 h-5/6 flex flex-nowrap left-12">

            <!-- chat-list-container -->
            <div class="relative w-1/4 h-full border border-solid border-gray-400">
                <ChatList/>
            </div>
            <!-- chat-box-container -->
            <div class="relative w-3/4 h-full border-t border-r border-b border-solid border-gray-400">
                <ChatBox/>
                <SendMessage/>
            </div>
        </div>
    </div>
</template>
