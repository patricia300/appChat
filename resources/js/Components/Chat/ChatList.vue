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
            <div class="flex flex-nowrap items-center w-full hover:bg-blue-200 my-2 bg-gray-200">
                <!--chat list img container -->
                <div>
                    <img src="https://picsum.photos/id/65/200/300" class="h-12 w-12 lg:h-14 lg:w-14 rounded-full border border-solid border-gray-300" alt="">
                </div>
                <!-- chat list info-->
                <div class="w-4/5 block ml-3 text-sm lg:text-base">
                    <!-- top row -->
                    <div class="w-full flex items-center">
                        <!-- username -->
                        <div class="font-bold w-4/5 text-base">Jane Doe</div>
                        <!-- date -->
                        <span class="ml-auto text-sm px-2 py-1">2d</span>
                    </div>
                    <!-- bottom row-->
                    <div class="w-full flex flex-nowrap items-center">
                        <!-- message body -->
                        <div class="w-4/5 truncate font-thin text-gray-500">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur nemo reprehenderit odit asperiores atque! Vero, rem! Soluta dicta adipisci voluptas! Rerum optio facere delectus architecto accusantium impedit magnam eum eligendi!
                        </div>

                        <!-- unread count-->
                        <div class="ml-auto font-sm bg-gray-200 px-2 py-1 rounded-full text-blue-600 font-thin">56</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>
