<?php

namespace Morrislaptop\Journal;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Morrislaptop\Journal\Journal
 */
class JournalFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'journal';
    }
}
