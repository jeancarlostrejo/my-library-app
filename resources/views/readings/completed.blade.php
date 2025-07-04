<x-layout>
  <x-slot name="title">Libros leídos | Mi Biblioteca</x-slot>

  <x-books-list legend="✅ Lecturas completadas ✅" route="readings.completed.show" :books="$booksCompleted" />
</x-layout>
