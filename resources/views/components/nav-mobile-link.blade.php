@props(['href', 'active' => false])

<a href="{{ $href ?? '#' }}"
    {{ $attributes->merge([
        'class' =>
            'text-gray-700 dark:text-gray-200 hover:bg-blue-600 hover:text-white block px-3 py-2 rounded-md text-base font-medium transition-colors duration-200 ' .
            ($active ? 'bg-blue-600 text-white' : ''),
    ]) }}>
    {{ $slot }}
</a>
