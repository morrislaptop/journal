<?php

namespace Morrislaptop\Journal\Tests;

use Livewire\LivewireServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;
use Morrislaptop\Journal\JournalServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Morrislaptop\Journal\JournalApplicationServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Morrislaptop\\Journal\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LivewireServiceProvider::class,
            JournalApplicationServiceProvider::class,
            JournalServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_journal_table.php.stub';
        $migration->up();
        */
    }
}
