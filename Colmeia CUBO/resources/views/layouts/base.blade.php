<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @hasSection('title')
        <title>@yield('title') - {{ config('app.name') }}</title>
    @else
        <title>{{ config('app.name') }}</title>
    @endif

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">

    <!-- Fonts -->
    {{-- <link rel="stylesheet" href="https://rsms.me/inter/inter.css"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:wght@400;700&display=swap"
        rel="stylesheet">

    <tallstackui:script />

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles
    @livewireScripts

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="https://cdn.jsdelivr.net/npm/honeycomb-grid@4.1.5/dist/honeycomb-grid.umd.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/svg.js/3.2.4/svg.min.js"
        integrity="sha512-ovlWyhrYXr3HEkGJI5YPXIFYIbHEKs2yfemKVVIIQe9U74tXyTuVdzMlvZlw/0X5lnIDRgtVlckrkeuCrDpq4Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/svg.js/3.2.4/polyfillsIE.min.js"
        integrity="sha512-HVQY4IqEILGZ3wIpONHnCYstJAU9dXwRrHgMcme0jZ0+iWoEkjVKIKnFhRicrfQZt0gWZAbzaskjXg/6yth1Ag=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" /> --}}



    <script>
        function scrollToElement(elementSelector, duration = 500) {
            const target = document.querySelector(elementSelector);
            if (!target) {
                console.warn("Target element not found:", elementSelector);
                return;
            }

            const targetPosition = target.getBoundingClientRect().top;
            const startPosition = window.scrollY;
            const windowHeight = window.innerHeight;
            const distance = targetPosition - windowHeight / 20; // Ajuste aqui

            let startTime = null;

            function animation(currentTime) {
                if (startTime === null) startTime = currentTime;
                const timeElapsed = currentTime - startTime;
                const run = easeInOutQuad(
                    timeElapsed,
                    startPosition,
                    distance,
                    duration
                );
                window.scrollTo(0, run);
                if (timeElapsed < duration) requestAnimationFrame(animation);
            }

            function easeInOutQuad(t, b, c, d) {
                t /= d / 2;
                if (t < 1) return (c / 2) * t * t + b;
                t--;
                return (-c / 2) * (t * (t - 2) - 1) + b;
            }

            requestAnimationFrame(animation);
        }
    </script>
</head>

<body class="poppins-regular">
    @yield('body')

    <script>
        try {
            setTimeout(function() {
                document.getElementById('message') ? document.getElementById('message').style.display = 'none' : '';
            }, 3000);
        } catch (e) {}
    </script>

    <style>
        .bar {
            animation: bar 3s linear;
        }

        @keyframes bar {
            0% {
                width: 100%;
            }

            100% {
                width: 0%;
            }
        }

        .poppins-regular {
            font-family: "Poppins", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .poppins-bold {
            font-family: "Poppins", sans-serif;
            font-weight: 700;
            font-style: normal;
        }

        .poppins-extrabold {
            font-family: "Poppins", sans-serif;
            font-weight: 800;
            font-style: normal;
        }

        .montserrat-regular {
            font-family: "Montserrat", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
        }

        .montserrat-bold {
            font-family: "Montserrat", sans-serif;
            font-optical-sizing: auto;
            font-weight: 700;
            font-style: normal;
        }
    </style>
</body>

</html>
