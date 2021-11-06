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

class NumberOfEventsCard extends Component
{
    public bool $polling = true;

    public function render()
    {
        return view('journal::livewire.number-of-events-card', [
            'number' => rand(0, 1000),
        ]);
    }
}
