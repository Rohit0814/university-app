<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
    <style>
        .whole-screen{
            background: rgba(0, 0, 0, 0.386);
        }
        .whole-screen2 button,.whole-screen2 a, .whole-screen2 .lable{
            opacity: 0.5;
            cursor: not-allowed;
            pointer-events: none;
        }
        .ins-name{
            pointer-events: none;
            opacity: 0.75;
        }
        .not-ins-name{
            pointer-events: none;
            opacity: 0.75;
        }
    </style>
</head>
<body >
    <x-admin-layout>

        {{-- <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Admin Setting') }}
            </h2>
        </x-slot> --}}

        <div class="flex absolute w-full temp">

        <div class="navbar-side transition-all duration-100 w-1/5 bg-white max-[1160px]:hidden" style="box-shadow: 5px 0px 7px -7px rgba(0,0,0,0.75);">
            <div class="flex justify-center pt-7 pb-7" style="background:#11235A;">
            <h2 class="font-semibold text-xl text-white leading-tight">
                {{ __('Admin Setting') }}
            </h2>
            </div>
            <div class="pt-3 pb-3 pl-10 max-[1360px]:pl-2 bg-blue-200 hover:bg-blue-200 hover:cursor-pointer">
                <a href="#" class="text-xl pl-5"><i class="fa-solid fa-sliders pr-5"></i> General</a>
            </div>
            <a href="">
            <div class="pt-3 pb-3 pl-10 max-[1360px]:pl-2 hover:bg-blue-200 hover:cursor-pointer">
                <a href="#" class="text-xl pl-5"><i class="fa-solid fa-blog pr-5"></i> Blog</a>
            </div>
            </a>
            <div class="pt-3 pb-3 pl-10 max-[1360px]:pl-2 hover:bg-blue-200 hover:cursor-pointer">
                <a href="#" class="text-xl pl-5"><i class="fa-solid fa-thermometer pr-5"></i> Theam</a>
            </div>
            <div class="pt-3 pb-3 pl-10 max-[1360px]:pl-2 hover:bg-blue-200 hover:cursor-pointer">
                <a href="#" class="text-xl pl-5"><i class="fa-solid fa-eye pr-5"></i> Accessibility</a>
            </div>
            <div class="pt-3 pb-3 pl-10 max-[1360px]:pl-2 hover:bg-blue-200 hover:cursor-pointer">
                <a href="#" class="text-xl pl-5"><i class="fa-solid fa-user-pen pr-5"></i> Users & Role</a>
            </div>
            <div class="pt-3 pb-3 pl-10 max-[1360px]:pl-2 hover:bg-blue-200 hover:cursor-pointer">
                <a href="#" class="text-xl pl-5"><i class="fa-solid fa-screwdriver-wrench pr-5"></i> Tools</a>
            </div>
            <div class="pt-3 pb-3 pl-10 max-[1360px]:pl-2 hover:bg-blue-200 hover:cursor-pointer">
                <a href="#" class="text-xl pl-5"><i class="fa-solid fa-dove pr-5"></i> Domain</a>
            </div>
        </div>



        <div class="responsive-bar h-full z-10 hidden absolute transition-all duration-100  bg-white max-[1160px]:hidden" style="box-shadow: 5px 0px 7px -7px rgba(0,0,0,0.75);">
            <div class="flex justify-center pt-7 pb-7" style="background:#11235A;">
            <h2 class="font-semibold text-xl text-white leading-tight">
                {{ __('Admin Setting') }}
            </h2>
            </div>
            <div class="pt-3 pb-3 pl-10 max-[1360px]:pl-2 bg-blue-200 hover:bg-blue-200 hover:cursor-pointer">
                <a href="#" class="text-xl pl-5"><i class="fa-solid fa-sliders pr-5"></i> General</a>
            </div>
            <a href="">
            <div class="pt-3 pb-3 pl-10 max-[1360px]:pl-2 hover:bg-blue-200 hover:cursor-pointer">
                <a href="#" class="text-xl pl-5"><i class="fa-solid fa-blog pr-5"></i> Blog</a>
            </div>
            </a>
            <div class="pt-3 pb-3 pl-10 max-[1360px]:pl-2 hover:bg-blue-200 hover:cursor-pointer">
                <a href="#" class="text-xl pl-5"><i class="fa-solid fa-thermometer pr-5"></i> Theam</a>
            </div>
            <div class="pt-3 pb-3 pl-10 max-[1360px]:pl-2 hover:bg-blue-200 hover:cursor-pointer">
                <a href="#" class="text-xl pl-5"><i class="fa-solid fa-eye pr-5"></i> Accessibility</a>
            </div>
            <div class="pt-3 pb-3 pl-10 max-[1360px]:pl-2 hover:bg-blue-200 hover:cursor-pointer">
                <a href="#" class="text-xl pl-5"><i class="fa-solid fa-user-pen pr-5"></i> Users & Role</a>
            </div>
            <div class="pt-3 pb-3 pl-10 max-[1360px]:pl-2 hover:bg-blue-200 hover:cursor-pointer">
                <a href="#" class="text-xl pl-5"><i class="fa-solid fa-screwdriver-wrench pr-5"></i> Tools</a>
            </div>
            <div class="pt-3 pb-3 pl-10 max-[1360px]:pl-2 hover:bg-blue-200 hover:cursor-pointer">
                <a href="#" class="text-xl pl-5"><i class="fa-solid fa-dove pr-5"></i> Domain</a>
            </div>
        </div>

        <div>

        </div>

        <div class="w-full t2">
            <div class="w-full pb-10  bg-slate-400">
                <div class="ml-7 pt-3">
                    <button id="showslide" class="max-[1160px]:hidden">
                        <i class="fa-solid fa-bars text-2xl"></i>
                    </button>

                    <button id="responsive-showslide" class="relative min-[1160px]:hidden">
                        <i class="responsive-icon fa-solid fa-bars text-2xl"></i>
                    </button>
                </div>
                <div class="flex pt-8 items-center w-full justify-between max-[1340px]:flex-col max-[1340px]:items-center">
                    <div class="lable ml-10 max-[736px]:ml-1 border-l-4 flex justify-center max-[673px]:text-sm items-center border-blue-800 pt-2 pb-2 pl-3 pr-3 bg-white">
                        <i class="fa-solid fa-info flex justify-center items-center bg-blue-800 text-white rounded-full  w-6 h-6"></i>
                        <span class="pl-5 font-extrabold">Design Setting - </span><span>&nbsp;Update Setting related to your design elements</span>
                    </div>
                    <div class="pr-10 flex flex-wrap max-[1340px]:mt-5 max-[1340px]:w-full max-[1340px]:justify-center max-[1340px]:pr-0">
                        <button class="pt-1 pb-1 mt-5 mr-6 pl-12 max-[1340px]:mr-2 pr-12 bg-white"><i class="fa-solid fa-arrow-rotate-left "></i>&nbsp;Backup</button>
                        <button class="pt-1 pb-1 mr-6 mt-5 pl-12 pr-12 max-[1340px]:mr-0 bg-slate-800 text-white"><i class="fa-solid fa-arrows-rotate"></i>&nbsp;Restore Backup</button>
                    </div>
                </div>
            </div>

            <div class=" flex w-full h-12">
                <a href=#>
                <div class="flex justify-center items-center border-t-4 border-blue-800 w-fit pl-10 pr-10 ml-5 h-full bg-white cursor-pointer">
                    <span>General</span>
                </div>
                </a>
                <a href=#>
                <div class="flex justify-center items-center bg-slate-300 border-4 border-slate-200 w-fit pl-10 pr-10 ml-5 h-full cursor-pointer">
                    <span>Colour Sets</span>   
                </div>
                </a>
            </div>

            <div class="bg-slate-100 temp3 pb-10">
                <div class="flex justify-between ml-28 mr-28 mt-7">
                    <div>
                    <span class="text-2xl font-bold">General Setting</span>
                    </div>
                    <div>
                        <a href=# class="editing"><i class="fa-solid fa-pen-to-square text-2xl"></i><span class="text-xl">&nbsp;Edit</span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href=# class="save hidden text-green-600"><i class="fa-solid  text-green-600 fa-floppy-disk text-2xl"></i><span class="text-xl">&nbsp;Save</span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href=# class="cancel hidden text-red-600"><i class="fa-solid fa-xmark text-red-600 text-2xl"></i><span class="text-xl">&nbsp;Cancel</span></a>
                    </div>
                </div>
                <div class="">
                <div class="flex justify-between items-center mt-7 ml-36 mr-80">
                    <label class=" text-xl">Institution Name</label>
                    <input type="text" value="University Authority" class="w-96 remove-name disabled:opacity-75 ins-name">
                </div>

                <div class="flex justify-between items-center mt-7 ml-36 mr-80">
                    <label class="text-xl">Tag Line</label>
                    <input type="text" value="Education is right of every child" class="w-96 remove-name disabled:opacity-75 ins-name">
                </div>

                <div class="flex justify-between items-center mt-7 ml-36 mr-80">
                    <label class=" text-xl">URL</label>
                    <input type="text" value="127.0.0.1:8000" class="w-96 remove-name disabled:opacity-75 ins-name">
                </div>

                <div class="flex justify-between items-center mt-7 ml-36 mr-80">
                    <label class=" text-xl">Email</label>
                    <input type="text" value="{{ Auth::guard('admin')->user()->email }}" class="w-96 remove-name disabled:opacity-75 not-ins-name">
                </div>
                <div class="flex justify-between items-center mt-7 ml-36 mr-80">
                    <label class=" text-xl">password</label>
                    <input type="password" value="{{ Auth::guard('admin')->user()->password }}" class="w-96 remove-name disabled:opacity-75 ins-name">
                </div>

                <div class="flex justify-between items-center mt-7 ml-36 mr-80">
                    <label class=" text-xl">Time Zone</label>
                    {{-- <input type="text" value="UTC+0" class="w-96 remove-name disabled:opacity-75 ins-name"> --}}
                    <select class="w-96 remove-name disabled:opacity-75 ins-name">
                        <option value="" selected>UTC+0</option>
                    </select>
                </div>
                <div class="flex justify-between items-center mt-7 ml-36 mr-80">
                    <label class=" text-xl">Address</label>
                    {{-- <input type="password" value="{{ Auth::guard('admin')->user()->password }}" class="w-96 remove-name disabled:opacity-75 ins-name"> --}}
                    <textarea class="w-96 remove-name disabled:opacity-75 ins-name">Namkum Ranch-834010</textarea>
                </div>
                </div>
            </div>
        </div>
        </div>


        <script>
            $("#showslide").click(function(){
        var hidden = $('.navbar-side');
        if (hidden.hasClass('visible')){
            hidden.show().animate({"width":"20%"}, "slow").removeClass('visible');
        } else {
            hidden.hide().animate({"width":"0px"}, "slow").addClass('visible');
        }
    });

    $('#responsive-showslide').click(function(event){
        event.stopPropagation(); // Prevent the click event from propagating to the document
        var hidden = $('.responsive-bar');
        if (hidden.hasClass('visible')){
            hidden.show().animate({"width":"18rem"}, "slow").removeClass('visible');
            $('.responsive-icon').css('color', 'white');
            $('#responsive-showslide').css('top', '13px');
            $('.temp').addClass('whole-screen');
            // $('.temp3').addClass('bg-slate-100');
            $('.temp').attr('disabled','true');
            $('.t2').addClass('whole-screen2');
        } else {
            hidden.hide().animate({"width":"0px"}, "slow").addClass('visible');
            $('.responsive-icon').css('color', 'black');
            $('#responsive-showslide').css('top', '0px');
            $('.temp').removeClass('whole-screen');
            // $('.temp3').removeClass('bg-slate-100');
            $('.temp').attr('disabled','false');
            $('.t2').removeClass('whole-screen2');
        }
    });

    // Hide responsive-bar when clicking outside it
    $(document).click(function(event) {
        if (!$(event.target).closest('.responsive-bar').length && !$(event.target).is('#responsive-showslide')) {
            $('.responsive-bar').hide().animate({"width":"0px"}, "slow").addClass('visible');
            $('.responsive-icon').css('color', 'black');
            $('#responsive-showslide').css('top', '0px');
            $('.temp').removeClass('whole-screen');
            $('.temp').attr('disabled','false');
            $('.t2').removeClass('whole-screen2');
        }
    });


    $('.editing').click(function(){
        $('.remove-name').removeClass('ins-name');
        $('.save').removeClass('hidden');
        $('.cancel').removeClass('hidden');
        $('.editing').addClass('hidden');
    });

    $('.cancel').click(function(){
        $('.remove-name').addClass('ins-name');
        $('.save').addClass('hidden');
        $('.cancel').addClass('hidden');
        $('.editing').removeClass('hidden');
    });
            
        </script>

    </x-admin-layout>
</body>
</html>