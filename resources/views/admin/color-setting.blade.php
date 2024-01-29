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
    <style>
        .scroll1::-webkit-scrollbar {
            width: 10px;
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
                            class="flex justify-center items-center border-4  border-slate-200   w-fit pl-10 pr-10 ml-5 max-[333px]:ml-auto max-[333px]:text-sm h-full bg-slate-300 cursor-pointer">
                            <span>General</span>
                        </div>
                    </a>
                    <a href={{ Route('admin.setting.color') }}>
                        <div
                            class="flex justify-center items-center  border-t-4 border-blue-800 bg-white  w-fit pl-10 pr-10 ml-5 max-[333px]:ml-1 max-[333px]:text-sm h-full cursor-pointer">
                            <span>Colour Sets</span>
                        </div>
                    </a>
                </div>

                <div class="bg-slate-100  temp3 pb-10">
                    <div class="flex justify-between ml-12 mr-12 mt-7 max-[1000px]:ml-8 max-[1000px]:mr-5">
                        <div>
                            <span class="text-2xl font-bold max-[380px]:text-lg">Colors Setting</span>
                        </div>
                        <div>
                            <a href=# class="save text-green-600"><i
                                    class="fa-solid  text-green-600 fa-floppy-disk text-2xl max-[380px]:text-lg"></i><span
                                    class="text-xl max-[380px]:text-lg">&nbsp;Save</span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href=# class="cancel text-red-600"><i
                                    class="fa-solid fa-xmark text-red-600 text-2xl max-[380px]:text-lg"></i><span
                                    class="text-xl max-[380px]:text-lg">&nbsp;Reset</span></a>
                        </div>
                    </div>

                    <div class="mt-8 ml-12 max-[370px]:ml-auto">
                        <div>
                            <span class="text-xl font-extrabold">Selected Color</span>
                        </div>
                        <div class="flex max-[680px]:justify-center">
                        @foreach ($colours as $c)
                        @if ($c->Status == 'true')
                        <div class=" w-[260px] rounded-xl ml-3 mr-3 mt-5">
                            <div class="w-full h-[110px] rounded-t-xl" style="background:{{ $c->Navbar_background }}">
                                <div class="text-white pt-3 pl-3">Header & Navbar</div>
                                <div class="text-white flex justify-end pr-3 pt-16 h-full"></div>
                            </div>
                            
                            <div class="w-full h-[70px]" style="background: {{ $c->Heading_background }}">
                                <div class="text-white pt-3 pl-3">Heading Background</div>
                                <div class="text-white flex justify-end pr-3 pt-7 h-full"></div>
                            </div>
                            <div class="w-full h-[50px]" style="background: {{ $c->Navbar_text }}">
                                <div class="text-white pl-3">Navbar  text</div>
                                <div class="text-white flex justify-end pr-3 pt-4 h-full"></div>
                            </div>
                            <div class="w-full h-[40px]  " style="background: {{ $c->Heading_text }}">
                                <div class="text-black pl-3">Heading text</div>
                                <div class="text-black flex justify-end pr-3 h-full"></div>
                            </div>
                                <div class="w-full flex justify-between items-center">
                                    <button type="submit" class="w-full pointer-events-none"><a href=# class="w-full"><div class=" bg-slate-300 w-full text-white rounded-b-xl pt-2 pb-2 pl-8 pr-8">Selected</div></a><button>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        </div>
                    </div>

                    <div class="mt-8 ml-12 max-[370px]:ml-auto">
                        <div>
                            <span class="text-xl font-extrabold">Color Options</span>
                        </div>

                        <div class="flex">
                        <div class="scroll1 grid grid-flow-col-dense overflow-x-scroll pb-5 mr-8">
                            @foreach ($colours as $c )
                            @if($c->Status != 'true')
                            <div class=" w-[260px] rounded-xl ml-4 mr-10 mt-5">
                                <div class="w-full h-[110px] rounded-t-xl" style="background:{{ $c->Navbar_background }}">
                                    <div class="text-white pt-3 pl-3">Header & Navbar</div>
                                    <div class="text-white flex justify-end pr-3 pt-16 h-full"></div>
                                </div>
                                
                                <div class="w-full h-[70px]" style="background: {{ $c->Heading_background }}">
                                    <div class="text-white pt-3 pl-3">Heading Background</div>
                                    <div class="text-white flex justify-end pr-3 pt-7 h-full"></div>
                                </div>
                                <div class="w-full h-[50px]" style="background: {{ $c->Navbar_text }}">
                                    <div class="text-white pl-3">Navbar  text</div>
                                    <div class="text-white flex justify-end pr-3 pt-4 h-full"></div>
                                </div>
                                <div class="w-full h-[40px]  " style="background: {{ $c->Heading_text }}">
                                    <div class="text-black pl-3">Heading text</div>
                                    <div class="text-black flex justify-end pr-3 h-full"></div>
                                </div>
                                <form action="{{ route('admin.change.color',['id' => $c->id]) }}" method="post">
                                    @csrf
                                    <input type="hidden" value="{{ $c->id }}" name="colorCode">
                                    <div class="w-full flex justify-between items-center">
                                        <button type="submit" class="w-full"><a href=# class="w-full"><div class="bg-green-700 w-full text-white rounded-b-xl pt-2 pb-2 pl-8 pr-8">Select</div></a><button>
                                    </div>
                                </form>
                            </div>
                            @endif
                            @endforeach
                        </div>
                        </div>
                    </div>

                    <div class="mt-8 ml-12 max-[370px]:ml-auto">
                        <div class="">
                            <span class="text-xl font-extrabold">Light Colours Palette</span>
                        </div>
                        <div class="flex">
                            <div class="scroll1 grid grid-flow-col-dense overflow-x-scroll pb-5 mr-8">
                                @foreach ($colours as $c )
                                @if($c->Status != 'true' && $c->palette == 'light')
                                <div class=" w-[260px] rounded-xl ml-4 mr-10 mt-5">
                                    <div class="w-full h-[110px] rounded-t-xl" style="background:{{ $c->Navbar_background }}">
                                        <div class="text-white pt-3 pl-3">Header & Navbar</div>
                                        <div class="text-white flex justify-end pr-3 pt-16 h-full"></div>
                                    </div>
                                    
                                    <div class="w-full h-[70px]" style="background: {{ $c->Heading_background }}">
                                        <div class="text-white pt-3 pl-3">Heading Background</div>
                                        <div class="text-white flex justify-end pr-3 pt-7 h-full"></div>
                                    </div>
                                    <div class="w-full h-[50px]" style="background: {{ $c->Navbar_text }}">
                                        <div class="text-white pl-3">Navbar  text</div>
                                        <div class="text-white flex justify-end pr-3 pt-4 h-full"></div>
                                    </div>
                                    <div class="w-full h-[40px]  " style="background: {{ $c->Heading_text }}">
                                        <div class="text-black pl-3">Heading text</div>
                                        <div class="text-black flex justify-end pr-3 h-full"></div>
                                    </div>
                                    <form action="{{ route('admin.change.color',['id' => $c->id]) }}" method="post">
                                        @csrf
                                        <input type="hidden" value="{{ $c->id }}" name="colorCode">
                                        <div class="w-full flex justify-between items-center">
                                            <button type="submit" class="w-full"><a href=# class="w-full"><div class="bg-green-700 w-full text-white rounded-b-xl pt-2 pb-2 pl-8 pr-8">Select</div></a><button>
                                        </div>
                                    </form>
                                </div>
                                @endif
                                @endforeach
                            </div>
                            </div>
                    </div>

                    <div class="mt-8 ml-12 max-[370px]:ml-auto">
                        <div class="">
                            <span class="text-xl font-extrabold">Dark Colours Palette</span>
                        </div>
                        <div class="flex">
                            <div class="scroll1 grid grid-flow-col-dense overflow-x-scroll pb-5 mr-8">
                                @foreach ($colours as $c )
                                @if($c->Status != 'true' && $c->palette == 'dark')
                                <div class=" w-[260px] rounded-xl ml-4 mr-10 mt-5">
                                    <div class="w-full h-[110px] rounded-t-xl" style="background:{{ $c->Navbar_background }}">
                                        <div class="text-white pt-3 pl-3">Header & Navbar</div>
                                        <div class="text-white flex justify-end pr-3 pt-16 h-full"></div>
                                    </div>
                                    
                                    <div class="w-full h-[70px]" style="background: {{ $c->Heading_background }}">
                                        <div class="text-white pt-3 pl-3">Heading Background</div>
                                        <div class="text-white flex justify-end pr-3 pt-7 h-full"></div>
                                    </div>
                                    <div class="w-full h-[50px]" style="background: {{ $c->Navbar_text }}">
                                        <div class="text-white pl-3">Navbar  text</div>
                                        <div class="text-white flex justify-end pr-3 pt-4 h-full"></div>
                                    </div>
                                    <div class="w-full h-[40px]  " style="background: {{ $c->Heading_text }}">
                                        <div class="text-black pl-3">Heading text</div>
                                        <div class="text-black flex justify-end pr-3 h-full"></div>
                                    </div>
                                    <form action="{{ route('admin.change.color',['id' => $c->id]) }}" method="post">
                                        @csrf
                                        <input type="hidden" value="{{ $c->id }}" name="colorCode">
                                        <div class="w-full flex justify-between items-center">
                                            <button type="submit" class="w-full"><a href=# class="w-full"><div class="bg-green-700 w-full text-white rounded-b-xl pt-2 pb-2 pl-8 pr-8">Select</div></a><button>
                                        </div>
                                    </form>
                                </div>
                                @endif
                                @endforeach
                            </div>
                            </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </x-admin-layout>

</body>

</html>
