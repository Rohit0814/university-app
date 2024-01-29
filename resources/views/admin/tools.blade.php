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
                        <span class="pl-5 font-extrabold">User & Role Setting - </span><span>&nbsp;Update Setting related
                            to your Roles</span>
                    </div>
                    <div
                        class="pr-10 flex flex-wrap max-[1340px]:mt-5 max-[1340px]:w-full max-[1340px]:justify-center max-[1340px]:pr-0">
                        <button class="pt-1 pb-1 mt-5 mr-6 pl-12 max-[1340px]:mr-2 pr-12 bg-white"><i
                                class="fa-solid fa-arrow-rotate-left "></i>&nbsp;Backup</button>
                        <button class="pt-1 pb-1 mr-6 mt-5 pl-12 pr-12 max-[1340px]:mr-0 bg-slate-800 text-white"><i
                                class="fa-solid fa-arrows-rotate"></i>&nbsp;Restore Backup</button>
                    </div>
                </x-admin-header>
                <div class=" bg-slate-100 min-h-[509px] pl-5 pr-5 pb-7">
                    <div class="flex justify-between items-center">
                        <div>
                        <h3 class="text-xl font-extrabold mt-6 ml-2">Tools</h3>
                        <p class="text-sm font-light ml-2">You can Manage Tools</p>
                        </div>
                    </div><br>

                    <div>
                        <div class="bg-white pt-3 pb-3 rounded-xl">
                            <details class="pl-10">
                                <summary  class="cursor-pointer text-xl font-extrabold">Export</summary>
                                <p class="pl-5">When you click the button below univer will create an XML file for you to save to your computer</p>
                                <ul class="pl-10 pt-2">
                                    <li class="flex items-center"><input type="checkbox">&nbsp;&nbsp;All Content</li>
                                    <li class="flex items-center pt-2"><input type="checkbox">&nbsp;&nbsp;Post Backup</li>
                                    <li class="flex items-center pt-2"><input type="checkbox">&nbsp;&nbsp;Page Backup</li>
                                    <li class="flex items-center pt-2"><input type="checkbox">&nbsp;&nbsp;Media Backup</li>
                                    <button class="mt-3 ml-5 mb-3 pl-6 pr-6 pt-2 pb-2 bg-blue-900 text-white">Download Export File</button>
                                </ul>
                            </details>
                        </div>

                        <div class="bg-white mt-3 pt-3 pb-3 rounded-xl">
                            <details class="pl-10">
                                <summary  class="cursor-pointer text-xl font-extrabold">Site Health Status</summary>
                                <p class="pl-5">The site health check shows critical information about our univer configuration and that require your attention</p>
                                <ul class="pl-10 pt-2">
                                    <li class="flex items-center"><input type="checkbox">&nbsp;&nbsp;Remove Inactive Theam</li>
                                    <li class="flex items-center pt-2"><input type="checkbox">&nbsp;&nbsp;Inhance security</li>
                                    <li class="flex items-center pt-2"><input type="checkbox">&nbsp;&nbsp;Check Status</li>
                                    <button class="mt-3 ml-5 mb-3 pl-6 pr-6 pt-2 pb-2 bg-blue-900 text-white">Confirm</button>
                                </ul>
                            </details>
                        </div>


                        <div class="bg-white mt-3 pt-3 pb-3 rounded-xl">
                            <details class="pl-10">
                                <summary  class="cursor-pointer text-xl font-extrabold">SEO</summary>
                                <p class="pl-5"></p>
                                <ul class="pl-10 pt-2">
                                    <li class="flex items-center"><input type="checkbox">&nbsp;&nbsp;Share Blog Globally</li>
                                    <li class="flex items-center pt-2"><input type="checkbox">&nbsp;&nbsp;Private Sharing</li>
                                    <li class="flex items-center pt-2"><input type="checkbox">&nbsp;&nbsp;Customized</li>
                                    <button class="mt-3 ml-5 mb-3 pl-6 pr-6 pt-2 pb-2 bg-blue-900 text-white">Confirm</button>
                                </ul>
                            </details>
                        </div>


                        <div class="bg-white mt-3 pt-3 pb-3 rounded-xl">
                            <details class="pl-10">
                                <summary  class="cursor-pointer text-xl font-extrabold">Import</summary>
                                <p class="pl-5">When you click the button below univer will create an XML file for you to Import to your Website</p>
                                <ul class="pl-10 pt-2">
                                    <button class="mt-3 ml-5 mb-3 pl-6 pr-6 pt-2 pb-2 bg-blue-900 text-white">Import File</button>
                                </ul>
                            </details>
                        </div>


                        <div class="bg-red-800 text-white mt-3 pt-3 pb-3 rounded-xl">
                            <details class="pl-10">
                                <summary  class="cursor-pointer text-xl font-extrabold">Destroy</summary>
                                <p class="pl-5">When you click the button below univer will create an XML file for you to save to your computer</p>
                                <ul class="pl-10 pt-2">
                                    <li class="flex items-center"><input type="checkbox">&nbsp;&nbsp;All Content</li>
                                    <li class="flex items-center pt-2"><input type="checkbox">&nbsp;&nbsp;Post Destroy</li>
                                    <li class="flex items-center pt-2"><input type="checkbox">&nbsp;&nbsp;Page Destroy</li>
                                    <li class="flex items-center pt-2"><input type="checkbox">&nbsp;&nbsp;Media Destroy</li>
                                    <button class="mt-3 ml-5 mb-3 pl-6 pr-6 pt-2 pb-2 bg-blue-900 text-white">Confirm</button>
                                </ul>
                            </details>
                        </div>
                    </div>




                </div>
            </div>
        </div>
    </x-admin-layout>
</body>
</html>