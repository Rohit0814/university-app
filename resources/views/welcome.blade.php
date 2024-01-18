<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    </head>
    <body class="h-screen">
        <x-navbar/>

        <div class="flex justify-center flex-col items-center pt-5 pb-5">
            <h1 class="text-3xl font-bold">Welcome to University</h1>
            <p class="text-red-700 font-semibold">Our Vision to make entire System Online</p>
        </div>

        
        <div class="flex w-full justify-around flex-wrap">
            @if(Route::has('admin.login'))
            @auth('admin')
            <x-login-card-component designation="Admin" description="Only Adminstrative Use" fontIcon="fa-solid fa-user-tie text-yellow-600" userType="admin" extendClass="border-yellow-600"/>
            @else
            <x-login-card-component designation="Student" description="Only Register Student can login" fontIcon="fa-solid fa-graduation-cap text-red-600" userType="student" extendClass="border-red-600"/>
            <x-login-card-component designation="Teacher" description="Only for Acadamic Personality" fontIcon="fa-solid fa-chalkboard-user text-blue-600" userType="teacher" extendClass="border-blue-600"/>
            <x-login-card-component designation="Admin" description="Only Adminstrative Use" fontIcon="fa-solid fa-user-tie text-yellow-600" userType="admin" extendClass="border-yellow-600"/>
            @endauth
            @endif
        </div>
        <br><br>

        <div class=" max-[445px]:ml-2 max-[445px]:mr-1 flex justify-around flex-wrap ml-10 mr-10">
            <div class=" min-[1086px]:w-[48%] min-[825px]:w-[80%] w-[100%]  mb-7 mr-2 border-5 " >
                <div class="rounded-t-xl rounded-b-md" style="box-shadow: -1px -1px 13px -4px rgba(0,0,0,0.75);">
                    <h1 class=" border-t-[3px] rounded-t-xl border-red-800 text-2xl font-extrabold bg-slate-50 pt-2 pb-2 pl-6" style="font-family: 'Roboto', sans-serif;">Spotlight</h1>
                    <ul class="pl-12 pr-12 pt-3 pb-3  selection:bg-blue-950 selection:text-white" >
                        @for($i=0;$i<5;$i++)
                        <li class="pb-3">Welcome to University</li>
                    @endfor
                    </ul>
                </div>
            </div>
            <div class=" rounded-t-xl rounded-b-md min-[1086px]:w-[48%] min-[825px]:w-[80%] w-[100%] mb-16 mr-2 border-5" style="box-shadow: -1px -1px 13px -4px rgba(0,0,0,0.75);">
                <h1 class="border-t-[3px] rounded-t-xl border-red-800 text-2xl font-extrabold bg-slate-50 pt-2 pb-2 pl-6" style="font-family: 'Roboto', sans-serif;">Admission open</h1>
                <ul class="pl-12 pr-12 pt-3 pb-3 selection:bg-blue-950 selection:text-white">
                    @for($i=0;$i<4;$i++)
                        <li class="pb-3">Welcome to University</li>
                    @endfor
                </ul>
            </div>
        </div>
        
        <div class="w-full h-10 fixed bottom-0 text-white flex justify-center items-center" style="background:#11235A">
            <h1 >Copyright © 2012 - 2024 University®. All rights reserved.</h1>
        </div>
    </body>
</html>
