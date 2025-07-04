<x-layout>
    <x-slot name="title">Próximas lecturas | Mi Biblioteca</x-slot>

    <x-books-list legend="⏳Próximas lecturas⏳" route="readings.upcoming.show" :books="$upcomingReadings" />
</x-layout>
