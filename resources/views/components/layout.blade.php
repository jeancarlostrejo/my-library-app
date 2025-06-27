<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mi Biblioteca - {{ $title }} </title>

    <link rel="shortcut icon" href="{{ asset('images/lectura.png') }}" type="image/x-icon">

    @if (Route::is('welcome'))
        <style>
            .fondo {
                background-image: url('{{ asset('images/fondo-light.jpg') }}');
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
            }
        </style>
    @endif
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="flex flex-col items-center min-h-screen bg-gray-200 dark:bg-gray-900 text-gray-900 dark:text-gray-100 font-sans {{ Route::is('welcome') ? 'fondo' : '' }} {{ Route::is('readings.current_reading') ? ' px-4 md:px-8 lg:px-16' : '' }}">

    <nav class="bg-gray-100 dark:bg-gray-800 shadow-md w-full fixed top-0 inset-x-0 z-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('welcome') }}"
                        class="text-xl font-bold text-blue-500 dark:text-gray-200 flex items-center">
                        <img src="{{ asset('images/lectura.png') }}" alt="Logo Mi Biblioteca" class="h-11 w-11 mr-2"
                            style="height: 44px; width: 44px" />
                        Mi Biblioteca
                    </a>
                </div>

                <!-- Navbar desktop -->
                <div class="hidden md:flex md:items-center md:ml-6 space-x-4">
                    <x-nav-link :href="route('readings.current_reading')" :active="Route::is('readings.current_reading')">
                        ¿Qué libro estoy leyendo?
                    </x-nav-link>

                    <x-nav-link>
                        Próximas lecturas
                    </x-nav-link>

                    <x-nav-link>
                        Libros leídos
                    </x-nav-link>
                </div>

                <div class="-mr-2 flex items-center md:hidden">
                    <button id="mobile-menu-button" type="button"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-700 dark:text-gray-200 hover:text-white hover:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Abrir menú principal</span>
                        <svg class="block h-6 w-6" id="hamburger-icon" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg class="hidden h-6 w-6" id="close-icon" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Navbar mobile -->
        <div class="md:hidden hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <x-nav-mobile-link :href="route('readings.current_reading')" :active="Route::is('readings.current_reading')">
                    ¿Qué libro estoy leyendo?
                </x-nav-mobile-link>

                <x-nav-mobile-link>
                    Próximas lecturas
                </x-nav-mobile-link>

                <x-nav-mobile-link>
                    Libros leídos
                </x-nav-mobile-link>
            </div>
        </div>
    </nav>

    {{ $slot }}

    <footer class="w-full py-4 z-10 text-center text-gray-200 dark:text-gray-400 text-xl animate-slide-in-up">
        Hecho con <span class="text-red-500 text-lg">&hearts;</span> por
        <a href="https://github.com/jeancarlostrejo" class="font-bold" target="_blank" rel="noopener noreferrer">
            Jean Carlos</a>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const button = document.getElementById("mobile-menu-button");
            const mobileMenu = document.getElementById("mobile-menu");
            const hamburgerIcon = document.getElementById("hamburger-icon");
            const closeIcon = document.getElementById("close-icon");

            button.addEventListener("click", function() {
                const isExpanded = button.getAttribute("aria-expanded") === "true";
                button.setAttribute("aria-expanded", !isExpanded);
                mobileMenu.classList.toggle("hidden");

                hamburgerIcon.classList.toggle("hidden");
                closeIcon.classList.toggle("hidden");
            });
        });
    </script>
</body>

</html>
