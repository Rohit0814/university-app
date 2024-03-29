<nav x-data="{ open: false }" class=" border-b border-gray-100" style="background:#11235A;">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        {{-- <x-application-logo class="block h-9 w-auto fill-current text-gray-400" /> --}}
                        <h3 class="text-white font-extrabold text-2xl max-[1000px]:text-xl">College Authority</h3>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('home')" :passive="request()->routeIs('faculty.dashboard')">
                        {{ __('Home') }}
                    </x-nav-link>
                    <x-nav-link :href="route('faculty.dashboard')" :active="request()->routeIs('faculty.dashboard')">
                        {{ __('About') }}
                    </x-nav-link>
                    <x-nav-link :href="route('faculty.dashboard')" :active="request()->routeIs('faculty.dashboard')">
                        {{ __('Contact') }}
                    </x-nav-link>
                    <x-nav-link :href="route('faculty.dashboard')" :active="request()->routeIs('faculty.dashboard')">
                        {{ __('Notification') }}
                    </x-nav-link>
                    <x-nav-link :href="route('faculty.dashboard')" :active="request()->routeIs('faculty.dashboard')">
                        {{ __('Blog') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 ">
            <x-responsive-nav-link :href="route('faculty.dashboard')" :active="request()->routeIs('faculty.dashboard')">
                {{ __('Home') }}
            </x-responsive-nav-link><hr>
            <x-responsive-nav-link :href="route('faculty.dashboard')" :active="request()->routeIs('faculty.dashboard')">
                {{ __('About') }}
            </x-responsive-nav-link><hr>
            <x-responsive-nav-link :href="route('faculty.dashboard')" :active="request()->routeIs('faculty.dashboard')">
                {{ __('Contact') }}
            </x-responsive-nav-link><hr>
            <x-responsive-nav-link :href="route('faculty.dashboard')" :active="request()->routeIs('faculty.dashboard')">
                {{ __('Notification') }}
            </x-responsive-nav-link><hr>
            <x-responsive-nav-link :href="route('faculty.dashboard')" :active="request()->routeIs('faculty.dashboard')">
                {{ __('Blog') }}
            </x-responsive-nav-link>
        </div>
    </div>
</nav>
