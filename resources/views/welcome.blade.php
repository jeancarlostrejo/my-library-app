<x-layout>
    <x-slot name="title">Inicio</x-slot>
    <div class="overlay absolute inset-0 z-0"></div>

    <div class="main-content-wrapper relative z-10 mt-20">
        <header class="text-center px-4 max-w-4xl mx-auto animate-fade-in-scale">
            <h1
                class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-blue-500 dark:text-gray-200 mb-6 leading-tight drop-shadow-lg">
                📚 Mi biblioteca 📚
            </h1>
            <p class="text-xl md:text-2xl text-white dark:text-gray-200 mb-8 font-light leading-relaxed">
                Mi espacio personal para explorar el fascinante mundo de los libros.
            </p>
        </header>

        <main
            class="bg-gray-100/90 dark:bg-gray-800/90 p-8 md:p-10 rounded-lg shadow-2xl max-w-3xl mx-auto text-center animate-slide-in-right transform transition-all duration-500 hover:scale-101">
            <h2 class="text-2xl md:text-3xl font-bold text-blue-600 dark:text-gray-200 mb-6">
                ¿Qué encontrarás aquí?
            </h2>
            <div class="space-y-4 text-lg md:text-xl text-gray-700 dark:text-gray-200 leading-relaxed">
                <p>
                    Este sitio es un reflejo de mi viaje literario. Aquí comparto
                    contigo los libros que me están acompañando en este momento,
                    aquellos que esperan ansiosamente en mi lista de "próximas lecturas"
                    y el valioso catálogo de todas las obras que he tenido el placer de
                    finalizar.
                </p>
                <p>
                    Mi objetivo es mostrarte un espacio donde podamos conectar a través
                    de las historias, inspirar nuevas lecturas y, quién sabe, ¡descubrir
                    juntos el próximo gran libro!
                </p>
            </div>
            <a href="{{ route('readings.current') }}"
                class="mt-8 inline-block bg-blue-600 hover:bg-blue-700 text-gray-200 font-bold py-3 px-8 rounded-full shadow-lg transform transition-all duration-300 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800">
                Descubre mi lectura actual 🚀
            </a>
        </main>
    </div>
</x-layout>
