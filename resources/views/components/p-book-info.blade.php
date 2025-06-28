@props(['emoji', 'label', 'value'])

<p
    {{ $attributes->merge([
        'class' => 'text-base text-gray-600 dark:text-gray-300 mb-2 text-center md:text-left flex flex-col md:flex-row items-center gap-2',
    ]) }}>
    <span class="font-semibold">{{ $emoji }} {{ $label }}:</span> <span>{{ $value }}</span>
</p>
