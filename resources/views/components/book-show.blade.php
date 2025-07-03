@props(['legend' => '', 'book'])
<!-- Banner de lectura actual -->

@if ($book)
    <section class="flex flex-col items-center justify-center w-full my-16">
        <h1
            class="text-2xl lg:text-3xl uppercase font-bold py-4 text-gray-700 dark:text-blue-400 mb-2 text-center animate-scale">
            {{ $legend }}
        </h1>

        <!--  Datos del libro -->
        <div
            class="grid grid-cols-1 md:grid-cols-6 md:gap-2 w-full max-w-6xl bg-white dark:bg-gray-800 rounded-lg shadow-xl mx-auto animate-fade-in-up animate-delay-500">

            <div
                class="col-span-1 md:col-span-3 flex items-center justify-center py-4 bg-gradient-to-br from-pink-200 to-blue-200 dark:from-blue-700 dark:to-purple-900 rounded-lg">
                <img src="{{ Storage::url($book->cover_image) }}" alt="Portada del libro"
                    class="max-h-80 md:max-h-100 xl:max-h-110 max-w-full object-contain rounded-lg shadow-2xl animate-zoom-in animate-delay-1000" />
            </div>

            <div class="col-span-1 md:col-span-3 flex flex-col p-4 animate-slide-in-bottom overflow-auto">
                <p
                    class="text-xl md:text-2xl font-extrabold mb-4 leading-tight text-center md:text-left text-gray-800 dark:text-gray-200">
                    {{ $book->title }}
                </p>

                <div>
                    <x-p-book-info emoji="📖" label="Género"
                        value="{{ $book->genres->pluck('name')->implode(', ') }}" />
                    <x-p-book-info emoji="👤" label="Autor" value="{{ $book->author->name }}" />
                    <x-p-book-info emoji="📅" label="Año de Publicación" value="{{ $book->published_year }}" />
                    <x-p-book-info class="mb-10" emoji="📄" label="Páginas" value="{{ $book->pages }}" />

                    <div class="md:text-left">
                        @if ($book->reading_status === \App\Enums\ReadingStatus::READING)
                            <x-p-book-info emoji="📚" label="Estado de Lectura" value="Leyendo" />
                            <x-p-book-info emoji="🏁" label="Inicio de Lectura"
                                value="{{ $book->started_reading_at?->format('d-m-Y') }}" />
                        @endif

                        @if ($book->reading_status === \App\Enums\ReadingStatus::COMPLETED)
                            <x-p-book-info emoji="✅" label="Estado de Lectura" value="Completado" />
                            <x-p-book-info emoji="🏁" label="Inicio de Lectura"
                                value="{{ $book->started_reading_at?->format('d-m-Y') }}" />
                        @endif

                        @if ($book->reading_status === \App\Enums\ReadingStatus::PENDING)
                            <x-p-book-info emoji="⏳" label="Estado de Lectura" value="Pendiente" />
                            <x-p-book-info emoji="🏁" label="Inicio de lectura" value="Próximamente" />
                        @endif

                        <x-p-book-info emoji="📊" label="Progreso"
                            value="{{ $book->porcentage_read }}% ({{ $book->pages_read }} páginas
                    leídas)" />

                        <div class="mx-auto w-1/2 md:w-3/5 md:mx-0 bg-gray-400 dark:bg-gray-700 rounded-full h-2.5">
                            <div class="bg-blue-600 h-2.5 rounded-full transition-all duration-500 ease-out"
                                style="width: {{ $book->porcentage_read }}%">
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
                {{ $book->synopsis }}
            </p>
        </div>
    </section>

    <!-- Información sobre el autor-->
    <section
        class="w-full max-w-6xl p-6 flex flex-col gap-4 bg-white dark:bg-gray-800 rounded-lg shadow-xl mb-8 mx-auto animate-fade-in-right animate-delay-1000">
        <h3 class="text-2xl md:text-3xl font-bold text-gray-700 dark:text-blue-400 mb-4 text-center md:text-left">
            Sobre el autor: {{ $book->author->name }}
        </h3>

        <div class="grid grid-cols-1 md:grid-cols-6 gap-8">
            <figure
                class="md:col-span-2 flex flex-col items-center md:items-start rounded-lg justify-center md:justify-start">
                <img src="{{ Storage::url($book->author->photo) }}" alt="Foto de J. R. R. Tolkien"
                    class="w-full max-w-xs md:max-w-md max-h-100 shadow-2xl object-contain rounded-lg animate-zoom-in animate-delay-500" />
                <figcaption class="w-full text-center mt-2 italic">{{ $book->author->name }}</figcaption>
            </figure>

            <div class="md:col-span-4 items-left sm:justify-center md:justify-start">
                <p class="text-base md:text-lg text-gray-700 dark:text-gray-200 leading-relaxed text-left">
                    {{ $book->author->description }}
                </p>

            </div>
        </div>

    </section>
@else
    <div class="max-w-6xl mx-auto px-4 py-8 mt-16">
        <h1 class="text-3xl font-bold text-gray-700 dark:text-blue-300 mb-4 p-4 text-center">
            Actualmente no estoy leyendo 😴
        </h1>
@endif
