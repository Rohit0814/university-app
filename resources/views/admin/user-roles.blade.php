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
                <div class="  bg-slate-100 pl-5 pr-5 pb-7">
                    <div class="flex justify-between items-center">
                        <div>
                        <h3 class="text-xl font-extrabold mt-6 ml-2">Role Defination</h3>
                        <p class="text-sm font-light ml-2">You can Manage Roles</p>
                        </div>
                        <div>
                            <button class="pt-2 pb-2 pl-3 pr-3 mr-8 font-extrabold rounded-full bg-white hover:bg-green-900 hover:text-white transition-all" style="box-shadow: 1px 1px 12px -1px rgba(0,0,0,0.75);"><i class="fa-solid fa-square-plus text-xl"></i></button>
                        </div>
                    </div><br>

                    <div class="w-full bg-white rounded-xl">
                        <table class="table-auto w-full text-left">
                            <thead class="text-xl bg-slate-500">
                              <tr>
                                <th class="pl-4 pt-3 pb-3 rounded-tl-xl w-1/3">Roles</th>
                                <th class=" pl-4 pt-3 pb-3 w-1/3">Permission</th>
                                <th class=" pl-4 pt-3 pb-3 w-1/3 rounded-tr-xl">Timimg</th>
                              </tr>
                            </thead>
                            <tbody class="rounded-xl">
                              <tr class="border-b-2">
                                <td class="pt-3 pb-3 pl-4">The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                                <td class="pt-3 pb-3 pl-4">Malcolm Lockyer</td>
                                <td class="pt-3 pb-3 pl-4">1961</td>
                              </tr>
                              <tr class="border-b-2">
                                <td class="pt-3 pb-3 pl-4">Witchy Woman</td>
                                <td class="pt-3 pb-3 pl-4">The Eagles</td>
                                <td class="pt-3 pb-3 pl-4">1972</td>
                              </tr>
                              <tr class="border-b-2">
                                <td class="pt-3 pb-3 pl-4">Shining Star</td>
                                <td class="pt-3 pb-3 pl-4">Earth, Wind, and Fire</td>
                                <td class="pt-3 pb-3 pl-4">1975</td>
                              </tr>

                              <tr class="border-b-2">
                                <td class="pt-3 pb-3 pl-4">Shining Star</td>
                                <td class="pt-3 pb-3 pl-4">Earth, Wind, and Fire</td>
                                <td class="pt-3 pb-3 pl-4">1975</td>
                              </tr>

                              <tr class="border-b-2">
                                <td class="pt-3 pb-3 pl-4">Shining Star</td>
                                <td class="pt-3 pb-3 pl-4">Earth, Wind, and Fire</td>
                                <td class="pt-3 pb-3 pl-4">1975</td>
                              </tr>

                              <tr class="border-b-2">
                                <td class="pt-3 pb-3 pl-4">Shining Star</td>
                                <td class="pt-3 pb-3 pl-4">Earth, Wind, and Fire</td>
                                <td class="pt-3 pb-3 pl-4">1975</td>
                              </tr>
                            </tbody>
                        </table>
                    </div>




                    <div class="flex justify-between items-center">
                        <div>
                        <h3 class="text-xl font-extrabold mt-6 ml-2">User Defination</h3>
                        <p class="text-sm font-light ml-2">You can Manage Users</p>
                        </div>
                        <div>
                            <button class="pt-2 pb-2 pl-3 pr-3 mr-8 font-extrabold rounded-full bg-white hover:bg-green-900 hover:text-white transition-all" style="box-shadow: 1px 1px 12px -1px rgba(0,0,0,0.75);"><i class="fa-solid fa-square-plus text-xl"></i></button>
                        </div>
                    </div><br>

                    <div class="w-full bg-white rounded-xl ">
                        <table class="table-auto w-full text-left">
                            <thead class="text-xl bg-slate-500">
                              <tr>
                                <th class="pl-4 pt-3 pb-3 rounded-tl-xl w-1/3">Users</th>
                                <th class=" pl-4 pt-3 pb-3 w-1/3">Permission</th>
                                <th class=" pl-4 pt-3 pb-3 w-1/3 rounded-tr-xl">Timimg</th>
                              </tr>
                            </thead>
                            <tbody class="rounded-xl">
                              <tr class="border-b-2">
                                <td class="pt-3 pb-3 pl-4">The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                                <td class="pt-3 pb-3 pl-4">Malcolm Lockyer</td>
                                <td class="pt-3 pb-3 pl-4">1961</td>
                              </tr>
                              <tr class="border-b-2">
                                <td class="pt-3 pb-3 pl-4">Witchy Woman</td>
                                <td class="pt-3 pb-3 pl-4">The Eagles</td>
                                <td class="pt-3 pb-3 pl-4">1972</td>
                              </tr>
                              <tr class="border-b-2">
                                <td class="pt-3 pb-3 pl-4">Shining Star</td>
                                <td class="pt-3 pb-3 pl-4">Earth, Wind, and Fire</td>
                                <td class="pt-3 pb-3 pl-4">1975</td>
                              </tr>

                              <tr class="border-b-2">
                                <td class="pt-3 pb-3 pl-4">Shining Star</td>
                                <td class="pt-3 pb-3 pl-4">Earth, Wind, and Fire</td>
                                <td class="pt-3 pb-3 pl-4">1975</td>
                              </tr>

                              <tr class="border-b-2">
                                <td class="pt-3 pb-3 pl-4">Shining Star</td>
                                <td class="pt-3 pb-3 pl-4">Earth, Wind, and Fire</td>
                                <td class="pt-3 pb-3 pl-4">1975</td>
                              </tr>

                              <tr class="border-b-2">
                                <td class="pt-3 pb-3 pl-4">Shining Star</td>
                                <td class="pt-3 pb-3 pl-4">Earth, Wind, and Fire</td>
                                <td class="pt-3 pb-3 pl-4">1975</td>
                              </tr>
                            </tbody>
                        </table>
                    </div>




                </div>
            </div>
        </div>
    </x-admin-layout>
</body>
</html>