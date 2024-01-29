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
            <div class="side-bar w-[84.3%] t2 max-[1160px]:w-full">
                <x-admin-header>
                    <div
                        class="lable ml-10 max-[736px]:ml-1 border-l-4 break-words flex justify-center max-[673px]:text-sm items-center border-blue-800 pt-2 pb-2 pl-3 pr-3 bg-white">
                        <i
                            class="fa-solid fa-info flex justify-center items-center bg-blue-800 text-white rounded-full  w-6 h-6"></i>
                        <span class="pl-5 font-extrabold">Accessiblity Setting - </span><span>&nbsp;Update Setting related
                            to your Access Management</span>
                    </div>
                    <div
                        class="pr-10 flex flex-wrap max-[1340px]:mt-5 max-[1340px]:w-full max-[1340px]:justify-center max-[1340px]:pr-0">
                        <button class="pt-1 pb-1 mt-5 mr-6 pl-12 max-[1340px]:mr-2 pr-12 bg-white"><i
                                class="fa-solid fa-arrow-rotate-left "></i>&nbsp;Backup</button>
                        <button class="pt-1 pb-1 mr-6 mt-5 pl-12 pr-12 max-[1340px]:mr-0 bg-slate-800 text-white"><i
                                class="fa-solid fa-arrows-rotate"></i>&nbsp;Restore Backup</button>
                    </div>
                </x-admin-header>
                <div class=" bg-slate-100 pl-5 pr-5 pb-8">
                    <div class="flex justify-between items-center">
                        <div>
                        <h3 class="text-xl font-extrabold mt-6 ml-8">Theams Setting</h3>
                        <p class="text-sm font-light ml-8">You can Manage Theams Layout</p>
                        </div>
                        <div>
                            <button class="pl-10 pr-10 mr-8 pt-2 pb-2 font-extrabold bg-white hover:bg-green-900 hover:text-white transition-all" style="box-shadow: 1px 1px 12px -1px rgba(0,0,0,0.75);"><i class="fa-solid fa-eye"></i>&nbsp;Visit</button>
                        </div>
                    </div><br>

                    <div>
                        <div class="ml-10 flex items-center mr-10 border-t-2 pl-5 border-slate-300 pt-3 pb-4 border-b-2">
                            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/a/a4/Flag_of_the_United_States.svg/2560px-Flag_of_the_United_States.svg.png" class="w-12 h-12 rounded-full">
                            <span class="pl-7 font-extrabold">United State (EN) <i class="fa-solid fa-caret-right"></i></span>
                        </div>

                        <div class="ml-10 flex items-center mr-10 pl-5 border-slate-300 pt-5 pb-4 border-b-2">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTdPQT2T9QHaFcLANweZVG2ixlfmAB5r7P5qA&usqp=CAU" class="w-12 h-12 rounded-full">
                            <span class="pl-7 font-extrabold">Accessiblity Profile <i class="fa-solid fa-caret-right"></i></span>
                        </div>  
                    </div>


                    <div class=" w-full h-96 mt-5 rounded-2xl bg-white">
                        <div class="flex justify-between items-center border-b-2 pb-2">
                            <div class="pl-5 pt-5 font-extrabold text-xl">Accessiblity Adjustments</div>
                            <div class="pr-5"><button class="bg-blue-800 pt-1 pb-1 pl-5 pr-5 text-white rounded-3xl">Reset Setting</button></div>
                        </div>


                        <div class="flex justify-between items-center">
                            <div class="ml-7 mt-4 mb-4 border-2 " style="box-shadow: -1px 1px 7px 1px rgba(0,0,0,0.75);">
                                <button class="pt-1 pb-1 pl-5 pr-5">OFF</button>
                                <button class="pt-1 pb-1 pl-5 pr-5 bg-slate-400">ON</button>
                            </div>
                            <div class="text-center mt-4 mb-4">
                                <p class="text-xl font-extrabold">Turn on Communication Support</p>
                                <p class="text-sm">This lead to communicate with admin</p>
                            </div>
                            <div class="mr-7 mt-4 text-center mb-4">
                                <i class="fa-brands fa-signal-messenger text-4xl pr-5"></i>
                            </div>
                        </div>


                        <div class="flex justify-between items-center">
                            <div class="ml-7 mt-4 mb-4 border-2 " style="box-shadow: -1px 1px 7px 1px rgba(0,0,0,0.75);">
                                <button class="pt-1 pb-1 pl-5 pr-5">OFF</button>
                                <button class="pt-1 pb-1 pl-5 pr-5 bg-slate-400">ON</button>
                            </div>
                            <div class="text-center mt-4 mb-4">
                                <p class="text-xl font-extrabold">Turn on user Communication Support</p>
                                <p class="text-sm">This lead to inter comunication including Admin</p>
                            </div>
                            <div class="mr-7 mt-4 text-center mb-4">
                                <i class="fa-solid fa-comments text-4xl pr-5"></i>
                            </div>
                        </div>


                        <div class="flex justify-between items-center">
                            <div class="ml-7 mt-4 mb-4 border-2 " style="box-shadow: -1px 1px 7px 1px rgba(0,0,0,0.75);">
                                <button class="pt-1 pb-1 pl-5 pr-5">OFF</button>
                                <button class="pt-1 pb-1 pl-5 pr-5 bg-slate-400">ON</button>
                            </div>
                            <div class="text-center mt-4 mb-4">
                                <p class="text-xl font-extrabold">Turn on Email & Messaging</p>
                                <p class="text-sm">This lead to communicate with email as well as via message</p>
                            </div>
                            <div class="mr-7 mt-4 text-center mb-4">
                                <i class="fa-solid fa-envelope text-4xl pr-5"></i>
                            </div>
                        </div>


                        <div class="flex justify-between items-center">
                            <div class="ml-7 mt-4 mb-4 border-2 " style="box-shadow: -1px 1px 7px 1px rgba(0,0,0,0.75);">
                                <button class="pt-1 pb-1 pl-5 pr-5">OFF</button>
                                <button class="pt-1 pb-1 pl-5 pr-5 bg-slate-400">ON</button>
                            </div>
                            <div class="text-center mt-4 mb-4">
                                <p class="text-xl font-extrabold">Turn on Communication group Support</p>
                                <p class="text-sm">This lead to communicate within group</p>
                            </div>
                            <div class="mr-7 mt-4 text-center mb-4">
                                <i class="fa-solid fa-people-group text-4xl pr-5"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-admin-layout>
</body>
</html>