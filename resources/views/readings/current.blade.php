<x-layout>
        <x-slot name="title">{{ $book?->title ?? 'Sin lectura actual' }} por {{ $book?->author->name ?? "Jean Carlos Trejo" }} | Mi Biblioteca</x-slot>

    <x-book-show :book="$book" legend="🌟 Estoy leyendo 🌟"/>

</x-layout>
