<nav
    data-controller="responsive-nav"
    data-action="
        turbo:before-cache@window->responsive-nav#close
        click@window->responsive-nav#closeWhenClickedOutside
    "
    class="group bg-white border-b border-gray-100"
>
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('translations.show') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('translations.show')" :active="request()->routeIs('translations.show')">
                        {{ __('Puzzle') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('translations.index')" :active="request()->routeIs('translations.index')">
                        {{ __('Translations') }}
                    </x-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('translations.create')" :active="request()->routeIs('translations.create')">
                        {{ __('Create Translation') }}
                    </x-nav-link>
                </div>
            </div>

            <div class="flex items-center space-x-2">
                <!-- Settings Dropdown -->
                <a href="{{ route('profile.show') }}" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                    <div>{{ Auth::user()->name }}</div>
                </a>

                <!-- Hamburger -->
                <div class="-me-2 flex items-center sm:hidden">
                    <button data-action="responsive-nav#toggle" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path class="inline-flex group-data-[responsive-nav-open-value=true]:hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path class="hidden group-data-[responsive-nav-open-value=true]:inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div class="hidden group-data-[responsive-nav-open-value=true]:block sm:group-data-[responsive-nav-open-value=true]:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('translations.show')" :active="request()->routeIs('translations.show')">
                {{ __('Translations Puzzle') }}
            </x-responsive-nav-link>
        </div>
    </div>
</nav>
