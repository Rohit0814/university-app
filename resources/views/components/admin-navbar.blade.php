<div class="navbar-side transition-all duration-100 w-1/5 bg-white max-[1160px]:hidden"
    style="box-shadow: 5px 0px 7px -7px rgba(0,0,0,0.75);">
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



<div class="responsive-bar h-full z-10 hidden absolute transition-all duration-100  bg-white max-[1160px]:hidden"
    style="box-shadow: 5px 0px 7px -7px rgba(0,0,0,0.75);">
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

<script>
    $(document).ready(function (){
    $("#showslide").click(function() {
                var hidden = $('.navbar-side');
                if (hidden.hasClass('visible')) {
                    hidden.show().animate({
                        "width": "20%"
                    }, "slow").removeClass('visible');
                } else {
                    hidden.hide().animate({
                        "width": "0px"
                    }, "slow").addClass('visible');
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
