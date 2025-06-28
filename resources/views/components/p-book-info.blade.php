@props(['emoji', 'label', 'value'])

<p
    {{ $attributes->merge([
        'class' => 'text-base text-gray-600 dark:text-gray-300 mb-2 text-left flex items-center gap-2',
    ]) }}>
    <span class="text-lg">{{ $emoji }}</span>
    <span class="font-semibold">{{ $label }}:</span> {{ $value }}
</p>
