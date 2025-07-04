<x-layout>
    <x-slot name="title">{{ $book->title }} por {{ $book->author->name }} | Mi Biblioteca</x-slot>

    <x-book-show :book="$book" legend="⏳ Próximamante ⏳" />
</x-layout>
