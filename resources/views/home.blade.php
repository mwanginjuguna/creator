<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="{{ config('app.google_site_verification') }}" />


        <title>
            @if(isset($title))
                {{ __($title .' | '.config('site.title')) }}
            @endif
            {{ config('site.title') }}
        </title>
    <meta name="description" content="{{ __($meta ?? config('site.meta')) }}">

    <meta name="keywords" content="{{ __($keywords ?? config('site.keywords')) }}">

    <meta content="{{ $title ?? config('site.title') }}" property="og:title">
    <meta content="{{ $meta ?? config('site.meta') }}" property="og:description">

    <meta content="{{ $ftImg ?? asset('assets/logo.png') }}" property="og:image">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body
    x-data="{ darkMode: false }"
    x-init="
            if (!('darkMode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) {
              localStorage.setItem('darkMode', JSON.stringify(true));
            }
            darkMode = JSON.parse(localStorage.getItem('darkMode'));
            $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    x-cloak
>
    <div
        x-bind:class="{'dark' : darkMode === true}"
        class="text-slate-900 dark:text-slate-100 bg-slate-100 dark:bg-slate-900"
    >
        <div class="relative min-h-screen w-full bg-slate-100 dark:bg-slate-900 text-slate-700 dark:text-slate-300">
            <div class="sticky top-0 max-w-7xl mx-auto z-[999] p-3 flex justify-between items-center">
                <div class="flex flex-row gap-x-5 items-center mb-3">
                    <img class="w-12 h-12 rounded-full" src="{{ asset('https://github.com/mwanginjuguna/public-image-assets/blob/main/profileImg-no-bg.png?raw=true') }}" title="The profile image of Francis Njuguna" alt="A profile photo of Francis Njuguna">
                    <h3 class="font-semibold p-3 rounded-full border border-slate-200 dark:border-slate-800">Hello there 👋.</h3>
                </div>

                <div class=" flex flex-row justify-end items-center gap-x-4">
                    <x-utils.dark-mode-toggle />
                </div>

            </div>

            <livewire:pages.profile />
        </div>
    </div>
</body>
</html>

