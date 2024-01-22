<div class=" rounded-lg items-center bg-white flex min-[823px]:w-[25%] border-t-4 {{ $extendClass }} w-11/12 mt-6 min-[445px]:w-4/6" style="box-shadow: 1px -1px 15px -3px rgba(0,0,0,0.75);">
    <div class="items-center pl-7">
        <i class="{{ $fontIcon }} " style="font-size: 5rem"></i>
    </div>
    <div class="p-5">
        <h3 class=" text-xl font-bold break-all">{{ $designation }}</h3>
        <span>{{ $description }}</span><br><br>
            <a href="
            @if($userType=='admin')
            {{ route('admin.login') }}
            @elseif ($userType=='faculty')
            {{ route('faculty.login') }}
            @elseif($userType=='student')
            {{ route('student.login') }}
            @elseif ($userType=='adminSetting')
            {{ route('admin.setting') }}
            @endif
            " class="font-semibold text-black hover:text-blue-800 hover:font-extrabold">{{ $authPropert }}&nbsp;<i class="{{ $authLogo }}"></i></a>
    </div>
</div>