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
</head>
<body>
    <x-admin-layout>
        <div class="flex absolute w-full temp">
            <x-admin-navbar />
            <div class="w-full t2">
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
                <div class="">
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
                        <p class="text-xl font-extrabold mt-6 ml-8">Blogging Templates</p>
                        </div>

                        <div class="pl-5 pt-5 pb-10 flex flex-wrap">
                            <div class="w-1/5 ml-2 mr-2 mt-5 mb-5">
                                <img src="https://w3layouts.com/wp-content/uploads/2020/11/news-blog-website-template-1-scaled.jpg" class="p-3 bg-red-900">
                                <div class="w-full bg-blue-300 pr-8 flex justify-end">
                                    <button class="pl-10 pr-10 pt-1 pb-1 mt-1 mb-1 rounded-xl bg-green-900 text-white">Select</button>
                                </div>
                            </div>

                            <div class="w-1/5 ml-2 mr-2 mt-5 mb-5">
                                <img src="https://w3layouts.com/wp-content/uploads/2020/11/news-blog-website-template-1-scaled.jpg" class="p-3 bg-red-900">
                                <div class="w-full bg-blue-300 pr-8 flex justify-end">
                                    <button class="pl-10 pr-10 pt-1 pb-1 mt-1 mb-1 rounded-xl bg-green-900 text-white">Select</button>
                                </div>
                            </div>

                            <div class="w-1/5 ml-2 mr-2 mt-5 mb-5">
                                <img src="https://w3layouts.com/wp-content/uploads/2020/11/news-blog-website-template-1-scaled.jpg" class="p-3 bg-red-900">
                                <div class="w-full bg-blue-300 pr-8 flex justify-end">
                                    <button class="pl-10 pr-10 pt-1 pb-1 mt-1 mb-1 rounded-xl bg-green-900 text-white">Select</button>
                                </div>
                            </div>

                            <div class="w-1/5 ml-2 mr-2 mt-5 mb-5">
                                <img src="https://w3layouts.com/wp-content/uploads/2020/11/news-blog-website-template-1-scaled.jpg" class="p-3 bg-red-900">
                                <div class="w-full bg-blue-300 pr-8 flex justify-end">
                                    <button class="pl-10 pr-10 pt-1 pb-1 mt-1 mb-1 rounded-xl bg-green-900 text-white">Select</button>
                                </div>
                            </div>

                            <div class="w-1/5 ml-2 mr-2 mt-5 mb-5">
                                <img src="https://w3layouts.com/wp-content/uploads/2020/11/news-blog-website-template-1-scaled.jpg" class="p-3 bg-red-900">
                                <div class="w-full bg-blue-300 pr-8 flex justify-end">
                                    <button class="pl-10 pr-10 pt-1 pb-1 mt-1 mb-1 rounded-xl bg-green-900 text-white">Select</button>
                                </div>
                            </div>

                            <div class="w-1/5 ml-2 mr-2 mt-5 mb-5">
                                <img src="https://w3layouts.com/wp-content/uploads/2020/11/news-blog-website-template-1-scaled.jpg" class="p-3 bg-red-900">
                                <div class="w-full bg-blue-300 pr-8 flex justify-end">
                                    <button class="pl-10 pr-10 pt-1 pb-1 mt-1 mb-1 rounded-xl bg-green-900 text-white">Select</button>
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