@props(['legend' => '', 'books', 'route' => '#'])


{{-- Layout for the upcoming readings page --}}
<div class="max-w-6xl mx-auto px-4 py-8 mt-16">
    <h1
        class="text-3xl font-bold text-gray-700 dark:text-blue-300 mb-4 p-4 text-center animate-fade-in animate-duration-500">
        {{ $legend }}</h1>

    <div
        class=" grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 min-h-auto animate-fade-in-up animate-duration-1000 animate-delay-[800ms]">

        @forelse ($books as  $book)
            <x-book-item-list href="{{ route($route, $book) }}" imageUrl="{{ $book->cover_image }}"
                titleBook="{{ $book->title }}" authorBook="{{ $book->author->name }}" synopsis="{{ $book->synopsis }}" />
        @empty
            <div class="col-span-1 md:col-span-2 lg:col-span-3 text-center">
                <p class="text-gray-800 dark:text-gray-400">No hay libros disponibles en este momento.</p>
            </div>
        @endforelse

    </div>
    <div class="mt-8">
        {{ $books->links() }}
    </div>
</div>
