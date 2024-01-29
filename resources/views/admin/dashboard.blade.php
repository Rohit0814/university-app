<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
<body>
<x-admin-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="flex">
        @foreach ($colours as $c )
        @if($c->Status == 'true')
    <div class="bg-white w-60 h-screen shadow" style="background:{{ $c->Heading_background }}">
        <div class="flex w-full items-center selection:bg-none">
            <span class="text-2xl w-full text-center mt-10 mb-5 font-extrabold" style="color:{{ $c->Navbar_text }}">Dashboard</span>
        </div>

        <div class="flex justify-center selection:bg-none">
            <ul class="ml-2 mr-2 mb-2 w-full border-b-2">
                <a href="#"><li class="text-lg mt-1 mb-1 pt-2 pb-2 rounded-md pl-4  w-full" style="background:{{ $c->Navbar_text }}; color:{{ $c->Heading_text }};"><i class="fa-solid fa-house"></i> Master</li></a>
                <a href="#"><li class="text-lg mt-1 mb-1 pt-2 pb-2 rounded-md pl-4 w-full" style="color:{{ $c->Heading_text }};" onmouseover="this.style.backgroundColor='{{ $c->Navbar_text }}'"
                    onmouseout="this.style.backgroundColor='{{ $c->Heading_background  }}'"><i class="fa-solid fa-chalkboard-user"></i> Lecturer</li></a>
                <a href="#"><li class="text-lg mt-1 mb-1 pt-2 pb-2 rounded-md pl-4 w-full" style="color:{{ $c->Heading_text }};" onmouseover="this.style.backgroundColor='{{ $c->Navbar_text }}'"
                    onmouseout="this.style.backgroundColor='{{ $c->Heading_background  }}'"><i class="fa-solid fa-graduation-cap"></i> Student</li></a>
                <a href="#"><li class="text-lg mt-1 mb-1 pt-2 pb-2 rounded-md pl-4 w-full" style="color:{{ $c->Heading_text }};" onmouseover="this.style.backgroundColor='{{ $c->Navbar_text }}'"
                    onmouseout="this.style.backgroundColor='{{ $c->Heading_background  }}'"><i class="fa-solid fa-school"></i> Academic</li></a>
                <a href="#"><li class="text-lg mt-1 mb-1 pt-2 pb-2 rounded-md pl-4 w-full" style="color:{{ $c->Heading_text }};" onmouseover="this.style.backgroundColor='{{ $c->Navbar_text }}'"
                    onmouseout="this.style.backgroundColor='{{ $c->Heading_background  }}'"><i class="fa-solid fa-check-to-slot"></i> Presence</li></a>
            </ul>
        </div>

        <div class="flex justify-center selection:bg-none">
            <ul class="ml-2 mr-2 mb-2 w-full">
                <a href="#"><li class="text-lg mt-1 mb-1 pt-2 pb-2 rounded-md pl-4 w-full" style="color:{{ $c->Heading_text }};" onmouseover="this.style.backgroundColor='{{ $c->Navbar_text }}'"
                    onmouseout="this.style.backgroundColor='{{ $c->Heading_background  }}'"><i class="fa-regular fa-circle-question"></i> Feedback</li></a>
                <a href="#"><li class="text-lg mt-1 mb-1 pt-2 pb-2 rounded-md pl-4 w-full" style="color:{{ $c->Heading_text }};" onmouseover="this.style.backgroundColor='{{ $c->Navbar_text }}'"
                    onmouseout="this.style.backgroundColor='{{ $c->Heading_background  }}'"><i class="fa-solid fa-circle-info"></i> Helpdesk</li></a>
            </ul>
        </div>
    </div>
    @endif
    @endforeach

    <div class=" w-[calc(83.9%)]">
        @foreach ($colours as $c )
        @if($c->Status == 'true')
    <div class="w-full flex justify-between h-fit ml-1 shadow bg-white " style="background:{{ $c->Heading_background }}">
        <div class="flex items-center">
            <span class="mt-4 mb-4 ml-8 text-xl selection:bg-none font-extrabold  pl-2" style="color:{{ $c->Heading_text }};">Master</span>
        </div>
        <div class="mt-2 mb-2 mr-5 text-2xl selection:bg-none font-extrabold  pr-2">
            <span><i class="fa-solid fa-magnifying-glass text-xs relative left-2" style="color:{{ $c->Heading_text }};"></i></span><input type="text" placeholder="search" class=" text-lg w-72 pl-5 placeholder:text-gray-100 bg-transparent border-none space tracking-wider focus:ring-0 focus:ring-offset-0 focus:border-none focus:outline-none" style="color:{{ $c->Heading_text }};">
        </div>
        @endif
        @endforeach
    </div>

    
    <div>
        <div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div>

        </div>
    </div>
    
    </div>

    </div>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- {{ __("You're logged in!") }} --}}
                    {{-- <h1>Hello Admin</h1>
                </div>
            </div>
        </div>
    </div> --}}
</x-admin-layout>
</body>
</html>
