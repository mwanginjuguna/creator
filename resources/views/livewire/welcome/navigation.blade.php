<div x-data="{ open: false }" class="sm:sticky top-0 px-6 py-1 z-10 bg-zinc-100 dark:bg-zinc-900 dark:text-zinc-300 bg-opacity-95 w-full border-b border-gray-200 dark:border-gray-800">
    <div class="max-w-6xl xl:max-w-7xl mx-auto flex flex-row justify-between">
        <div class="flex">
            <!-- Logo -->
            <div class="shrink-0 flex items-center">
                <a href="{{ route('home') }}" wire:navigate>
                    <x-application-logo class="block h-9 w-auto place-self-center rounded-lg fill-current" />
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex items-center">
                <x-nav-link :href="route('home')" :active="request()->routeIs('home')" wire:navigate>
                    {{ __('Home') }}
                </x-nav-link>
                <x-nav-link :href="route('services')" :active="request()->routeIs('services')" wire:navigate>
                    {{ __('Services') }}
                </x-nav-link>
                <x-nav-link :href="route('blog')" :active="request()->routeIs('blog')" wire:navigate>
                    {{ __('Blog') }}
                </x-nav-link>
                <x-nav-link :href="route('about')" :active="request()->routeIs('about')" wire:navigate>
                    {{ __('About') }}
                </x-nav-link>
                <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')" wire:navigate>
                    {{ __('Contact') }}
                </x-nav-link>
            </div>
        </div>

        <div class="flex gap-3">
            <!-- Darkmode Toggle -->
            <x-utils.dark-mode-toggle />

            <!--open hamburger-->
            <div class="flex sm:hidden">
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
        <!-- Responsive Menu Options -->
        <div class="pt-4 pb-1">

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('home')" wire:navigate>
                    {{ __('Home') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link :href="route('shop')" wire:navigate>
                    {{ __('Shop') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link :href="route('blog')" wire:navigate>
                    {{ __('Blog') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link :href="route('about')" wire:navigate>
                    {{ __('About') }}
                </x-responsive-nav-link>
            </div>
        </div>
    </div>
</div>
