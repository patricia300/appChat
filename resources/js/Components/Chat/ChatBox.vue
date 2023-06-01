<script setup>
import SendMessage from './SendMessage.vue';

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
        <div class="absolute h-5/6 bottom-12 overflow-hidden overflow-y-scroll top-16 px-3">
            <div class="block max-w-4/5 my-3 p-2 message_body_receiver">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus nostrum inventore blanditiis ea consequatur soluta voluptates quia obcaecati iusto. Culpa iusto sunt sapiente perferendis iure, commodi totam! Cum, facere qui.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet eius, dicta a sint, impedit maiores tenetur dolor quaerat earum qui provident laboriosam aspernatur, dolorem omnis repellat veniam aliquam illum excepturi.
                <div class="w-full flex flex-nowrap justify-end items-center">
                    <div class="text-sm pr-2">
                        5 hours ago
                    </div>
                    <div>
                        <i class="bi bi-check2 text-lg"></i>
                    </div>
                </div>
            </div>
            <div class="block max-w-4/5 my-3 p-2 message_body_me">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus nostrum inventore blanditiis ea consequatur soluta voluptates quia obcaecati iusto. Culpa iusto sunt sapiente perferendis iure, commodi totam! Cum, facere qui.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aliquid adipisci voluptatem explicabo sequi est. In, mollitia voluptatibus quas optio tenetur natus dolorum tempora quidem, eum aspernatur dicta, porro cumque!
                <div class="w-full flex flex-nowrap justify-end items-center">
                    <div class="text-sm pr-2">
                        5 hours ago
                    </div>
                    <div>
                        <i class="bi bi-check2 text-lg"></i>
                    </div>
                </div>
            </div>
            <div class="block max-w-4/5 my-3 p-2 message_body_receiver">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus nostrum inventore blanditiis ea consequatur soluta voluptates quia obcaecati iusto. Culpa iusto sunt sapiente perferendis iure, commodi totam! Cum, facere qui.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex incidunt laboriosam assumenda dicta quia ipsa veritatis totam itaque corporis voluptate aliquam dolorum libero enim, vero quae. Debitis distinctio beatae soluta?
                <div class="w-full flex flex-nowrap justify-end items-center">
                    <div class="text-sm pr-2">
                        5 hours ago
                    </div>
                    <div>
                        <i class="bi bi-check2 text-lg"></i>
                    </div>
                </div>
            </div>
            <div class="block max-w-4/5 my-3 p-2 message_body_me">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus nostrum inventore blanditiis ea consequatur soluta voluptates quia obcaecati iusto. Culpa iusto sunt sapiente perferendis iure, commodi totam! Cum, facere qui.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex incidunt laboriosam assumenda dicta quia ipsa veritatis totam itaque corporis voluptate aliquam dolorum libero enim, vero quae. Debitis distinctio beatae soluta?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi inventore possimus ut sed dicta repellendus, asperiores tempore fuga dolorum iste, vitae voluptates at enim dignissimos obcaecati molestiae magni aliquam deserunt!
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus repellat excepturi eius exercitationem voluptates unde facilis error minus, similique iste totam, modi perferendis, vero ratione fuga ex aspernatur eveniet itaque!
                <div class="w-full flex flex-nowrap justify-end items-center">
                    <div class="text-sm pr-2">
                        5 hours ago
                    </div>
                    <div>
                        <i class="bi bi-check2 text-lg"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- chat box footer -->
        <SendMessage/>
</template>
