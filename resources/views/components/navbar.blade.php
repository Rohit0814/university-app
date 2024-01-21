<div class="w-[99.99%] flex justify-between pl-40 pr-40 items-center max-[711px]:flex-col max-[711px]:pl-10 max-[711px]:pr-10 max-[600px]:justify-center sticky top-0" style="background:#11235A">
    <div class="pt-3 pb-3 max-[711px]:w-full max-[711px]:text-center">
        <a href="/" class="pt-3 pb-3"><span class="text-white w-full text-3xl min-[823px]:text-left font-bold max-[405px]:text-xl cursor-pointer" style="font-family: 'Roboto', sans-serif;">College Authority</span></a>
    </div>
    <div class="flex items-center cursor-pointer max-[711px]:pt-3 max-[711px]:pb-5">
        @if(Route::has('admin.dashboard'))
            @auth('admin')
                <x-auth-navabar guard="admin" guardVar="name" imagePath="https://cdn-icons-png.flaticon.com/512/149/149071.png"/>
        @elseif (Route::has('faculty.dashboard'))
            @auth('faculty')
                <x-auth-navabar guard="faculty" guardVar="Name" imagePath="https://cdn-icons-png.flaticon.com/512/149/149071.png" />
        @elseif (Route::has('student.dashboard'))
            @auth('student')
                <x-auth-navabar guard="student" guardVar="Name" imagePath="https://cdn-icons-png.flaticon.com/512/149/149071.png"/>
            @endauth
            @endauth
            @endauth
        @endif
    </div>
</div>