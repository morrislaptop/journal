<?php

namespace Morrislaptop\Journal;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Morrislaptop\Journal\Commands\JournalCommand;

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
            ->hasViews()
            ->hasMigration('create_journal_table')
            ->hasCommand(JournalCommand::class);
    }
}
