<?php

namespace Morrislaptop\Journal;

use Livewire\Livewire;
use Spatie\LaravelPackageTools\Package;
use Morrislaptop\Journal\Http\Livewire\Counter;
use Morrislaptop\Journal\Commands\InstallCommand;
use Morrislaptop\Journal\Commands\JournalCommand;
use Morrislaptop\Journal\Http\Livewire\EventsTable;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Morrislaptop\Journal\Http\Livewire\EventsPastHourCard;
use Morrislaptop\Journal\Http\Livewire\NumberOfEventsCard;
use Morrislaptop\Journal\Http\Livewire\EventsPerMinuteCard;
use Morrislaptop\Journal\Http\Livewire\EventsPastSevenDaysCard;

class JournalServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('journal')
            ->hasConfigFile()
            ->hasRoute('web')
            ->hasViews()
            ->hasCommand(InstallCommand::class);
    }

    public function bootingPackage(): void
    {
        $this->publishes([
            __DIR__.'/../stubs/JournalServiceProvider.stub' => app_path('Providers/JournalServiceProvider.php'),
        ], 'journal-provider');

        Livewire::component('journal::events', EventsTable::class);
        Livewire::component('journal::number-of-events-card', NumberOfEventsCard::class);
        Livewire::component('journal::events-past-hour-card', EventsPastHourCard::class);
        Livewire::component('journal::events-past-seven-days-card', EventsPastSevenDaysCard::class);
    }
}
