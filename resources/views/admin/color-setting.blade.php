<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
</head>

<body>
    <x-admin-layout>
        <div class="flex absolute w-full temp">
            <x-admin-navbar />
            <div class="w-full t2">
                <x-admin-header>
                    <div
                        class="lable ml-10 max-[736px]:ml-1 border-l-4 flex justify-center max-[673px]:text-sm items-center border-blue-800 pt-2 pb-2 pl-3 pr-3 bg-white">
                        <i
                            class="fa-solid fa-info flex justify-center items-center bg-blue-800 text-white rounded-full  w-6 h-6"></i>
                        <span class="pl-5 font-extrabold">Design Setting - </span><span>&nbsp;Update Setting related
                            to your design elements</span>
                    </div>
                    <div
                        class="pr-10 flex flex-wrap max-[1340px]:mt-5 max-[1340px]:w-full max-[1340px]:justify-center max-[1340px]:pr-0">
                        <button class="pt-1 pb-1 mt-5 mr-6 pl-12 max-[1340px]:mr-2 pr-12 bg-white"><i
                                class="fa-solid fa-arrow-rotate-left "></i>&nbsp;Backup</button>
                        <button class="pt-1 pb-1 mr-6 mt-5 pl-12 pr-12 max-[1340px]:mr-0 bg-slate-800 text-white"><i
                                class="fa-solid fa-arrows-rotate"></i>&nbsp;Restore Backup</button>
                    </div>
                </x-admin-header>
                <div class=" flex w-full h-12">
                    <a href={{ Route('admin.setting') }}>
                        <div
                            class="flex justify-center items-center border-4  border-slate-200   w-fit pl-10 pr-10 ml-5 h-full bg-slate-300 cursor-pointer">
                            <span>General</span>
                        </div>
                    </a>
                    <a href={{ Route('admin.setting.color') }}>
                        <div
                            class="flex justify-center items-center  border-t-4 border-blue-800 bg-white  w-fit pl-10 pr-10 ml-5 h-full cursor-pointer">
                            <span>Colour Sets</span>
                        </div>
                    </a>
                </div>

                <div class="bg-slate-100  temp3 pb-10">
                    <div class="flex justify-between ml-28 mr-28 mt-7 max-[1000px]:ml-8 max-[1000px]:mr-5">
                        <div>
                            <span class="text-2xl font-bold">Colors Setting</span>
                        </div>
                        <div>
                            <a href=# class="save text-green-600"><i
                                    class="fa-solid  text-green-600 fa-floppy-disk text-2xl"></i><span
                                    class="text-xl">&nbsp;Save</span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href=# class="cancel text-red-600"><i
                                    class="fa-solid fa-xmark text-red-600 text-2xl"></i><span
                                    class="text-xl">&nbsp;Reset</span></a>
                        </div>
                    </div>

                    <div class="mt-8 ml-40">
                        <div>
                            <span class="text-xl">Selected Color</span>
                        </div>
                        <div class="w-1/4 ml-10 mt-5">
                            <div class="w-full h-32" style="background:#11235A;">
                                <div class="text-white pt-3 pl-3">Header & Navbar</div>
                                <div class="text-white flex justify-end pr-3 pt-16 h-full">#11235A</div>
                            </div>
                            <div class="w-full h-24 bg-slate-400">
                                <div class="text-white pt-3 pl-3">Heading Background</div>
                                <div class="text-white flex justify-end pr-3 pt-7 h-full">bg-slate-400</div>
                            </div>
                            <div class="w-full h-16" style="background: black">
                                <div class="text-white pl-3">Heading & Navbar  text</div>
                                <div class="text-white flex justify-end pr-3 pt-4 h-full">#000000</div>
                            </div>
                            <div class="w-full h-12" style="background: white">
                                <div class="text-black pl-3">Heading & Navbar  text</div>
                                <div class="text-black flex justify-end pr-3 h-full">#000000</div>
                            </div>
                            <div class="w-full h-12 bg-blue-400 pt-5 pb-5 flex justify-between items-center">
                                <div class="text-black pl-3 font-extrabold"></div>
                                <div class="text-black pr-3"><a href=# class=" bg-slate-700 text-white pt-2 pb-2 pl-8 pr-8 rounded-lg pointer-events-none">Selected</a></div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 ml-40">
                        <div>
                            <span class="text-xl">Color Options</span>
                        </div>

                        <div class="flex flex-wrap">
                            <div class="w-1/4 ml-10 mt-5">
                                <div class="w-full h-32" style="background:#11235A;">
                                    <div class="text-white pt-3 pl-3">Header & Navbar</div>
                                    <div class="text-white flex justify-end pr-3 pt-16 h-full">#11235A</div>
                                </div>
                                <div class="w-full h-24 bg-slate-400">
                                    <div class="text-white pt-3 pl-3">Heading Background</div>
                                    <div class="text-white flex justify-end pr-3 pt-7 h-full">bg-slate-400</div>
                                </div>
                                <div class="w-full h-16" style="background: black">
                                    <div class="text-white pl-3">Heading & Navbar  text</div>
                                    <div class="text-white flex justify-end pr-3 pt-4 h-full">#000000</div>
                                </div>
                                <div class="w-full h-12" style="background: white">
                                    <div class="text-black pl-3">Heading & Navbar  text</div>
                                    <div class="text-black flex justify-end pr-3 h-full">#000000</div>
                                </div>
                                <div class="w-full h-12 bg-blue-400 pt-5 pb-5 flex justify-between items-center">
                                    <div class="text-black pl-3 font-extrabold"></div>
                                    <div class="text-black pr-3"><a href=# class=" bg-green-700 text-white pt-2 pb-2 pl-8 pr-8 rounded-lg">Select</a></div>
                                </div>
                            </div>

                            {{-- {{  dd($colour); }} --}}

                            <div class="w-1/4 ml-10 mt-5">
                                {{-- @foreach ($colour as $c ) --}}
                                <div class="w-full h-32" style="background:red">
                                    <div class="text-white pt-3 pl-3">Header & Navbar</div>
                                    <div class="text-white flex justify-end pr-3 pt-16 h-full">#11235A</div>
                                </div>
                                {{-- @endforeach --}}
                                
                                <div class="w-full h-24" style="background: #a4aac1">
                                    <div class="text-white pt-3 pl-3">Heading Background</div>
                                    <div class="text-white flex justify-end pr-3 pt-7 h-full">bg-slate-400</div>
                                </div>
                                <div class="w-full h-16" style="background: #000000">
                                    <div class="text-white pl-3">Heading & Navbar  text</div>
                                    <div class="text-white flex justify-end pr-3 pt-4 h-full">#000000</div>
                                </div>
                                <div class="w-full h-12" style="background: white">
                                    <div class="text-black pl-3">Heading & Navbar  text</div>
                                    <div class="text-black flex justify-end pr-3 h-full">#000000</div>
                                </div>
                                <div class="w-full h-12 bg-blue-400 pt-5 pb-5 flex justify-between items-center">
                                    <div class="text-black pl-3 font-extrabold"></div>
                                    <div class="text-black pr-3"><a href=# class=" bg-green-700 text-white pt-2 pb-2 pl-8 pr-8 rounded-lg">Select</a></div>
                                </div>
                            </div>


                            <div class="w-1/4 ml-10 mt-5">
                                <div class="w-full h-32" style="background:#11235A;">
                                    <div class="text-white pt-3 pl-3">Header & Navbar</div>
                                    <div class="text-white flex justify-end pr-3 pt-16 h-full">#11235A</div>
                                </div>
                                <div class="w-full h-24 bg-slate-400">
                                    <div class="text-white pt-3 pl-3">Heading Background</div>
                                    <div class="text-white flex justify-end pr-3 pt-7 h-full">bg-slate-400</div>
                                </div>
                                <div class="w-full h-16" style="background: black">
                                    <div class="text-white pl-3">Heading & Navbar  text</div>
                                    <div class="text-white flex justify-end pr-3 pt-4 h-full">#000000</div>
                                </div>
                                <div class="w-full h-12" style="background: white">
                                    <div class="text-black pl-3">Heading & Navbar  text</div>
                                    <div class="text-black flex justify-end pr-3 h-full">#000000</div>
                                </div>
                                <div class="w-full h-12 bg-blue-400 pt-5 pb-5 flex justify-between items-center">
                                    <div class="text-black pl-3 font-extrabold"></div>
                                    <div class="text-black pr-3"><a href=# class=" bg-green-700 text-white pt-2 pb-2 pl-8 pr-8 rounded-lg">Select</a></div>
                                </div>
                            </div>


                            <div class="w-1/4 ml-10 mt-5">
                                <div class="w-full h-32" style="background:#11235A;">
                                    <div class="text-white pt-3 pl-3">Header & Navbar</div>
                                    <div class="text-white flex justify-end pr-3 pt-16 h-full">#11235A</div>
                                </div>
                                <div class="w-full h-24 bg-slate-400">
                                    <div class="text-white pt-3 pl-3">Heading Background</div>
                                    <div class="text-white flex justify-end pr-3 pt-7 h-full">bg-slate-400</div>
                                </div>
                                <div class="w-full h-16" style="background: black">
                                    <div class="text-white pl-3">Heading & Navbar  text</div>
                                    <div class="text-white flex justify-end pr-3 pt-4 h-full">#000000</div>
                                </div>
                                <div class="w-full h-12" style="background: white">
                                    <div class="text-black pl-3">Heading & Navbar  text</div>
                                    <div class="text-black flex justify-end pr-3 h-full">#000000</div>
                                </div>
                                <div class="w-full h-12 bg-blue-400 pt-5 pb-5 flex justify-between items-center">
                                    <div class="text-black pl-3 font-extrabold"></div>
                                    <div class="text-black pr-3"><a href=# class=" bg-green-700 text-white pt-2 pb-2 pl-8 pr-8 rounded-lg">Select</a></div>
                                </div>
                            </div>

                            <div class="w-1/4 ml-10 mt-5">
                                <div class="w-full h-32" style="background:#11235A;">
                                    <div class="text-white pt-3 pl-3">Header & Navbar</div>
                                    <div class="text-white flex justify-end pr-3 pt-16 h-full">#11235A</div>
                                </div>
                                <div class="w-full h-24 bg-slate-400">
                                    <div class="text-white pt-3 pl-3">Heading Background</div>
                                    <div class="text-white flex justify-end pr-3 pt-7 h-full">bg-slate-400</div>
                                </div>
                                <div class="w-full h-16" style="background: black">
                                    <div class="text-white pl-3">Heading & Navbar  text</div>
                                    <div class="text-white flex justify-end pr-3 pt-4 h-full">#000000</div>
                                </div>
                                <div class="w-full h-12" style="background: white">
                                    <div class="text-black pl-3">Heading & Navbar  text</div>
                                    <div class="text-black flex justify-end pr-3 h-full">#000000</div>
                                </div>
                                <div class="w-full h-12 bg-blue-400 pt-5 pb-5 flex justify-between items-center">
                                    <div class="text-black pl-3 font-extrabold"></div>
                                    <div class="text-black pr-3"><a href=# class=" bg-green-700 text-white pt-2 pb-2 pl-8 pr-8 rounded-lg">Select</a></div>
                                </div>
                            </div>

                            <div class="w-1/4 ml-10 mt-5">
                                <div class="w-full h-32" style="background:#11235A;">
                                    <div class="text-white pt-3 pl-3">Header & Navbar</div>
                                    <div class="text-white flex justify-end pr-3 pt-16 h-full">#11235A</div>
                                </div>
                                <div class="w-full h-24 bg-slate-400">
                                    <div class="text-white pt-3 pl-3">Heading Background</div>
                                    <div class="text-white flex justify-end pr-3 pt-7 h-full">bg-slate-400</div>
                                </div>
                                <div class="w-full h-16" style="background: black">
                                    <div class="text-white pl-3">Heading & Navbar  text</div>
                                    <div class="text-white flex justify-end pr-3 pt-4 h-full">#000000</div>
                                </div>
                                <div class="w-full h-12" style="background: white">
                                    <div class="text-black pl-3">Heading & Navbar  text</div>
                                    <div class="text-black flex justify-end pr-3 h-full">#000000</div>
                                </div>
                                <div class="w-full h-12 bg-blue-400 pt-5 pb-5 flex justify-between items-center">
                                    <div class="text-black pl-3 font-extrabold"></div>
                                    <div class="text-black pr-3"><a href=# class=" bg-green-700 text-white pt-2 pb-2 pl-8 pr-8 rounded-lg">Select</a></div>
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
