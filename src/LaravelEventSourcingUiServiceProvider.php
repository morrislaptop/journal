<?php

namespace Morrislaptop\LaravelEventSourcingUi;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Morrislaptop\LaravelEventSourcingUi\Commands\LaravelEventSourcingUiCommand;

class LaravelEventSourcingUiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-event-sourcing-ui')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-event-sourcing-ui_table')
            ->hasCommand(LaravelEventSourcingUiCommand::class);
    }
}
