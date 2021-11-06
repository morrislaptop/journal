<?php

namespace Morrislaptop\Journal\Http\Livewire;

use Livewire\Component;

class NumberOfEventsCard extends Component
{
    public bool $polling = true;

    public function render()
    {
        $storedEventModel = (string) config('event-sourcing.stored_event_model', EloquentStoredEvent::class);

        return view('journal::livewire.card', [
            'icon' => 'heroicon-o-scale',
            'label' => 'Total Events',
            'value' => $storedEventModel::count(),
        ]);
    }
}
