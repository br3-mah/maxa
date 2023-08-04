<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="shortcut icon" href="https://assets.nflxext.com/us/ffe/siteui/common/icons/nficon2016.ico" type="image/x-icon" />
        <link
          rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
          integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
          crossorigin="anonymous"
          referrerpolicy="no-referrer"
        />
        <!-- Sassy -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @vite(['resources/sass/scss.scss'])

        <!-- Styles -->
        <link href="{{ asset('css/home-banner.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/core.css') }}" rel="stylesheet" />

        @livewireStyles
    </head>
    <body>
        {{-- <x-banner /> --}}
            @livewire('navigation-menu')
            
            <!-- Page Heading -->
            @if (isset($header))
                {{-- <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header> --}}
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

        @stack('modals')

        @livewireScripts  
        <div class="cookie-banner" id="cookieBanner">
            <p>
              This website uses cookies to ensure you get the best experience on our website.
              <a href="/privacy-policy">Learn more</a>
            </p>
            <button id="acceptCookies">Accept</button>
        </div>
    </body>
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const cookieBanner = document.getElementById('cookieBanner');

        const setCookie = (name, value, days) => {
            const expirationDate = new Date();
            expirationDate.setTime(expirationDate.getTime() + (days * 24 * 60 * 60 * 1000));
            const expires = `expires=${expirationDate.toUTCString()}`;
            document.cookie = `${name}=${value};${expires};path=/`;
        };

        const hideBanner = () => {
            cookieBanner.classList.add('slide-up'); // Add the animation class
            setCookie('acceptedCookies', 'true', 30); // Set the cookie for 30 days
        };

        const acceptCookiesButton = document.getElementById('acceptCookies');
        acceptCookiesButton.addEventListener('click', hideBanner);

        // Check if the cookie was previously accepted
        const cookiesAccepted = document.cookie.includes('acceptedCookies=true');
        if (cookiesAccepted) {
            cookieBanner.style.display = 'none';
        }
    });
    </script>
</html>
