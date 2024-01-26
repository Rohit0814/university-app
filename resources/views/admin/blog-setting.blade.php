<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


        <style>
            .scroll1::-webkit-scrollbar {
                width: 10px;
                height: 9px;
            }
            
            /* Track */
            .scroll1::-webkit-scrollbar-track {
                background: #606891;
                border-radius: 5px;
            }
            
            /* Handle */
            .scroll1::-webkit-scrollbar-thumb {
                background: #030065;
                border-radius: 5px;
            }
            
            /* Handle on hover */
            .scroll1::-webkit-scrollbar-thumb:hover {
                background: #555;
            }
        </style>

</head>
<body>
    <x-admin-layout>
        <div class="flex absolute w-full temp">
            <x-admin-navbar />
            <div class="side-bar w-[80%] t2 max-[1160px]:w-full">
                <x-admin-header>
                    <div
                        class="lable ml-10 max-[736px]:ml-1 border-l-4 break-words flex justify-center max-[673px]:text-sm items-center border-blue-800 pt-2 pb-2 pl-3 pr-3 bg-white">
                        <i
                            class="fa-solid fa-info flex justify-center items-center bg-blue-800 text-white rounded-full  w-6 h-6"></i>
                        <span class="pl-5 font-extrabold">Blog Setting - </span><span>&nbsp;Update Setting related
                            to your Blogging Facility</span>
                    </div>
                    <div
                        class="pr-10 flex flex-wrap max-[1340px]:mt-5 max-[1340px]:w-full max-[1340px]:justify-center max-[1340px]:pr-0">
                        <button class="pt-1 pb-1 mt-5 mr-6 pl-12 max-[1340px]:mr-2 pr-12 bg-white"><i
                                class="fa-solid fa-arrow-rotate-left "></i>&nbsp;Backup</button>
                        <button class="pt-1 pb-1 mr-6 mt-5 pl-12 pr-12 max-[1340px]:mr-0 bg-slate-800 text-white"><i
                                class="fa-solid fa-arrows-rotate"></i>&nbsp;Restore Backup</button>
                    </div>
                </x-admin-header>
                <div class=" bg-slate-100">
                    <div class="flex justify-between items-center">
                        <div>
                        <h3 class="text-xl font-extrabold mt-6 ml-8">Blogging Setting</h3>
                        <p class="text-sm font-light ml-8">You can Manage blogging permission</p>
                        </div>
                        <div>
                            <button class="pl-10 pr-10 mr-8 pt-2 pb-2 font-extrabold bg-white hover:bg-green-900 hover:text-white transition-all" style="box-shadow: 1px 1px 12px -1px rgba(0,0,0,0.75);"><i class="fa-solid fa-eye"></i>&nbsp;Visit</button>
                        </div>
                    </div><br>

                    <div class="flex ml-10 mr-10">
                        <div class="w-[70%] border border-slate-400  bg-white">
                            <p class="pt-5 pl-7"><i class="fa-regular fa-clock"></i> 1 minute ago</p>
                            <p class="pt-7 pl-10 text-4xl font-extrabold">Give Your Site A Name</p>
                            <p class="pt-5 pl-10 text-lg">Give your new site a title to let people know what your site is about.</p>
                            <button class="ml-10 mt-5 pt-2 pb-2 mb-12 pl-5 pr-5 bg-rose-900 text-white hover:bg-rose-700 transition-all">Name Your Site</button>
                        </div>
                        <div class="w-[30%]  border bg-white border-slate-400 ">
                            <p class="pt-5 pl-5 font-extrabold text-xl">Grant Permission</p>
                            <form class="pt-2 pl-10">
                                <div class="pb-1 pt-2">
                                <input type="checkbox" class="w-5 h-5">&nbsp;
                                <label class="pl-3 text-xl">Student Post</label>
                                </div>
                                <div class="pb-1 pt-2">
                                <input type="checkbox" class="w-5 h-5">&nbsp;
                                <label class="pl-3 text-xl">Faculty Post</label>
                                </div>
                                <div class="pb-1 pt-2">
                                <input type="checkbox" class="w-5 h-5">&nbsp;
                                <label class="pl-3 text-xl">Enable Post Sharing</label>
                                </div>
                                <div class="pb-1 pt-2">
                                <input type="checkbox" class="w-5 h-5">&nbsp;
                                <label class="pl-3 text-xl">Enabling Global post</label>
                                </div>
                                <div class="pb-2 pt-4 flex justify-end mr-10">
                                    <button class="pl-10 pr-10 pt-2 pb-2 bg-green-900 text-white font-bold hover:bg-green-700 mb-5">Confirm</button>
                                </div>
                            </form>
                        </div>
                    </div>



                    <div>
                        <div>
                        <p class="text-xl font-extrabold mt-6 ml-8">Selected Templates</p>
                        </div>

                        <div class="scroll1 pl-5 pt-5 pb-1 mb-6">
                            <div class="w-80 ml-2 mr-2 mt-5 mb-5">
                                <img src="https://w3layouts.com/wp-content/uploads/2020/11/news-blog-website-template-1-scaled.jpg" class="p-3 h-80 w-full bg-red-900">
                                <div class="w-full bg-slate-300 pr-8 flex justify-between items-center">
                                    <div>
                                    <i class="fa-solid fa-heart text-2xl pl-5"></i>
                                    <i class="fa-solid fa-share text-2xl pl-1"></i>
                                    </div>
                                    <div>
                                    <button class="pl-10 pr-10 pt-1 pb-1 mt-1 mb-1 rounded-xl bg-slate-900 pointer-events-none text-white">Select</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div>
                        <div>
                        <p class="text-xl font-extrabold mt-6 ml-8">Blogging Templates</p>
                        </div>

                        <div class="scroll1 pl-5 pt-5 pb-1 mb-6 grid grid-flow-col-dense overflow-x-scroll">
                            <div class="w-80 ml-2 mr-2 mt-5 mb-5">
                                <img src="https://w3layouts.com/wp-content/uploads/2020/11/news-blog-website-template-1-scaled.jpg" class="p-3 h-80 w-full bg-red-900">
                                <div class="w-full bg-blue-300 pr-8 flex justify-between items-center">
                                    <div>
                                    <i class="fa-solid fa-heart text-2xl pl-5"></i>
                                    <i class="fa-solid fa-share text-2xl pl-1"></i>
                                    </div>
                                    <div>
                                    <button class="pl-10 pr-10 pt-1 pb-1 mt-1 mb-1 rounded-xl bg-green-900 text-white">Select</button>
                                    </div>
                                </div>
                            </div>

                            <div class="w-80 ml-2 mr-2 mt-5 mb-5">
                                <img src="https://gooyaabitemplates.com/download/Aveen-Blogger-Template-1.jpg" class="p-3 h-80 w-full bg-red-900">
                                <div class="w-full bg-blue-300 pr-8 flex justify-between items-center">
                                    <div>
                                    <i class="fa-solid fa-heart text-2xl pl-5"></i>
                                    <i class="fa-solid fa-share text-2xl pl-1"></i>
                                    </div>
                                    <div>
                                    <button class="pl-10 pr-10 pt-1 pb-1 mt-1 mb-1 rounded-xl bg-green-900 text-white">Select</button>
                                    </div>
                                </div>
                            </div>

                            <div class="w-80 ml-2 mr-2 mt-5 mb-5">
                                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg_XiJtzY71rfml2Lzv6MIwcKVYhF7S-BGvLy_n8eFHpdM1fOgWsWFev9LZDzZqcIT-M6HOrWOjYue-_lLxW4L0ZKLrZVLYch_U0guqc9Cc7mh-pz-FtV8ot2ACxh0JO_eJSyzAzGt1LQm8ptL99JNPWJ8JDqjJ9QMgEqcMrf1OjjLCaupbXogpE0jwQeQg/s1600/Selary%20Blogger%20Template.jpg" class="p-3 h-80 w-full bg-red-900">
                                <div class="w-full bg-blue-300 pr-8 flex justify-between items-center">
                                    <div>
                                    <i class="fa-solid fa-heart text-2xl pl-5"></i>
                                    <i class="fa-solid fa-share text-2xl pl-1"></i>
                                    </div>
                                    <div>
                                    <button class="pl-10 pr-10 pt-1 pb-1 mt-1 mb-1 rounded-xl bg-green-900 text-white">Select</button>
                                    </div>
                                </div>
                            </div>

                            <div class="w-80 ml-2 mr-2 mt-5 mb-5">
                                <img src="https://lh3.googleusercontent.com/proxy/U0sXeic8JtrRy5knhnVb3-Ti785d2NTwwNkd4BiSI4U7MwCKbJtDD6k69etOqx14vo8rj3skHThm4xPjQJSIE2oMULMUAqXpxjZjNvWhE8cskY1TfY8S7qrSW96WtRraoKvHNPnb" class="p-3 h-80 w-full bg-red-900">
                                <div class="w-full bg-blue-300 pr-8 flex justify-between items-center">
                                    <div>
                                    <i class="fa-solid fa-heart text-2xl pl-5"></i>
                                    <i class="fa-solid fa-share text-2xl pl-1"></i>
                                    </div>
                                    <div>
                                    <button class="pl-10 pr-10 pt-1 pb-1 mt-1 mb-1 rounded-xl bg-green-900 text-white">Select</button>
                                    </div>
                                </div>
                            </div>

                            <div class="w-80 ml-2 mr-2 mt-5 mb-5">
                                <img src="data:image/jpeg;base64,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" class="p-3 w-full h-80 bg-red-900">
                                <div class="w-full bg-blue-300 pr-8 flex justify-between items-center">
                                    <div>
                                    <i class="fa-solid fa-heart text-2xl pl-5"></i>
                                    <i class="fa-solid fa-share text-2xl pl-1"></i>
                                    </div>
                                    <div>
                                    <button class="pl-10 pr-10 pt-1 pb-1 mt-1 mb-1 rounded-xl bg-green-900 text-white">Select</button>
                                    </div>
                                </div>
                            </div>

                            <div class="w-80 ml-2 mr-2 mt-5 mb-5">
                                <img src="https://colorlib.com/wp/wp-content/uploads/sites/2/bona-food-blog-website-template.jpg" class="p-3 w-full h-80 bg-red-900">
                                <div class="w-full bg-blue-300 pr-8 flex justify-between items-center">
                                    <div>
                                    <i class="fa-solid fa-heart text-2xl pl-5"></i>
                                    <i class="fa-solid fa-share text-2xl pl-1"></i>
                                    </div>
                                    <div>
                                    <button class="pl-10 pr-10 pt-1 pb-1 mt-1 mb-1 rounded-xl bg-green-900 text-white">Select</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div>
                        <div>
                        <p class="text-xl font-extrabold mt-6 ml-8">Favourite Template</p>
                        </div>

                        <div class="scroll1 pl-5 pt-5 pb-1 mb-6 grid grid-flow-col-dense overflow-x-scroll">
                            <div class="w-80 ml-2 mr-2 mt-5 mb-5">
                                <img src="https://w3layouts.com/wp-content/uploads/2020/11/news-blog-website-template-1-scaled.jpg" class="p-3 h-80 w-full bg-red-900">
                                <div class="w-full bg-blue-300 pr-8 flex justify-between items-center">
                                    <div>
                                    <i class="fa-solid fa-heart text-2xl pl-5"></i>
                                    <i class="fa-solid fa-share text-2xl pl-1"></i>
                                    </div>
                                    <div>
                                    <button class="pl-10 pr-10 pt-1 pb-1 mt-1 mb-1 rounded-xl bg-green-900 text-white">Select</button>
                                    </div>
                                </div>
                            </div>

                            <div class="w-80 ml-2 mr-2 mt-5 mb-5">
                                <img src="https://gooyaabitemplates.com/download/Aveen-Blogger-Template-1.jpg" class="p-3 h-80 w-full bg-red-900">
                                <div class="w-full bg-blue-300 pr-8 flex justify-between items-center">
                                    <div>
                                    <i class="fa-solid fa-heart text-2xl pl-5"></i>
                                    <i class="fa-solid fa-share text-2xl pl-1"></i>
                                    </div>
                                    <div>
                                    <button class="pl-10 pr-10 pt-1 pb-1 mt-1 mb-1 rounded-xl bg-green-900 text-white">Select</button>
                                    </div>
                                </div>
                            </div>

                            <div class="w-80 ml-2 mr-2 mt-5 mb-5">
                                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg_XiJtzY71rfml2Lzv6MIwcKVYhF7S-BGvLy_n8eFHpdM1fOgWsWFev9LZDzZqcIT-M6HOrWOjYue-_lLxW4L0ZKLrZVLYch_U0guqc9Cc7mh-pz-FtV8ot2ACxh0JO_eJSyzAzGt1LQm8ptL99JNPWJ8JDqjJ9QMgEqcMrf1OjjLCaupbXogpE0jwQeQg/s1600/Selary%20Blogger%20Template.jpg" class="p-3 h-80 w-full bg-red-900">
                                <div class="w-full bg-blue-300 pr-8 flex justify-between items-center">
                                    <div>
                                    <i class="fa-solid fa-heart text-2xl pl-5"></i>
                                    <i class="fa-solid fa-share text-2xl pl-1"></i>
                                    </div>
                                    <div>
                                    <button class="pl-10 pr-10 pt-1 pb-1 mt-1 mb-1 rounded-xl bg-green-900 text-white">Select</button>
                                    </div>
                                </div>
                            </div>

                            <div class="w-80 ml-2 mr-2 mt-5 mb-5">
                                <img src="https://lh3.googleusercontent.com/proxy/U0sXeic8JtrRy5knhnVb3-Ti785d2NTwwNkd4BiSI4U7MwCKbJtDD6k69etOqx14vo8rj3skHThm4xPjQJSIE2oMULMUAqXpxjZjNvWhE8cskY1TfY8S7qrSW96WtRraoKvHNPnb" class="p-3 h-80 w-full bg-red-900">
                                <div class="w-full bg-blue-300 pr-8 flex justify-between items-center">
                                    <div>
                                    <i class="fa-solid fa-heart text-2xl pl-5"></i>
                                    <i class="fa-solid fa-share text-2xl pl-1"></i>
                                    </div>
                                    <div>
                                    <button class="pl-10 pr-10 pt-1 pb-1 mt-1 mb-1 rounded-xl bg-green-900 text-white">Select</button>
                                    </div>
                                </div>
                            </div>

                            <div class="w-80 ml-2 mr-2 mt-5 mb-5">
                                <img src="data:image/jpeg;base64,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" class="p-3 w-full h-80 bg-red-900">
                                <div class="w-full bg-blue-300 pr-8 flex justify-between items-center">
                                    <div>
                                    <i class="fa-solid fa-heart text-2xl pl-5"></i>
                                    <i class="fa-solid fa-share text-2xl pl-1"></i>
                                    </div>
                                    <div>
                                    <button class="pl-10 pr-10 pt-1 pb-1 mt-1 mb-1 rounded-xl bg-green-900 text-white">Select</button>
                                    </div>
                                </div>
                            </div>

                            <div class="w-80 ml-2 mr-2 mt-5 mb-5">
                                <img src="https://colorlib.com/wp/wp-content/uploads/sites/2/bona-food-blog-website-template.jpg" class="p-3 w-full h-80 bg-red-900">
                                <div class="w-full bg-blue-300 pr-8 flex justify-between items-center">
                                    <div>
                                    <i class="fa-solid fa-heart text-2xl pl-5"></i>
                                    <i class="fa-solid fa-share text-2xl pl-1"></i>
                                    </div>
                                    <div>
                                    <button class="pl-10 pr-10 pt-1 pb-1 mt-1 mb-1 rounded-xl bg-green-900 text-white">Select</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </x-admin-layout>
</body>
</html>