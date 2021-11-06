<?php

namespace Morrislaptop\Journal\Http\Livewire;

use Illuminate\Support\Carbon;
use Livewire\Component;

class EventsPastHourCard extends Component
{
    public bool $polling = true;

    public function render()
    {
        $storedEventModel = (string) config('event-sourcing.stored_event_model', EloquentStoredEvent::class);

        $value = $storedEventModel::query()
            ->where('created_at', '>', Carbon::now()->subHour())
            ->where('created_at', '<', Carbon::now())
            ->count();

        return view('journal::livewire.card', [
            'icon' => 'heroicon-o-clock',
            'label' => 'Events Past Hour',
            'value' => $value,
        ]);
    }
}
