<x-layout>
    <x-slot name="title">Próximas lecturas</x-slot>

    <div class="max-w-6xl mx-auto px-4 py-8 mt-16">
        <h1
            class="text-3xl font-bold text-blue-700 dark:text-blue-300 mb-4 p-4 text-center animate-fade-in animate-duration-500">
            ⏳Próximas lecturas⏳</h1>

        <div
            class=" grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 min-h-auto animate-fade-in-up animate-duration-1000 animate-delay-[800ms]">

            <!-- Libro 1 -->
            <div class="bg-white dark:bg-gray-800 rounded-r-xl flex overflow-hidden hover:scale-102 duration-300 ">
                <a href="#" class="flex-shrink-0">
                    <img src="{{ asset('images/el-ultimo-giro.webp') }}" alt="Portada el último giro"
                        class="w-auto h-48 object-contain flex-shrink-0" />
                </a>
                <div class="flex flex-col justify-between p-4 w-full">
                    <div>
                        <h2>
                            <a href="#"
                                class="text-lg hover:underline font-bold text-gray-900 dark:text-gray-100 line-clamp-1"
                                title="El último giro">El
                                último giro
                            </a>
                        </h2>
                        <p class="text-sm text-blue-700 dark:text-blue-300 mb-4 line-clamp-1">Paola Boutellier</p>
                        <p class="text-xs text-gray-600 dark:text-gray-300 line-clamp-6">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor aspernatur provident modi
                            optio tenetur, error assumenda vel delectus, cumque consectetur itaque veritatis nesciunt.
                            Debitis laborum reiciendis rem nulla in sunt ipsam aliquid deleniti explicabo, vero quas
                            quaerat, eum totam! Voluptates saepe aperiam esse hic eaque non magnam corporis r
                        </p>
                    </div>
                </div>
            </div>

            <!-- Libro 2 -->
            <div class="bg-white dark:bg-gray-800 rounded-r-xl flex overflow-hidden hover:scale-102 duration-300  ">
                <a href="#" class="flex-shrink-0">
                    <img src="{{ asset('images/zarco.webp') }}" alt="Portada Zarco"
                        class="w-auto h-48 object-contain flex-shrink-0" />
                </a>
                <div class="flex flex-col justify-between p-4 w-full">
                    <div>
                        <h2>
                            <a href="#"
                                class="text-lg hover:underline font-bold text-gray-900 dark:text-gray-100 line-clamp-1"
                                title="Zarco">Zarco
                            </a>
                        </h2>
                        <p class="text-sm text-blue-700 dark:text-blue-300 mb-4 line-clamp-1">Jess GR</p>
                        <p class="text-xs text-gray-600 dark:text-gray-300 line-clamp-6">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor aspernatur provident modi
                            optio tenetur, error assumenda vel delectus, cumque consectetur itaque veritatis nesciunt.
                            Debitis laborum reiciendis rem nulla in sunt ipsam aliquid deleniti explicabo, vero quas
                            quaerat, eum totam! Voluptates saepe aperiam esse hic eaque non magnam corporis r
                        </p>
                    </div>
                </div>
            </div>

            <!-- Libro 3 -->
            <div class="bg-white dark:bg-gray-800 rounded-r-xl flex overflow-hidden hover:scale-102 duration-300  ">
                <a href="#" class="flex-shrink-0">
                    <img src="{{ asset('images/los-juegos-del-hambre-5-amanecer-en-la-cosecha.webp') }}"
                        alt="Portada Amanecer en la cosecha" class="w-auto h-48 object-contain flex-shrink-0" />
                </a>
                <div class="flex flex-col justify-between p-4 w-full">
                    <div>
                        <h2>
                            <a href="#"
                                class="text-lg hover:underline font-bold text-gray-900 dark:text-gray-100 line-clamp-1"
                                title="Amanecer en la cosecha">Amanecer
                                en la cosecha
                            </a>
                        </h2>
                        <p class="text-sm text-blue-700 dark:text-blue-300 mb-4 line-clamp-1">Suzanne Collins</p>
                        <p class="text-xs text-gray-600 dark:text-gray-300 line-clamp-6">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor aspernatur provident modi
                            optio tenetur, error assumenda vel delectus, cumque consectetur itaque veritatis nesciunt.
                            Debitis laborum reiciendis rem nulla in sunt ipsam aliquid deleniti explicabo, vero quas
                            quaerat, eum totam! Voluptates saepe aperiam esse hic eaque non magnam corporis r
                        </p>
                    </div>
                </div>
            </div>

            <!-- Libro 4 -->
            <div class="bg-white dark:bg-gray-800 rounded-r-xl flex overflow-hidden hover:scale-102 duration-300  ">
                <a href="#" class="flex-shrink-0">
                    <img src="{{ asset('images/la-muy-catastrofica-visita-al-zoo-joel-dicker.webp') }}"
                        alt="Portada La muy catastrófica visita al zoo"
                        class="w-auto h-48 object-contain flex-shrink-0" />
                </a>
                <div class="flex flex-col justify-between p-4 w-full">
                    <div>
                        <h2>
                            <a href="#"
                                class="text-lg hover:underline font-bold text-gray-900 dark:text-gray-100 line-clamp-1"
                                title="La muy catastrófica visita al zoo">La
                                muy catastrófica visita al zoo
                            </a>
                        </h2>
                        <p class="text-sm text-blue-700 dark:text-blue-300 mb-4 line-clamp-1">Joël Dicker</p>
                        <p class="text-xs text-gray-600 dark:text-gray-300 line-clamp-6">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor aspernatur provident modi
                            optio tenetur, error assumenda vel delectus, cumque consectetur itaque veritatis nesciunt.
                            Debitis laborum reiciendis rem nulla in sunt ipsam aliquid deleniti explicabo, vero quas
                            quaerat, eum totam! Voluptates saepe aperiam esse hic eaque non magnam corporis r
                        </p>
                    </div>
                </div>
            </div>

            <!-- Libro 5 -->
            <div class="bg-white dark:bg-gray-800 rounded-r-xl flex overflow-hidden hover:scale-102 duration-300  ">
                <a href="#" class="flex-shrink-0">
                    <img src="{{ asset('images/morir-no-es-tan-facil.webp') }}" alt="Portada Morir no es tan fácil"
                        class="w-auto h-48 object-contain flex-shrink-0" />
                </a>
                <div class="flex flex-col justify-between p-4 w-full">
                    <div>
                        <h2>
                            <a href="#"
                                class="text-lg hover:underline font-bold text-gray-900 dark:text-gray-100 line-clamp-1"
                                title="Morir no es tan fácil">Morir
                                no es tan fácil
                            </a>
                        </h2>
                        <p class="text-sm text-blue-700 dark:text-blue-300 mb-4 line-clamp-1">Belinda Bauer</p>
                        <p class="text-xs text-gray-600 dark:text-gray-300 line-clamp-6">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor aspernatur provident modi
                            optio tenetur, error assumenda vel delectus, cumque consectetur itaque veritatis nesciunt.
                            Debitis laborum reiciendis rem nulla in sunt ipsam aliquid deleniti explicabo, vero quas
                            quaerat, eum totam! Voluptates saepe aperiam esse hic eaque non magnam corporis r
                        </p>
                    </div>
                </div>
            </div>

            <!-- Libro 6 -->
            <div class="bg-white dark:bg-gray-800 rounded-r-xl flex overflow-hidden hover:scale-102 duration-300  ">
                <a href="#" class="flex-shrink-0">
                    <img src="{{ asset('images/rebelion-en-la-granja.webp') }}" alt="Portada Rebelión en la granja"
                        class="w-auto h-48 object-contain flex-shrink-0" />
                </a>
                <div class="flex flex-col justify-between p-4 w-full">
                    <div>
                        <h2>
                            <a href="#"
                                class="text-lg hover:underline font-bold text-gray-900 dark:text-gray-100 line-clamp-1"
                                title="Rebelión en la granja">Rebelión
                                en la granja
                            </a>
                        </h2>
                        <p class="text-sm text-blue-700 dark:text-blue-300 mb-4 line-clamp-1">George Orwell</p>
                        <p class="text-xs text-gray-600 dark:text-gray-300 line-clamp-6">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor aspernatur provident modi
                            optio tenetur, error assumenda vel delectus, cumque consectetur itaque veritatis nesciunt.
                            Debitis laborum reiciendis rem nulla in sunt ipsam aliquid deleniti explicabo, vero quas
                            quaerat, eum totam! Voluptates saepe aperiam esse hic eaque non magnam corporis r
                        </p>
                    </div>
                </div>
            </div>

            <!-- Libro 7 -->
            <div class="bg-white dark:bg-gray-800 rounded-r-xl flex overflow-hidden hover:scale-102 duration-300  ">
                <a href="#" class="flex-shrink-0">
                    <img src="{{ asset('images/El-senor-de-los-anillos-las-dos-torres.webp') }}"
                        alt="Portada El señor de los anillos: Las dos torres"
                        class="w-auto h-48 object-contain flex-shrink-0" />
                </a>
                <div class="flex flex-col justify-between p-4 w-full">
                    <div>
                        <h2>
                            <a href="#"
                                class="text-lg hover:underline font-bold text-gray-900 dark:text-gray-100 line-clamp-1"
                                title="El Señor de los Anillos: Las Dos Torres">El
                                Señor de los Anillos: Las Dos Torres
                            </a>
                        </h2>
                        <p class="text-sm text-blue-700 dark:text-blue-300 mb-4 line-clamp-1">J. R. R. Tolkien</p>
                        <p class="text-xs text-gray-600 dark:text-gray-300 line-clamp-6">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor aspernatur provident modi
                            optio tenetur, error assumenda vel delectus, cumque consectetur itaque veritatis nesciunt.
                            Debitis laborum reiciendis rem nulla in sunt ipsam aliquid deleniti explicabo, vero quas
                            quaerat, eum totam! Voluptates saepe aperiam esse hic eaque non magnam corporis r
                        </p>
                    </div>
                </div>
            </div>

            <!-- Libro 8 -->
            <div class="bg-white dark:bg-gray-800 rounded-r-xl flex overflow-hidden hover:scale-102 duration-300  ">
                <a href="#" class="flex-shrink-0">
                    <img src="{{ asset('images/el-senor-de-los-anillos-el-retorno-del-rey.webp') }}"
                        alt="Portada El señor de los anillos: El retorno del rey"
                        class="w-auto h-48 object-contain flex-shrink-0" />
                </a>
                <div class="flex flex-col justify-between p-4 w-full">
                    <div>
                        <h2>
                            <a href="#"
                                class="text-lg hover:underline font-bold text-gray-900 dark:text-gray-100 line-clamp-1"
                                title="El Señor de los Anillos: El Retorno del Rey">El
                                Señor de los Anillos: El Retorno del Rey
                            </a>
                        </h2>
                        <p class="text-sm text-blue-700 dark:text-blue-300 mb-4 line-clamp-1">J. R. R. Tolkien</p>
                        <p class="text-xs text-gray-600 dark:text-gray-300 line-clamp-6">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor aspernatur provident modi
                            optio tenetur, error assumenda vel delectus, cumque consectetur itaque veritatis nesciunt.
                            Debitis laborum reiciendis rem nulla in sunt ipsam aliquid deleniti explicabo, vero quas
                            quaerat, eum totam! Voluptates saepe aperiam esse hic eaque non magnam corporis r
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
