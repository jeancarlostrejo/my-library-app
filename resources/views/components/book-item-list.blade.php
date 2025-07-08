@props(['imageUrl', 'titleBook', 'authorBook', 'synopsis', 'href' => '#'])

{{-- Book item layout for the list view --}}
<div class="bg-white dark:bg-gray-800 rounded-r-xl flex overflow-hidden hover:scale-102 duration-300 ">
    <a href="{{ $href }}" class="flex-shrink-0">
        <img src="{{ Storage::url($imageUrl) }}" alt="Portada del libro" class="w-32 h-50 object-fill flex-shrink-0" />
    </a>
    <div class="flex flex-col justify-between p-4 w-full">
        <div>
            <h2>
                <a href="{{ $href }}"
                    class="text-lg hover:underline font-medium text-gray-900 dark:text-gray-100 line-clamp-1"
                    title="{{ $titleBook }}">{{ $titleBook }}
                </a>
            </h2>
            <p class="text-sm text-gray-400 dark:text-blue-300 font-medium dark:font-normal mb-4 line-clamp-1">
                {{ $authorBook }}</p>
            <p class="text-sm text-gray-600 dark:text-gray-300 line-clamp-5">
                {{ $synopsis }}
            </p>
        </div>
    </div>
</div>
