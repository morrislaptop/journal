<?php

namespace Morrislaptop\Journal\Http\Livewire;

use App\Models\User;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filter;
use Rappasoft\LaravelLivewireTables\DataTableComponent;

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
