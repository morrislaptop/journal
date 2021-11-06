<?php

namespace Morrislaptop\Journal;

use Livewire\Livewire;
use Morrislaptop\Journal\Commands\InstallCommand;
use Morrislaptop\Journal\Http\Livewire\EventsPastHourCard;
use Morrislaptop\Journal\Http\Livewire\EventsPastSevenDaysCard;
use Morrislaptop\Journal\Http\Livewire\EventsTable;
use Morrislaptop\Journal\Http\Livewire\NumberOfEventsCard;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
