<x-layout>
    <x-slot name="title">Completado - {{ $book->title }}</x-slot>
    <x-book-show :book="$book" legend="✅ Completado ✅" />
</x-layout>
