<div id="cta-button-sidebar"
     {{ $attributes }}
     aria-label="Sidebar">
    <div class="min-h-screen px-3 py-8 overflow-y-auto bg-accent/20 dark:bg-accent/40 text-slate-900 dark:text-slate-100">
        <div class="mt-4 py-4">
            <a href="/" class="flex-1 items-center ps-2.5 mb-6" wire:navigate>
                <x-application-logo />
                <span class="pl-3 self-center font-semibold text-amber-500 dark:text-amber-500">{{ config('app.name') }}</span>
            </a>
        </div>

        <!-- main pages -->
        <div class="mt-6 lg:mt-8 mb-4 p-2 space-y-3 font-medium">
            <x-side-link
                :href="route('dashboard')"
                :active="request()->routeIs('dashboard')"
                wire:navigate
            >
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>

                <span class="">{{ __('Dashboard') }}</span>
            </x-side-link>

        </div>

        <!-- Blog tools -->
        <div
            x-data="{expanded: false}"
            class="mt-6 space-y-1 group"
        >
            <button
                x-on:click="expanded = ! expanded"
                class="w-full flex justify-between items-center px-2.5 py-2 text-sm rounded-lg text-slate-600 dark:text-slate-400 group-hover:text-emerald-500 dark:group-hover:text-emerald-600 group-hover:bg-secondary dark:group-hover:bg-secondary/30 transition-all ease-in-out duration-500"
            >
                <span class="inline-flex items-center"><svg class="shrink-0 size-4 me-2.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.375 2.625a1 1 0 0 1 3 3l-9.013 9.014a2 2 0 0 1-.853.505l-2.873.84a.5.5 0 0 1-.62-.62l.84-2.873a2 2 0 0 1 .506-.852z"/></svg> {{__('Blog')}}</span>

                <svg x-show="expanded" class="w-5 h-5 ms-2.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
                <svg x-show="!expanded" class="w-5 h-5 ms-2.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
            </button>

            <div x-show="expanded" class="w-full flex flex-col p-2 space-y-1">
                <x-side-link :href="route('admin-posts')" :active="request()->routeIs('admin-posts')" wire:navigate>
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m2 7 4.41-4.41A2 2 0 0 1 7.83 2h8.34a2 2 0 0 1 1.42.59L22 7"/><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"/><path d="M15 22v-4a2 2 0 0 0-2-2h-2a2 2 0 0 0-2 2v4"/><path d="M2 7h20"/><path d="M22 7v3a2 2 0 0 1-2 2a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 16 12a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 12 12a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 8 12a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 4 12a2 2 0 0 1-2-2V7"/></svg>

                    <span class="ms-3">{{ __('Posts') }}</span>
                </x-side-link>

                <x-side-link :href="route('post-create')" :active="request()->routeIs('post-create')" wire:navigate>
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>

                    <span class="ms-3">{{ __('Create Post') }}</span>
                </x-side-link>

                <x-side-link :href="route('category-tag')" :active="request()->routeIs('category-tag')" wire:navigate>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 me-2.5"><path d="m16.02 12 5.48 3.13a1 1 0 0 1 0 1.74L13 21.74a2 2 0 0 1-2 0l-8.5-4.87a1 1 0 0 1 0-1.74L7.98 12"/><path d="M13 13.74a2 2 0 0 1-2 0L2.5 8.87a1 1 0 0 1 0-1.74L11 2.26a2 2 0 0 1 2 0l8.5 4.87a1 1 0 0 1 0 1.74Z"/></svg>
                    {{ __('Categories') }}
                </x-side-link>

                <x-side-link :href="route('sitemaps')" :active="request()->routeIs('sitemaps')" wire:navigate>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 me-2.5"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"/><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"/><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"/><path d="M10 6h4"/><path d="M10 10h4"/><path d="M10 14h4"/><path d="M10 18h4"/></svg> {{ __('Brands') }}
                </x-side-link>

                <x-side-link :href="route('admin-uploads')" :active="request()->routeIs('admin-uploads')" wire:navigate>
                    <svg class="w-5 h-5 me-2.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 7.5V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h3.5"/><path d="M16 2v4"/><path d="M8 2v4"/><path d="M3 10h5"/><path d="M17.5 17.5 16 16.3V14"/><circle cx="16" cy="16" r="6"/></svg>
                    {{ __('Uploads') }}
                </x-side-link>
            </div>

        </div>

        <!-- Shop tools -->
        <div
            x-data="{expanded: false}"
            class="mt-6 space-y-1 group text-sm"
        >
            <button
                x-on:click="expanded = ! expanded"
                class="w-full flex justify-between items-center px-2.5 py-2 text-sm rounded-lg text-slate-600 dark:text-slate-400 group-hover:text-emerald-500 dark:group-hover:text-emerald-600 group-hover:bg-secondary dark:group-hover:bg-secondary/30 transition-all ease-in-out duration-500"
            >
                <span class="inline-flex items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><path d="m2 7 4.41-4.41A2 2 0 0 1 7.83 2h8.34a2 2 0 0 1 1.42.59L22 7"/><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"/><path d="M15 22v-4a2 2 0 0 0-2-2h-2a2 2 0 0 0-2 2v4"/><path d="M2 7h20"/><path d="M22 7v3a2 2 0 0 1-2 2a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 16 12a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 12 12a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 8 12a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 4 12a2 2 0 0 1-2-2V7"/></svg> {{__('My Shop')}}</span>

                <svg x-show="expanded" class="w-5 h-5 ms-2.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
                <svg x-show="!expanded" class="w-5 h-5 ms-2.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
            </button>

            <div x-show="expanded" class="w-full flex flex-col space-y-1 p-2 rounded-b">
                <x-side-link :href="route('admin-orders')" :active="request()->routeIs('admin-orders')" wire:navigate>
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/><path d="m15 9-6 6"/><path d="M9 9h.01"/><path d="M15 15h.01"/></svg>

                    <span class="ms-3">{{ __('Orders') }}</span>
                </x-side-link>

                <x-side-link :href="route('admin-shop')" :active="request()->routeIs('admin-shop')" wire:navigate>
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="8" cy="8" r="6"/><path d="M18.09 10.37A6 6 0 1 1 10.34 18"/><path d="M7 6h1v4"/><path d="m16.71 13.88.7.71-2.82 2.82"/></svg>

                    <span class="ms-3">{{ __('Shop') }}</span>
                </x-side-link>

                <x-side-link :href="route('admin.leads')" :active="request()->routeIs('admin.leads')" wire:navigate>
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z"/><path d="m21.854 2.147-10.94 10.939"/></svg>

                    <span class="ms-3">{{ __('Leads') }}</span>
                </x-side-link>

                <x-side-link :href="route('admin.campaigns')" :active="request()->routeIs('admin.campaigns')" wire:navigate>
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 11 18-5v12L3 14v-3z"/><path d="M11.6 16.8a3 3 0 1 1-5.8-1.6"/></svg>

                    <span class="ms-3">{{ __('Campaigns/Ads') }}</span>
                </x-side-link>

            </div>

        </div>

        <!-- inventory -->
        <div
            x-data="{expanded: false}"
            class="mt-6 space-y-1 font-medium text-sm xl:text-base shadow-sm shadow-emerald-900 dark:shadow-emerald-700 rounded-lg group"
        >
            <button
                x-on:click="expanded = ! expanded"
                class="w-full inline-flex items-center justify-between px-3 py-2 text-slate-600 dark:text-slate-400 group-hover:text-emerald-500 dark:group-hover:text-emerald-600"
            >
                <span class="inline-flex items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 me-2.5"><path d="M22 8.35V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V8.35A2 2 0 0 1 3.26 6.5l8-3.2a2 2 0 0 1 1.48 0l8 3.2A2 2 0 0 1 22 8.35Z"/><path d="M6 18h12"/><path d="M6 14h12"/><rect width="12" height="12" x="6" y="10"/></svg> {{__('Inventory')}}</span>

                <svg x-show="expanded" class="w-5 h-5 ms-2.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
                <svg x-show="!expanded" class="w-5 h-5 ms-2.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
            </button>

            <div x-show="expanded" class="w-full flex flex-col gap-3 lg:gap-6 p-2 lg:px-4 bg-slate-100 dark:bg-slate-900 rounded-b">
                <x-side-link :href="route('admin-shop')" :active="request()->routeIs('admin-shop')" wire:navigate>
                    <svg class="w-6 h-6" fill="currentColor" height="24px" width="24px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 256 230" xml:space="preserve"><g> <path d="M61.2,106h37.4v31.2H61.2V106z M61.2,178.7h37.4v-31.2H61.2V178.7z M61.2,220.1h37.4v-31.2H61.2V220.1z M109.7,178.7H147 v-31.2h-37.4V178.7z M109.7,220.1H147v-31.2h-37.4V220.1z M158.2,188.9v31.2h37.4v-31.2H158.2z M255,67.2L128.3,7.6L1.7,67.4 l7.9,16.5l16.1-7.7v144h18.2V75.6h169v144.8h18.2v-144l16.1,7.5L255,67.2z"></path> </g></svg>

                    <span class="ms-3">{{ __('Store') }}</span>
                </x-side-link>

                <x-side-link :href="route('admin-visitors')" :active="request()->routeIs('admin-visitors')" wire:navigate>
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 21a8 8 0 0 0-16 0"/><circle cx="10" cy="8" r="5"/><path d="M22 20c0-3.37-2-6.5-4-8a5 5 0 0 0-.45-8.3"/></svg>
                    <span class="ms-3">{{ __('Customers') }}</span>
                </x-side-link>
            </div>
        </div>
    </div>
</div>
