<template>
       <!-- chat box footer -->
       <form action="">
               <div class="w-full absolute bottom-0 h-12">
                <div class="flex flex-nowrap justify-end items-center">
                    <input
                        type="text"
                        placeholder="Write message"
                        class="w-24/25 mx-auto my-0 outline-0 border-none shadow-none bg-gray-300 rounded-full message_input"
                    >

                    <button type="submit" class="mx-auto text-blue-600 text-xl text-center">
                        <i class="bi bi-send-fill"></i>
                        <!-- Send -->
                    </button>
                </div>
            </div>
           </form>
</template>

<style scoped>

.message_input:focus {
    outline: none;
    box-shadow: none;
    border-style: none;
}

</style>
