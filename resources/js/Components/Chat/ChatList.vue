<script setup>
import moment from "moment";
import { reactive } from "vue";
import { computed } from "vue";


const props = defineProps({
    conversations:{
        type: Object
    },
})

const emit = defineEmits(['click'])

const conversationsData = reactive(props.conversations.map((value) => {
    const date = computed(() => moment(value.messages.reduce((prev,cur) => prev.id > cur).created_at).fromNow() )
    return{
    id: value.id,
    name: value.user.name,
    get date() {
        return date.value;
    },
    lastMessage: value.messages.reduce((prev,cur) => prev.id > cur).body,
    }
}));


function onSelectedConversation(id)
{
    emit('click', id);
}

</script>

<template>
   <!-- chat list container-->
   <div>
        <!-- Chat List header -->
        <div class="border-b border-solid border-gray-400 h-16 flex items-center flex-nowrap">

            <div class="flex justify-center items-center text-center text-lg p-1">
                Chat
            </div>

            <div class="ml-auto mr-2">
                <img src="https://picsum.photos/id/64/200/300" class="h-12 w-12 rounded-full border border-solid border-gray-300" alt="">
            </div>
        </div>

        <!-- chat list body  -->
        <div>
            <!-- chat list item -->
            <template v-if="conversations.length > 0">
                <div
                    v-for="conversation in conversationsData"
                    :key="conversation.id"
                    @click="onSelectedConversation(conversation.id)"
                    class="flex flex-nowrap items-center w-24/25 hover:bg-blue-200 my-2 mx-auto p-2 rounded-md bg-gray-200 cursor-pointer"
                >
                    <!--chat list img container -->
                    <div>
                        <img :src="`https://picsum.photos/id/${conversation.id}/200/300`" class="h-12 w-12 lg:h-14 lg:w-14 rounded-full border border-solid border-gray-300" alt="">
                    </div>
                    <!-- chat list info-->
                    <div class="w-4/5 block ml-3 text-sm lg:text-base">
                        <!-- top row -->
                        <div class="w-full flex items-center">
                            <!-- username -->
                            <div class="font-bold w-3/5 text-base"> {{ conversation.name }}</div>
                            <!-- date -->
                            <span class="ml-auto text-sm px-2 py-1">{{  conversation.date }}</span>
                        </div>
                        <!-- bottom row-->
                        <div class="w-full flex flex-nowrap items-center">
                            <!-- message body -->
                            <div class="w-4/5 font-thin text-gray-500">
                                {{ conversation.lastMessage }}
                            </div>

                            <!-- unread count-->
                            <div class="ml-auto font-sm -mb-3 p-2 rounded-full text-blue-600 font-thin">56</div>
                        </div>
                    </div>
                </div>
            </template>
            <template v-else>
                <div class="text-center my-3">
                    You have no conversation
                </div>
            </template>
            <!-- {{ conversationsData }} -->
        </div>
    </div>
</template>
