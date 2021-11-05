<?php

namespace Morrislaptop\LaravelEventSourcingUi;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Morrislaptop\LaravelEventSourcingUi\LaravelEventSourcingUi
 */
class LaravelEventSourcingUiFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-event-sourcing-ui';
    }
}
