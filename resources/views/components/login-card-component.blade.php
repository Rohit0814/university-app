<div class=" rounded-lg items-center flex min-[823px]:w-[25%] border-t-4 {{ $extendClass }} w-11/12 mt-6 min-[445px]:w-4/6" style="box-shadow: 1px -1px 15px -3px rgba(0,0,0,0.75);">
    <div class="items-center pl-7">
        <i class="{{ $fontIcon }} " style="font-size: 5rem"></i>
    </div>
    <div class="p-5">
        <h3 class=" text-xl font-bold">{{ $designation }}</h3>
        <span>{{ $description }}</span><br><br>
        @if(Route::has('admin.login'))
        @auth('admin')
            <a href={{ url('/admin/dashboard') }} class="font-semibold text-black hover:text-blue-800 hover:font-extrabold">Admin Dashboard</a>
        @else
            <a href="
            @if($userType=='admin')
            {{ route('admin.login') }}
            @endif
            " class="font-semibold text-black hover:text-blue-800 hover:font-extrabold">Login&nbsp;<i class="fa-solid fa-right-to-bracket"></i></a>
            @endauth
            @endif
    </div>
</div>