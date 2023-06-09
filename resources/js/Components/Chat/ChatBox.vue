<script setup>
import SendMessage from './SendMessage.vue';
import moment from 'moment';

const props = defineProps({
    messages : {
        type: Object
    }
});


</script>

<template>
    <!-- chat box container -->
        <!-- chat box header -->
        <div class="w-full absolute top-0 border-b border-gray-400 h-16 flex items-center">
            <div class="my-auto ml-2 text-blue-600 hover:text-blue-500 hover:ease-linear text-xl">
                <i class="bi bi-arrow-left"></i>
            </div>

            <div class="mx-2">
                <img src="https://picsum.photos/id/65/200/300" class="h-12 w-12 rounded-full border border-solid border-gray-300" alt="">
            </div>

            <div class="mx-1 text-center">Jane Doe</div>

            <div class="flex items-center text-blue-600 text-xl ml-auto">
                <div class="mx-2 p-3 hover:text-blue-500 hover:transition-all hover:ease-in-out hover:duration-500">
                    <i class="bi bi-telephone-fill"></i>
                </div>
                <div class="mx-2 p-3 hover:text-blue-500 hover:transition-all hover:ease-in-out hover:duration-500">
                    <i class="bi bi-camera-fill"></i>
                </div>
                <div class="mx-2 p-3 hover:text-blue-500 hover:transition-all hover:ease-in-out hover:duration-500">
                    <i class="bi bi-info-circle-fill"></i>
                </div>
            </div>
        </div>
        <!-- chat box body -->
        <div class="absolute w-full h-5/6 bottom-12 overflow-hidden overflow-y-scroll top-16 px-3">
            <template v-if="!messages">
                No selected conversation
            </template>
            <template v-else>
                <div v-for="message in messages" :key="message.id" class="block max-w-4/5 my-3 p-2 message_body_receiver" >
                        {{ message.body }}
                    <div class="w-full flex flex-nowrap justify-end items-center">
                        <div class="text-sm pr-2">
                            {{ moment(message.created_at).fromNow() }}
                        </div>
                        <div>
                            <i class="bi bi-check2 text-lg"></i>
                        </div>
                    </div>
                </div>
            </template>
        </div>
        <!-- chat box footer -->
        <SendMessage/>
</template>
