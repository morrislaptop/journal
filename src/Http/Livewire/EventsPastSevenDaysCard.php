<?php

namespace Morrislaptop\Journal\Http\Livewire;

use Illuminate\Support\Carbon;
use Livewire\Component;

class EventsPastSevenDaysCard extends Component
{
    public bool $polling = true;

    public function render()
    {
        $storedEventModel = (string) config('event-sourcing.stored_event_model', EloquentStoredEvent::class);

        $value = $storedEventModel::query()
            ->where('created_at', '>', Carbon::now()->subDays(7))
            ->where('created_at', '<', Carbon::now())
            ->count();

        return view('journal::livewire.card', [
            'icon' => 'heroicon-o-archive',
            'label' => 'Events Past 7 Days',
            'value' => $value,
        ]);
    }
}
