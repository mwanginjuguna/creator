<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-slate-50 dark:bg-slate-900 font-body">
    <head>
        <meta charset="utf-8">
        <meta name="google-site-verification" content="{{ config('app.google_site_verification') }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

            <title>
                @if(isset($title))
                    {{ __($title .' | '.config('site.title')) }}
                @endif
                {{ config('site.title') }}
            </title>

            <meta name="description" content="{{ __(isset($meta) ?: config('site.meta')) }}">

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
            <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "{{ 'MK Digital' }}",
            "headline": "{{ 'Small Business Digital Service - MK Digital' }}",
            "description": "{{ $meta ?? 'MK Digital is a service for building digital tools dedicated to helping small businesses achieve 100% online presence. Founder/CEO Mwangi Kanothe.' }}",
            "logo": "{{ asset('mk-digital-logo.png') }}",
            "sameAs": [
                "https://twitter.com/mwangikanothe",
                "https://www.linkedin.com/in/francis-m-njuguna/",
                "https://github.com/mwanginjuguna"
            ],
            {{ $snippet ?? '' }}
            }
        </script>
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
            <!-- navbar -->
            <div class="sticky top-0 max-w-7xl mx-auto z-[999] p-3 flex justify-between items-center">
                <div class="flex flex-row gap-x-5 items-center mb-3">
                    <img class="w-12 h-12 rounded-full" src="{{ asset('https://github.com/mwanginjuguna/public-image-assets/blob/main/profileImg-no-bg.png?raw=true') }}" title="The profile image of Francis Njuguna" alt="A profile photo of Francis Njuguna">
                    <h3 class="font-semibold p-3 rounded-full border border-slate-200 dark:border-slate-800">Hello there 👋.</h3>
                </div>

                <div class=" flex flex-row justify-end items-center gap-x-4">
                    <x-utils.dark-mode-toggle />
                </div>
            </div>

            <x-alert type="success" />
            <x-alert type="danger" />
            <x-alert type="warning" />
            <x-alert type="info" />
            <x-alert />

            <div>
                {{ $slot }}
            </div>

            <!--footer-->
            @livewire('footer')

            @if(config('app.env') === 'production')
                <!--Start of Tawk.to Script-->
                <script type="text/javascript">
                    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
                    (function(){
                        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                        s1.async=true;
                        s1.src='https://embed.tawk.to/658523f370c9f2407f827117/1hi818skg';
                        s1.charset='UTF-8';
                        s1.setAttribute('crossorigin','*');
                        s0.parentNode.insertBefore(s1,s0);
                    })();
                </script>
                <!--End of Tawk.to Script-->
            @endif
        </div>
    </div>
    </body>
</html>
