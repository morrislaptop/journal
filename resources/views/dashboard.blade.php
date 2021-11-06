<x-journal::journal>
    <h2 class="mt-4 text-lg leading-6 font-medium text-gray-900">Overview</h2>

    <div class="mt-2 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
        @foreach (config('journal.cards') as $card)
            <livewire:dynamic-component :component="$card" />
        @endforeach
    </div>

    <h2 class="mt-8 text-lg leading-6 font-medium text-gray-900">
        Events
    </h2>

    <div class="mt-2">
        <livewire:journal::events />
    </div>
</x-journal::journal>
