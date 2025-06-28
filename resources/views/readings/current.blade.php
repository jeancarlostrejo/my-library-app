<x-layout>
    <x-slot name="title">{{ __('Current Reading') }}</x-slot>

    <section id="main-book-info-container"
        class="flex flex-col items-center justify-center w-full min-h-screen mt-16 pb-16">
        <h1
            class="text-2xl lg:text-3xl uppercase font-extrabold py-4 text-blue-800 dark:text-blue-300 my-2 text-center animate-fade-in-scale">
            🌟 Libro que estoy leyendo 🌟
        </h1>

        <div
            class="flex flex-col md:flex-row md:gap-2 w-full max-w-6xl h-auto md:h-[calc(100vh-200px)] bg-white dark:bg-gray-800 rounded-lg shadow-xl overflow-hidden flex-grow mx-auto animate-slide-in-right">
            <div
                class="w-full md:w-1/2 h-96 md:h-auto flex items-center justify-center py-4 bg-gradient-to-br from-pink-200 to-blue-200 dark:from-blue-700 dark:to-purple-900 animate-fade-in">
                <img src="{{ asset('images/El-senor-de-los-anillos-la-comunidad-del-anillo.webp') }}"
                    alt="Portada del Libro de El señor de los anillos: la Comunidad del Anillo"
                    class="max-h-full max-w-full object-contain rounded-lg shadow-2xl" />
            </div>

            <div class="w-full md:w-1/2 flex flex-col p-4 animate-slide-in-up">
                <p
                    class="text-xl md:text-2xl font-extrabold mb-4 leading-tight text-center md:text-left text-gray-800 dark:text-gray-200">
                    El Señor de los Anillos: La Comunidad del Anillo
                </p>

                <x-p-book-info emoji="📖" label="Género" value="Fantasía" />
                <x-p-book-info emoji="👤" label="Autor" value="J. R. R. Tolkien" />
                <x-p-book-info emoji="📅" label="Año de Publicación" value="1954" />


                <x-p-book-info class="mb-10" emoji="📄" label="Páginas" value="458" />

                <x-p-book-info class="mt-auto" emoji="🏁" label="Inicio de Lectura" value="13 de marzo del 2025" />

                <div class="flex flex-col items-start">
                    <x-p-book-info emoji="📊" label="Progreso"
                        value="53% (241/458 páginas
                        leídas)" />
                    <div
                        class="w-3/4 sm:w-2/3 md:w-full lg:w-4/5 xl:w-3/4 bg-gray-400 dark:bg-gray-700 rounded-full h-2.5">
                        <div class="bg-blue-600 h-2.5 rounded-full transition-all duration-500 ease-out"
                            style="width: 53%"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="book-summary"
        class="w-full max-w-4xl p-6 bg-white dark:bg-gray-800 rounded-lg shadow-xl mb-8 animate-slide-in-up mx-auto animate-fade-in-scale">
        <h3 class="text-2xl md:text-3xl font-bold text-blue-600 dark:text-blue-400 mb-4 text-center md:text-left">
            Resumen del libro
        </h3>
        <div class="text-base md:text-lg text-gray-700 dark:text-gray-200 leading-relaxed text-left">
            <p class="mb-4">
                En la adormecida e idílica Comarca, un joven hobbit recibe un encargo:
                custodiar el Anillo Único y emprender el viaje para su destrucción en
                la Grieta del Destino. Acompañado por magos, hombres, elfos y enanos,
                atravesará la Tierra Media y se internará en las sombras de Mordor,
                perseguido siempre por las huestes de Sauron, el Señor Oscuro,
                dispuesto a recuperar su creación para establecer el dominio
                definitivo del Mal.
            </p>
        </div>
    </section>


</x-layout>
