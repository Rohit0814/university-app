@foreach ($colours as $c )
@if($c->Status == 'true')

<div class="navbar-side  bg-white w-60 shadow-lg transition-all duration-100  max-[1160px]:hidden"
    style="box-shadow: 5px 0px 7px -7px rgba(0,0,0,0.75); background: {{ $c->Heading_background }}">
    <div class="flex justify-center pt-7 pb-7" style="background:{{ $c->Navbar_background }}">
        <h2 class="font-semibold text-xl leading-tight" style="color:{{ $c->Navbar_text }}">
            {{ __('Admin Setting') }}
        </h2>
    </div>
    <div class="text-lg ml-1 mr-1 mb-1 mt-1 pt-2 pb-2 rounded-md pl-1 max-[1360px]:pl-2 hover:bg-blue-200 hover:cursor-pointer" style="background:{{ $c->Navbar_text }}" onclick="window.location='{{ route('admin.setting') }}';">
        <a href="{{ route('admin.setting') }}" class="text-xl pl-5" style="color:{{ $c->Heading_text }};"><i class="fa-solid fa-sliders pr-5"></i> General</a>
    </div>
    <a href="#">
        <div class="text-lg ml-1 mr-1 mb-1 mt-1 pt-2 pb-2 rounded-md pl-1 max-[1360px]:pl-2 hover:bg-blue-200 hover:cursor-pointer" onmouseover="this.style.backgroundColor='{{ $c->Navbar_text }}'"
        onmouseout="this.style.backgroundColor='{{ $c->Heading_background  }}'" onclick="window.location='{{ route('admin.blog.setting') }}';">
            <a href="{{ route('admin.blog.setting') }}" class="text-xl pl-5" style="color:{{ $c->Heading_text }};"><i class="fa-solid fa-blog pr-5"></i> Blog</a>
        </div>
    </a>
    <div class="text-lg ml-1 mr-1 mb-1 mt-1 pt-2 pb-2 rounded-md pl-1 max-[1360px]:pl-2 hover:cursor-pointer" onmouseover="this.style.backgroundColor='{{ $c->Navbar_text }}'"
        onmouseout="this.style.backgroundColor='{{ $c->Heading_background  }}'" onclick="window.location='{{ route('admin.theam.setting') }}';">
        <a href="{{ route('admin.theam.setting') }}" class="text-xl pl-5" style="color:{{ $c->Heading_text }};"><i class="fa-solid fa-thermometer pr-5"></i> Theme</a>
    </div>
    <div class="text-lg ml-1 mr-1 mb-1 mt-1 pt-2 pb-2 rounded-md pl-1 max-[1360px]:pl-2  hover:cursor-pointer" onmouseover="this.style.backgroundColor='{{ $c->Navbar_text }}'"
        onmouseout="this.style.backgroundColor='{{ $c->Heading_background  }}'" onclick="window.location='{{ route('admin.access.setting') }}';">
        <a href="{{ route('admin.access.setting') }}" class="text-xl pl-5" style="color:{{ $c->Heading_text }}"><i class="fa-solid fa-eye pr-5"></i> Accessibility</a>
    </div>
    <div class="text-lg ml-1 mr-1 mb-1 mt-1 pt-2 pb-2 rounded-md pl-1 max-[1360px]:pl-2 hover:cursor-pointer" onmouseover="this.style.backgroundColor='{{ $c->Navbar_text }}'"
        onmouseout="this.style.backgroundColor='{{ $c->Heading_background  }}'" onclick="window.location='{{ route('admin.roles.setting') }}';">
        <a href="{{ route('admin.roles.setting') }}" class="text-xl pl-5" style="color:{{ $c->Heading_text }}"><i class="fa-solid fa-user-pen pr-5"></i> Users & Role</a>
    </div>
    <div class="text-lg ml-1 mr-1 mb-1 mt-1 pt-2 pb-2 rounded-md pl-1 max-[1360px]:pl-2 hover:cursor-pointer" onmouseover="this.style.backgroundColor='{{ $c->Navbar_text }}'"
        onmouseout="this.style.backgroundColor='{{ $c->Heading_background  }}'" onclick="window.location='{{ route('admin.tool.setting') }}';">
        <a href="{{ route('admin.tool.setting') }}" class="text-xl pl-5" style="color:{{ $c->Heading_text }}"><i class="fa-solid fa-screwdriver-wrench pr-5"></i> Tools</a>
    </div>
    <div class="text-lg ml-1 mr-1 mb-1 mt-1 pt-2 pb-2 rounded-md pl-1 max-[1360px]:pl-2 hover:cursor-pointer" onmouseover="this.style.backgroundColor='{{ $c->Navbar_text }}'"
        onmouseout="this.style.backgroundColor='{{ $c->Heading_background  }}'" onclick="window.location='{{ route('admin.domain.setting') }}';">
        <a href="{{ route('admin.domain.setting') }}" class="text-xl pl-5" style="color:{{ $c->Heading_text }}"><i class="fa-solid fa-dove pr-5"></i> Domain</a>
    </div>
</div>



<div class="responsive-bar h-full z-10 hidden absolute transition-all duration-100  max-[1160px]:hidden"
    style="box-shadow: 5px 0px 7px -7px rgba(0,0,0,0.75); background: {{ $c->Heading_background }}">
    <div class="flex justify-center pt-7 pb-7" style="background:{{ $c->Navbar_background }}">
        <h2 class="font-semibold text-xl  leading-tight" style="color:{{ $c->Navbar_text }}">
            {{ __('Admin Setting') }}
        </h2>
    </div>
    <div class="pt-3 pb-3 pl-10 max-[1360px]:pl-2 bg-blue-200 hover:bg-blue-200 hover:cursor-pointer" style="background:{{ $c->Navbar_text }}" onclick="window.location='{{ route('admin.setting') }}';">
        <a href="{{ route('admin.setting') }}" class="text-xl pl-5" style="color:{{ $c->Heading_text }};"><i class="fa-solid fa-sliders pr-5"></i> General</a>
    </div>
    <a href="">
        <div class="pt-3 pb-3 pl-10 max-[1360px]:pl-2 hover:bg-blue-200 hover:cursor-pointer" onmouseover="this.style.backgroundColor='{{ $c->Navbar_text }}'"
            onmouseout="this.style.backgroundColor='{{ $c->Heading_background  }}'" onclick="window.location='{{ route('admin.blog.setting') }}';">
            <a href="{{ route('admin.blog.setting') }}" class="text-xl pl-5" style="color:{{ $c->Heading_text }};"><i class="fa-solid fa-blog pr-5"></i> Blog</a>
        </div>
    </a>
    <div class="pt-3 pb-3 pl-10 max-[1360px]:pl-2 hover:bg-blue-200 hover:cursor-pointer" onmouseover="this.style.backgroundColor='{{ $c->Navbar_text }}'"
        onmouseout="this.style.backgroundColor='{{ $c->Heading_background  }}'" onclick="window.location='{{ route('admin.theam.setting') }}';">
        <a href="{{ route('admin.theam.setting') }}" class="text-xl pl-5" style="color:{{ $c->Heading_text }};"><i class="fa-solid fa-thermometer pr-5"></i> Theme</a>
    </div>
    <div class="pt-3 pb-3 pl-10 max-[1360px]:pl-2 hover:bg-blue-200 hover:cursor-pointer" onmouseover="this.style.backgroundColor='{{ $c->Navbar_text }}'"
        onmouseout="this.style.backgroundColor='{{ $c->Heading_background  }}'" onclick="window.location='{{ route('admin.access.setting') }}';">
        <a href="{{ route('admin.access.setting') }}" class="text-xl pl-5" style="color:{{ $c->Heading_text }};"><i class="fa-solid fa-eye pr-5"></i> Accessibility</a>
    </div>
    <div class="pt-3 pb-3 pl-10 max-[1360px]:pl-2 hover:bg-blue-200 hover:cursor-pointer" onmouseover="this.style.backgroundColor='{{ $c->Navbar_text }}'"
        onmouseout="this.style.backgroundColor='{{ $c->Heading_background  }}'" onclick="window.location='{{ route('admin.roles.setting') }}';">
        <a href="{{ route('admin.roles.setting') }}" class="text-xl pl-5" style="color:{{ $c->Heading_text }};"><i class="fa-solid fa-user-pen pr-5"></i> Users & Role</a>
    </div>
    <div class="pt-3 pb-3 pl-10 max-[1360px]:pl-2 hover:bg-blue-200 hover:cursor-pointer" onmouseover="this.style.backgroundColor='{{ $c->Navbar_text }}'"
        onmouseout="this.style.backgroundColor='{{ $c->Heading_background  }}'" onclick="window.location='{{ route('admin.tool.setting') }}';">
        <a href="{{ route('admin.tool.setting') }}" class="text-xl pl-5" style="color:{{ $c->Heading_text }};"><i class="fa-solid fa-screwdriver-wrench pr-5"></i> Tools</a>
    </div>
    <div class="pt-3 pb-3 pl-10 max-[1360px]:pl-2 hover:bg-blue-200 hover:cursor-pointer" onmouseover="this.style.backgroundColor='{{ $c->Navbar_text }}'"
        onmouseout="this.style.backgroundColor='{{ $c->Heading_background  }}'" onclick="window.location='{{ route('admin.domain.setting') }}';">
        <a href="{{ route('admin.domain.setting') }}" class="text-xl pl-5" style="color:{{ $c->Heading_text }};"><i class="fa-solid fa-dove pr-5"></i> Domain</a>
    </div>
</div>

<script>
    $(document).ready(function (){
    $("#showslide").click(function() {
                var hidden = $('.navbar-side');
                if (hidden.hasClass('visible')) {
                    hidden.show().removeClass('visible');
                $('.side-bar').addClass('w-[84.3%]');
                $('.side-bar').removeClass('w-full');
                } else {
                    hidden.hide().addClass('visible');
                    $('.side-bar').removeClass('w-[84.3%]');
                    $('.side-bar').addClass('w-full');
                }
            });

            $('#responsive-showslide').click(function(event) {
                event.stopPropagation(); // Prevent the click event from propagating to the document
                var hidden = $('.responsive-bar');
                if (hidden.hasClass('visible')) {
                    hidden.show().animate({
                        "width": "18rem"
                    }, "slow").removeClass('visible');
                    $('.responsive-icon').css('color', 'white');
                    $('#responsive-showslide').css('top', '13px');
                    $('.temp').addClass('whole-screen');
                    // $('.temp3').addClass('bg-slate-100');
                    $('.temp').attr('disabled', 'true');
                    $('.t2').addClass('whole-screen2');
                } else {
                    hidden.hide().animate({
                        "width": "0px"
                    }, "slow").addClass('visible');
                    $('.responsive-icon').css('color', 'black');
                    $('#responsive-showslide').css('top', '0px');
                    $('.temp').removeClass('whole-screen');
                    // $('.temp3').removeClass('bg-slate-100');
                    $('.temp').attr('disabled', 'false');
                    $('.t2').removeClass('whole-screen2');
                }
            });
            $(document).click(function(event) {
                if (!$(event.target).closest('.responsive-bar').length && !$(event.target).is(
                    '#responsive-showslide')) {
                    $('.responsive-bar').hide().animate({
                        "width": "0px"
                    }, "slow").addClass('visible');
                    $('.responsive-icon').css('color', 'black');
                    $('#responsive-showslide').css('top', '0px');
                    $('.temp').removeClass('whole-screen');
                    $('.temp').attr('disabled', 'false');
                    $('.t2').removeClass('whole-screen2');
                }
            });
        });
</script>

@endif
@endforeach

