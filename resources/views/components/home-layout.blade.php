<div class="flex justify-center flex-col items-center pt-5 pb-5">
    <h1 class="text-3xl font-bold">Welcome to University</h1>
    <p class="text-red-700 font-semibold">Our Vision to make entire System Online</p>
</div>


<div class="flex w-full justify-around flex-wrap">
    @if (Route::has('admin.dashboard'))
        @auth('admin')
        <x-login-card-component designation="Setting" description="Manage Setting" fontIcon="fa-solid fa-screwdriver-wrench text-yellow-600" userType="setting" extendClass="border-yellow-600" authPropert="Explore" authLogo="fa-solid fa-gear" />
        <x-login-card-component designation="Admin" description="Welcome {{ Auth::guard('admin')->user()->name }}" fontIcon="fa-solid fa-user-tie text-yellow-600" userType="admin" extendClass="border-yellow-600" authPropert="Dashboard" authLogo="fa-solid fa-user-tie" />
        <x-login-card-component designation="communication" description="Chatting" fontIcon="fa-solid fa-tower-broadcast text-yellow-600" userType="communication" extendClass="border-yellow-600" authPropert="Chat" authLogo="fa-regular fa-comments" />
    @elseif(Route::has('faculty.dashboard'))
            @auth('faculty')
            <x-login-card-component designation="Setting" description="Manage Setting" fontIcon="fa-solid fa-screwdriver-wrench text-blue-600" userType="faculty" extendClass="border-blue-600" authPropert="Explore" authLogo="fa-solid fa-gear" />
            <x-login-card-component designation="Faculty" description="Welcome {{ Auth::guard('faculty')->user()->Name  }}" fontIcon="fa-solid fa-chalkboard-user text-blue-600" userType="faculty" extendClass="border-blue-600" authPropert="Dashboard" authLogo="fa-solid fa-person-chalkboard" />
            <x-login-card-component designation="Communication" description="Chatting" fontIcon="fa-solid fa-tower-broadcast text-blue-600" userType="faculty" extendClass="border-blue-600" authPropert="chat" authLogo="fa-regular fa-comments" />
    @elseif(Route::has('student.dashboard'))
            @auth('student')
            <x-login-card-component designation="Setting" description="Manage Setting" fontIcon="fa-solid fa-screwdriver-wrench text-red-600" userType="student" extendClass="border-green-700" authPropert="Explore" authLogo="fa-solid fa-gear" />
            <x-login-card-component designation="Student" description="{{ Auth::guard('student')->user()->Name }}" fontIcon="fa-solid fa-graduation-cap text-red-600" userType="student" extendClass="border-green-700" authPropert="Dashboard" authLogo="fa-solid fa-graduation-cap" />
            <x-login-card-component designation="Communication" description="Chatting" fontIcon="fa-solid fa-tower-broadcast text-red-600" userType="student" extendClass="border-green-700" authPropert="chat" authLogo="fa-regular fa-comments" />
    @else
        <x-login-card-component designation="Student" description="Only Register Student can login" fontIcon="fa-solid fa-graduation-cap text-red-600" userType="student" extendClass="border-green-700" authPropert="Login" authLogo="fa-solid fa-right-to-bracket" />
        <x-login-card-component designation="Faculty" description="Only for Acadamic Personality" fontIcon="fa-solid fa-chalkboard-user text-blue-600" userType="faculty" extendClass="border-blue-600" authPropert="Login" authLogo="fa-solid fa-right-to-bracket" />
        <x-login-card-component designation="Admin" description="Only Adminstrative Use" fontIcon="fa-solid fa-user-tie text-yellow-600" userType="admin" extendClass="border-yellow-600" authPropert="Login" authLogo="fa-solid fa-right-to-bracket"/>
        @endauth
        @endauth
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