<x-layout>
  <x-slot name="title">Lecturas completadas</x-slot>

  <x-books-list legend="✅ Lecturas completadas ✅" route="readings.completed.show" :books="$booksCompleted" />
</x-layout>
