<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ?? config('app.name', 'Gameplan Labs') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @stack('scripts')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>

    <body class="font-sans antialiased">
    <div class="relative min-h-screen sm:flex sm:flex-row bg-slate-100 dark:bg-slate-900 w-full" x-data="{showSidebar: false}">
        <button x-on:click="showSidebar = ! showSidebar"
                class="inline-flex fixed top-16 left-0 lg:hidden z-50 items-center p-2 mt-2 ms-3 text-sm text-dark/60 hover:text-dark/80 dark:text-light dark:hover:text-light/80 rounded-lg lg:hidden bg-light dark:bg-dark border border-light hover:border-accent/70 dark:hover:border-accent/30 hover:bg-light/90 dark:hover:bg-light/30 focus:outline-none focus:ring-2 focus:ring-gray-200">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
        </button>

        <aside :class="{'hidden': !showSidebar, 'block': showSidebar}"
               class="sticky top-0 left-0 z-40 h-screen w-64 hidden lg:block"
        >
            <x-parts.sidebar class="pt-6 sm:pt-0" ></x-parts.sidebar>
        </aside>

        <div class="w-full bg-slate-100 dark:bg-slate-900 text-slate-700 dark:text-slate-300">
            <livewire:layout.navigation />

            <div class="min-h-screen w-full">
                <!-- Page Content -->
                <main>
                    <x-parts.flash-message />

                    {{ $slot }}
                </main>
            </div>

            <!--footer-->
            @livewire('footer')
            <x-utils.back-to-top />
        </div>
    </div>
    </body>
</html>
