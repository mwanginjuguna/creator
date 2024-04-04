<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-white font-body">
    <head>
        <meta charset="utf-8">
        <meta name="google-site-verification" content="{{ config('app.google_site_verification') }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ?? config('app.name', 'Digitizing the Small Businesses in Africa - Mwangi Kanothe') }}</title>
        <meta name="description" content="{{ $meta ?? 'Gain customers, reach new markets, and grow your online business. I am helping small business go digital. My focus is on building websites, ecommerce platforms, and landing pages for 100% online presence.' }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "{{$pageType ?? 'Article'}}",
            "headline": "{{ $h1Heading ?? 'Small Business Digital Service' }}",
            "description": "{{ $meta ?? 'This service is dedicated to building digital tools dedicated to helping small businesses achieve 100% online presence.' }}",
            {{ $snippet ?? '' }}
            }
        </script>
    </head>
    <body class="font-sans text-gray-900 antialiased font-body">
        <div class="min-h-screen ">
            @livewire('welcome.navigation')

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
    </body>
</html>
