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
                        <span class="pl-5 font-extrabold">Theam Setting - </span><span>&nbsp;Update Setting related
                            to your Theams Facility</span>
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
                        <h3 class="text-xl font-extrabold mt-6 ml-8">Theams Setting</h3>
                        <p class="text-sm font-light ml-8">You can Manage Theams Layout</p>
                        </div>
                        <div>
                            <button class="pl-10 pr-10 mr-8 pt-2 pb-2 font-extrabold bg-white hover:bg-green-900 hover:text-white transition-all" style="box-shadow: 1px 1px 12px -1px rgba(0,0,0,0.75);"><i class="fa-solid fa-eye"></i>&nbsp;Visit</button>
                        </div>
                    </div><br>

                    <div class="flex ml-10 mr-10">
                        <div class="w-full border border-slate-400 flex justify-between  bg-white">
                            <div class="w-1/4 h-72 border-2 border-blue-500 rounded-lg m-10">
                                <div class="w-full h-4/5">
                                    <img src="https://docs-assets.developer.apple.com/published/0e3a3e3521/3003257@2x.png" class="w-full h-full p-2">
                                </div>
                                <div class="pl-3 pt-3 flex items-center">
                                    <input type="radio" class="mr-4">
                                    <span>Dark</span>
                                </div>
                            </div>
                            <div class="w-1/4 h-72 border-2 border-blue-500 rounded-lg m-10">
                                <div class="w-full h-4/5">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqRiKO7mTs2Bb2wzIpZoDXtkrHXUfpD1-WMg&usqp=CAU" class="w-full h-full p-2">
                                </div>
                                <div class="pl-3 pt-3 flex items-center">
                                    <input type="radio" class="mr-4">
                                    <span>Light</span>
                                </div>
                            </div>
                            <div class="w-1/4 h-72 border-2 border-blue-500 rounded-lg m-10">
                                <div class="w-full h-4/5">
                                    <img src="https://themeforest.img.customer.envatousercontent.com/files/224598706/PREVIEW-IMAGES/02_preview.jpg?auto=compress%2Cformat&fit=crop&crop=top&w=590&h=300&s=2fd8695e28ab553bb339711dd21b9168" class="w-full h-full p-2">
                                </div>
                                <div class="pl-3 pt-3 flex items-center">
                                    <input type="radio" class="mr-4">
                                    <span>White</span>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div>
                        <div>
                        <p class="text-xl font-extrabold mt-6 ml-8">App Theme Setting</p>
                        </div>

                        <div class=" flex justify-between flex-wrap pl-10 pb-10 pt-5">
                            <div class=" w-[25rem] mr-5 h-72 mt-3 mb-3 bg-white border-4 border-green-500 rounded-md">
                                <div class="w-full h-3/5 bg-red-800">
                                    <img src="https://d3h2k7ug3o5pb3.cloudfront.net/image/2020-12-01/5fb19810-33df-11eb-b5e9-cb6d63d43724.jpg" class="w-full h-full">
                                </div>
                                <div class="flex flex-col items-center pt-6">
                                    <div>
                                    <p class="text-xl font-extrabold">Default</p>
                                    </div>
                                    <div>
                                    <button class="pt-1 pb-1 pl-8 pr-8 border-4">Preview</button>
                                    <button class="pt-1 pb-1 pl-8 pr-8 border-4 bg-green-900 text-white">Apply</button>
                                    </div>
                                </div>
                            </div>


                            <div class="w-[25rem] mr-5 h-72 mt-3 mb-3 bg-white border-4 border-green-500 rounded-md">
                                <div class="w-full h-3/5 bg-red-800">
                                    <img src="https://d3h2k7ug3o5pb3.cloudfront.net/image/2020-12-01/5fb19810-33df-11eb-b5e9-cb6d63d43724.jpg" class="w-full h-full">
                                </div>
                                <div class="flex flex-col items-center pt-6">
                                    <div>
                                    <p class="text-xl font-extrabold">Default</p>
                                    </div>
                                    <div>
                                    <button class="pt-1 pb-1 pl-8 pr-8 border-4">Preview</button>
                                    <button class="pt-1 pb-1 pl-8 pr-8 border-4 bg-green-900 text-white">Apply</button>
                                    </div>
                                </div>
                            </div>



                            <div class="w-[25rem] mr-5 h-72 mt-3 mb-3 bg-white border-4 border-green-500 rounded-md">
                                <div class="w-full h-3/5 bg-red-800">
                                    <img src="https://d3h2k7ug3o5pb3.cloudfront.net/image/2020-12-01/5fb19810-33df-11eb-b5e9-cb6d63d43724.jpg" class="w-full h-full">
                                </div>
                                <div class="flex flex-col items-center pt-6">
                                    <div>
                                    <p class="text-xl font-extrabold">Default</p>
                                    </div>
                                    <div>
                                    <button class="pt-1 pb-1 pl-8 pr-8 border-4">Preview</button>
                                    <button class="pt-1 pb-1 pl-8 pr-8 border-4 bg-green-900 text-white">Apply</button>
                                    </div>
                                </div>
                            </div>



                            <div class="w-[25rem] mr-5 h-72 mt-3 mb-3 bg-white border-4 border-green-500 rounded-md">
                                <div class="w-full h-3/5 bg-red-800">
                                    <img src="https://d3h2k7ug3o5pb3.cloudfront.net/image/2020-12-01/5fb19810-33df-11eb-b5e9-cb6d63d43724.jpg" class="w-full h-full">
                                </div>
                                <div class="flex flex-col items-center pt-6">
                                    <div>
                                    <p class="text-xl font-extrabold">Default</p>
                                    </div>
                                    <div>
                                    <button class="pt-1 pb-1 pl-8 pr-8 border-4">Preview</button>
                                    <button class="pt-1 pb-1 pl-8 pr-8 border-4 bg-green-900 text-white">Apply</button>
                                    </div>
                                </div>
                            </div>


                            <div class="w-[25rem] mr-5 h-72 mt-3 mb-3 bg-white border-4 border-green-500 rounded-md">
                                <div class="w-full h-3/5 bg-red-800">
                                    <img src="https://d3h2k7ug3o5pb3.cloudfront.net/image/2020-12-01/5fb19810-33df-11eb-b5e9-cb6d63d43724.jpg" class="w-full h-full">
                                </div>
                                <div class="flex flex-col items-center pt-6">
                                    <div>
                                    <p class="text-xl font-extrabold">Default</p>
                                    </div>
                                    <div>
                                    <button class="pt-1 pb-1 pl-8 pr-8 border-4">Preview</button>
                                    <button class="pt-1 pb-1 pl-8 pr-8 border-4 bg-green-900 text-white">Apply</button>
                                    </div>
                                </div>
                            </div>



                            <div class="w-[25rem] mr-5 h-72 mt-3 mb-3 bg-white border-4 border-green-500 rounded-md">
                                <div class="w-full h-3/5 bg-red-800">
                                    <img src="https://d3h2k7ug3o5pb3.cloudfront.net/image/2020-12-01/5fb19810-33df-11eb-b5e9-cb6d63d43724.jpg" class="w-full h-full">
                                </div>
                                <div class="flex flex-col items-center pt-6">
                                    <div>
                                    <p class="text-xl font-extrabold">Default</p>
                                    </div>
                                    <div>
                                    <button class="pt-1 pb-1 pl-8 pr-8 border-4">Preview</button>
                                    <button class="pt-1 pb-1 pl-8 pr-8 border-4 bg-green-900 text-white">Apply</button>
                                    </div>
                                </div>
                            </div>


                            <div class="w-[25rem] mr-5 h-72 mt-3 mb-3 bg-white border-4 border-green-500 rounded-md">
                                <div class="w-full h-3/5 bg-red-800">
                                    <img src="https://d3h2k7ug3o5pb3.cloudfront.net/image/2020-12-01/5fb19810-33df-11eb-b5e9-cb6d63d43724.jpg" class="w-full h-full">
                                </div>
                                <div class="flex flex-col items-center pt-6">
                                    <div>
                                    <p class="text-xl font-extrabold">Default</p>
                                    </div>
                                    <div>
                                    <button class="pt-1 pb-1 pl-8 pr-8 border-4">Preview</button>
                                    <button class="pt-1 pb-1 pl-8 pr-8 border-4 bg-green-900 text-white">Apply</button>
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