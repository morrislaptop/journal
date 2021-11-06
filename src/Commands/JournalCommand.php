<?php

namespace Morrislaptop\Journal\Commands;

use Illuminate\Console\Command;

class JournalCommand extends Command
{
    public $signature = 'journal';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
