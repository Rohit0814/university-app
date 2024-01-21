<div class=" sm:flex sm:items-center sm:ms-6">
    <x-dropdown align="right" width="48">
        <x-slot name="trigger">
            <button class="inline-flex  items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-50 hover:text-red-500 hover:font-extrabold focus:outline-none transition ease-in-out duration-150">
                    <h4 class="text-white pr-5 font-bold">{{ Auth::guard($guard)->user()->$guardVar }}</h4>
                    <img src="{{ $imagePath }}" class="w-10 h-10 flex rounded-full">

                    <div class="ms-1">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </button>
            </x-slot>

            <x-slot name="content">
                <!-- Authentication -->
                <form method="POST" action="{{ route($guard.'.logout') }}">
                    @csrf

                    <x-dropdown-link :href="route($guard.'.logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </x-slot>
        </x-dropdown>
    </div>