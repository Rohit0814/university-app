<x-faculty-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    {{-- <h4>Welcome {{ $content }}</h4> --}}
    <div class="flex justify-center mb-2 mt-2 max-[320px]:text-xl text-3xl font-semibold selection:bg-none capitalize">
    Welcome Faculty
    </div>
    <div class=" w-full h-[0.1rem] bg-blue-600 mb-4"></div>

    <form method="POST" action="{{ route('faculty.login_submit') }}">
        @csrf


        @if ($errors->any())
        @foreach ($errors->all() as $error)
            <span class="text-red-800 font-bold text-center">{{ $error }}</span><br>
            
        @endforeach
        @endif
        @if(Session::get('error'))
        <span class="text-red-800 font-bold text-center">{{ Session::get('error') }}</span><br>
        @endif

        @if(Session::get('success'))
        <span class="text-green-800 font-bold text-center">{{ Session::get('success') }}</span><br>
        @endif
        



        <!-- Email Address -->
        <div>
        <div>
            <x-input-label for="email" :value="__('Email')" />
            {{-- <x-input-label for="email" :value={{ $data }} /> --}}
            <x-text-input id="email" class="block mt-1 w-full pl-12 tracking-wider" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div class="relative bottom-[2.1rem] left-3 flex w-fit"><i class="fa-solid fa-envelope text-xl"></i></div>
        </div>

        <!-- Password -->
        <div>
        <div>
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full pl-12 tracking-wider"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <div class="relative bottom-[2.1rem] left-3 flex w-fit"><i class="fa-solid fa-lock text-xl"></i></div>
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('admin.password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>


</x-faculty-guest-layout>
