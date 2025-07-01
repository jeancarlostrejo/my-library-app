<x-layout>
    <x-slot name="title">Lectura actual</x-slot>

    <!-- Banner de lectura actual -->
    <section class="flex flex-col items-center justify-center w-full my-16">
        <h1
            class="text-2xl lg:text-3xl uppercase font-bold py-4 text-gray-700 dark:text-blue-400 mb-2 text-center animate-scale">
            🌟 Libro que estoy leyendo 🌟
        </h1>

       <!--  Datos del libro -->
        <div
            class="grid grid-cols-1 md:grid-cols-6 md:gap-2 w-full max-w-6xl bg-white dark:bg-gray-800 rounded-lg shadow-xl mx-auto animate-fade-in-up animate-delay-500">

            <div
                class="col-span-1 md:col-span-3 flex items-center justify-center py-4 bg-gradient-to-br from-pink-200 to-blue-200 dark:from-blue-700 dark:to-purple-900 rounded-lg">
                <img src="{{ asset('images/El-senor-de-los-anillos-la-comunidad-del-anillo.webp') }}"
                    alt="Portada del Libro de El señor de los anillos: la Comunidad del Anillo"
                    class="max-h-80 md:max-h-100 xl:max-h-110 max-w-full object-contain rounded-lg shadow-2xl animate-zoom-in animate-delay-1000" />
            </div>

            <div class="col-span-1 md:col-span-3 flex flex-col p-4 animate-slide-in-bottom overflow-auto">
                <p
                    class="text-xl md:text-2xl font-extrabold mb-4 leading-tight text-center md:text-left text-gray-800 dark:text-gray-200">
                    El Señor de los Anillos: La Comunidad del Anillo
                </p>

                <div>
                    <x-p-book-info emoji="📖" label="Género" value="Fantasía, aventura" />
                    <x-p-book-info emoji="👤" label="Autor" value="J. R. R. Tolkien" />
                    <x-p-book-info emoji="📅" label="Año de Publicación" value="1954" />
                    <x-p-book-info class="mb-10" emoji="📄" label="Páginas" value="458" />

                    <div class="md:text-left">
                        <x-p-book-info emoji="🏁" label="Inicio de Lectura" value="13/03/2025" />
                        <x-p-book-info emoji="📊" label="Progreso"
                            value="53% (241 páginas
                            leídas)" />
                        <div class="mx-auto w-1/2 md:w-3/5 md:mx-0 bg-gray-400 dark:bg-gray-700 rounded-full h-2.5">
                            <div class="bg-blue-600 h-2.5 rounded-full transition-all duration-500 ease-out"
                                style="width: 53%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sinopsis del libro-->
    <section
        class="w-full max-w-6xl p-6 bg-white dark:bg-gray-800 rounded-lg shadow-xl mb-8 mx-auto animate-fade-in-right animate-delay-1000">
        <h3 class="text-2xl md:text-3xl font-bold text-gray-700 dark:text-blue-400 mb-4 text-center md:text-left">
            Sinopsis del libro
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

    <!-- Información sobre el autor-->
    <section
        class="w-full max-w-6xl p-6 flex flex-col gap-4 bg-white dark:bg-gray-800 rounded-lg shadow-xl mb-8 mx-auto animate-fade-in-right animate-delay-1000">
        <h3 class="text-2xl md:text-3xl font-bold text-gray-700 dark:text-blue-400 mb-4 text-center md:text-left">
            Sobre el autor: J. R. R. Tolkien
        </h3>

        <div class="grid grid-cols-1 md:grid-cols-6 gap-8">
            <figure
                class="md:col-span-2 flex flex-col items-center md:items-start rounded-lg justify-center md:justify-start">
                <img src="{{ asset('images/jrr-tolkien.webp') }}" alt="Foto de J. R. R. Tolkien"
                    class="w-full max-w-xs md:max-w-md max-h-100 shadow-2xl object-contain rounded-lg animate-zoom-in animate-delay-500" />
                <figcaption class="w-full text-center mt-2 italic">J. R. R. Tolkien</figcaption>
            </figure>

            <div class="md:col-span-4 items-left sm:justify-center md:justify-start">
                <p class="text-base md:text-lg text-gray-700 dark:text-gray-200 leading-relaxed text-left">
                    John Ronald Reuel Tolkien (1892-1973) fue un escritor, poeta, filólogo y profesor universitario
                    británico, mundialmente conocido por ser el padre de la literatura fantástica moderna. Nacido en
                    Bloemfontein, Sudáfrica, Tolkien se mudó a Inglaterra a una edad temprana. Su profundo amor por los
                    idiomas, especialmente las lenguas antiguas y el estudio de mitologías, lo llevó a crear mundos y
                    lenguas enteras, un rasgo distintivo de su obra.

                    Fue profesor de Anglosajón en la Universidad de Oxford de 1925 a 1945, y posteriormente profesor de
                    Lengua y Literatura Inglesas hasta 1959. Su erudición en filología y literatura medieval, incluyendo
                    el Beowulf, el Kalevala y las sagas nórdicas, influyó profundamente en su creación de la Tierra
                    Media y sus historias.

                    La obra maestra de Tolkien, "El Señor de los Anillos", junto con su precuela "El Hobbit" y el
                    póstumo "El Silmarillion", no solo redefinió el género de la fantasía, sino que también creó un
                    universo literario vasto y detallado con su propia historia, geografía, culturas y lenguas. Su
                    influencia es inmensa y sigue inspirando a innumerables autores y artistas en todo el mundo. Tolkien
                    no solo escribió historias; construyó un legado mitológico que perdura hasta el día de hoy.
                </p>

            </div>
        </div>

    </section>
</x-layout>
