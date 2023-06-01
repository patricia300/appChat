<script setup>
import ChatBox from './ChatBox.vue';
import ChatList from './ChatList.vue';
import SendMessage from './SendMessage.vue';

</script>

<template>
    <div>
        <!-- chat-container -->
        <div class="fixed w-full h-9/10 flex flex-wrap left-0 top-16">

            <!-- chat-list-container -->
            <div class="relative w-full md:w-2/5 lg:w-2/5 xl:w-1/4 h-full border border-solid border-gray-400">
                <ChatList/>
            </div>
            <!-- chat-box-container -->
            <div class="relative w-3/5 lg:w-3/5 xl:w-3/4 h-full border-t border-r border-b border-solid border-gray-400">
                <ChatBox/>
                <SendMessage/>
            </div>
        </div>
    </div>
</template>
