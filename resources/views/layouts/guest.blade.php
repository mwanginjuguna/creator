<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-white font-body">
<head>
    <meta charset="utf-8">
    <meta name="google-site-verification" content="{{ config('app.google_site_verification') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? config('app.name', 'GPA - Small Business, Big Game.') }}</title>
    <meta name="description"
          content="{{ $meta ?? 'Equipping small businesses with digital tools. We build, deploy, and manage websites, ecommerce platforms, landing pages, Inventory, POS, and ERP software.' }}"
    >

    <link href="{{ asset('gp-labs-logo.png') }}" rel="MK Digital Logo" type="image/icon">

    <meta content="{{ $title ?? config('app.name', 'Small Business, Big Game.') }}"
          property="og:title">
    <meta
        content="{{ $meta ?? 'Equipping small businesses with digital tools. We build, deploy, and manage websites, ecommerce platforms, landing pages, Inventory, POS, and ERP software.' }}"
        property="og:description">

    <meta href="{{ $ftImg ?? asset('gp-labs-logo.png') }}" property="og:image">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "{{ 'Gameplan' }}",
            "headline": "{{ 'Small Business, Big Game.' }}",
            "description": "{{ $meta ?? 'Equipping small businesses with digital tools. We build, deploy, and manage websites, ecommerce platforms, landing pages, Inventory, POS, and ERP software.' }}",
            "logo": "{{ asset('gp-labs-logo.png') }}",
            "sameAs": [
                "https://twitter.com/mwangikanothe",
                "https://www.linkedin.com/in/francis-m-njuguna/",
                "https://github.com/mwanginjuguna"
            ],
            {{ $snippet ?? '' }}
        }
</script>
</head>
<body class="font-sans text-gray-900 dark:text-gray-300 bg-zinc-50 dark:bg-zinc-900 antialiased font-body">
<div class="min-h-screen relative">
    @livewire('welcome.navigation')

    <div>
        {{ $slot }}
    </div>

    @if (session()->has('success'))
        <div
            x-data="{showScs: true}"
            x-init="setTimeout(() => showScs = false, 5000)"
            x-show="showScs"
            class="fixed bottom-0 right-0 mb-4 mr-4 bg-green-500 text-white p-3 rounded shadow-lg"
        >
            {{ session('success') }}
        </div>
    @elseif(session()->has('message'))
        <div
            x-data="{showMsg: true}"
            x-init="setTimeout(() => showMsg = false, 5000)"
            x-show="showMsg"
            class="fixed bottom-0 right-0 mb-4 mr-4 bg-sky-500 text-white p-3 rounded shadow-lg"
        >
            {{ session('message') }}
        </div>
    @endif

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
</body>
</html>
