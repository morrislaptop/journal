<?php

namespace Morrislaptop\LaravelEventSourcingUi\Commands;

use Illuminate\Console\Command;

class LaravelEventSourcingUiCommand extends Command
{
    public $signature = 'laravel-event-sourcing-ui';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
