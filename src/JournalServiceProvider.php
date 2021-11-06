<?php

namespace Morrislaptop\Journal;

use Livewire\Livewire;
use Spatie\LaravelPackageTools\Package;
use Morrislaptop\Journal\Http\Livewire\Counter;
use Morrislaptop\Journal\Commands\JournalCommand;
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
            ->hasMigration('create_journal_table')
            ->hasCommand(JournalCommand::class);
    }

    public function bootingPackage(): void
    {
        Livewire::component('journal:counter', Counter::class);
    }
}
