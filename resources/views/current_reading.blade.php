<x-layout>
    <x-slot name="title">{{ __('Current Reading') }}</x-slot>

    <main>
        <section id="main-book-info-container"
            class="flex flex-col items-center justify-center w-full min-h-screen pt-4 pb-8">
            <p
                class="text-2xl lg:text-3xl uppercase font-extrabold text-blue-800 dark:text-blue-300 mt-2 md:mb-4 text-center animate-fade-in">
                🌟 Libro que estoy leyendo 🌟
            </p>

            <div
                class="flex flex-col md:flex-row w-full max-w-6xl h-auto md:h-[calc(100vh-200px)] bg-white dark:bg-gray-800 rounded-lg shadow-xl overflow-hidden transform transition-all duration-500 ease-in-out scale-95 md:scale-100 flex-grow mx-auto">
                <div
                    class="relative w-full md:w-1/2 h-80 md:h-auto flex items-center justify-center p-4 bg-gradient-to-br from-pink-200 to-blue-200 dark:from-blue-700 dark:to-purple-900 animate-fade-in">
                    <img src="{{ asset('images/El-senor-de-los-anillos-la-comunidad-del-anillo.webp') }}"
                        alt="Portada del Libro de El señor de los anillos: la Comunidad del Anillo"
                        class="max-h-full max-w-full object-contain rounded-lg shadow-2xl" />
                    <div class="absolute inset-0 bg-black opacity-10 rounded-lg"></div>
                </div>

                <div class="w-full md:w-1/2 flex flex-col justify-center p-4 md:p-8 animate-slide-in-up">
                    <h1
                        class="text-xl md:text-2xl font-extrabold mb-4 leading-tight text-center md:text-left text-gray-800 dark:text-gray-200">
                        El Señor de los Anillos: La Comunidad del Anillo
                    </h1>
                    <p
                        class="text-base text-gray-600 dark:text-gray-300 mb-2 text-center md:text-left flex items-center gap-2">
                        <span class="text-lg">📖</span>
                        <span class="font-semibold">Género:</span> Fantasía
                    </p>
                    <p
                        class="text-base text-gray-600 dark:text-gray-300 mb-2 text-center md:text-left flex items-center gap-2">
                        <span class="text-lg">👤</span>
                        <span class="font-semibold">Autor:</span> J. R. R. Tolkien
                    </p>
                    <p
                        class="text-base text-gray-600 dark:text-gray-300 mb-2 text-center md:text-left flex items-center gap-2">
                        <span class="text-lg">📅</span>
                        <span class="font-semibold">Año de Publicación:</span> 1954
                    </p>
                    <p
                        class="text-base text-gray-600 dark:text-gray-300 mb-10 text-center md:text-left flex items-center gap-2">
                        <span class="text-lg">📄</span>
                        <span class="font-semibold">Páginas:</span> 458
                    </p>
                    <p
                        class="text-base text-gray-600 dark:text-gray-300 text-center md:text-left mt-auto mb-4 md:mb-0 flex items-center gap-2">
                        <span class="text-lg">🏁</span>
                        <span class="font-semibold">Fecha de inicio de lectura:</span> 13 de
                        marzo de 2025
                    </p>
                    <div class="flex flex-col items-center md:items-start">
                        <p
                            class="text-base text-gray-600 dark:text-gray-300 mb-2 text-center md:text-left flex items-center gap-2">
                            <span class="text-lg">📊</span>
                            <span class="font-semibold">Progreso:</span> 53% (241/458 páginas
                            leídas)
                        </p>
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
            class="w-full max-w-4xl p-6 bg-white dark:bg-gray-800 rounded-lg shadow-xl mb-8 animate-slide-in-up mx-auto">
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
    </main>

</x-layout>
