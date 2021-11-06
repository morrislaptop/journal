<?php

namespace Morrislaptop\Journal\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'journal:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install all of the Journal resources';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->comment('Publishing Journal Service Provider...');
        $this->callSilent('vendor:publish', ['--tag' => 'journal-provider']);

        $this->comment('Publishing Journal Configuration...');
        $this->callSilent('vendor:publish', ['--tag' => 'journal-config']);

        $this->registerJournalServiceProvider();

        $this->info('Journal scaffolding installed successfully.');
    }

    /**
     * Register the Journal service provider in the application configuration file.
     *
     * @return void
     */
    protected function registerJournalServiceProvider()
    {
        $namespace = Str::replaceLast('\\', '', $this->laravel->getNamespace());

        $appConfig = file_get_contents(config_path('app.php'));

        if (Str::contains($appConfig, $namespace.'\\Providers\\JournalServiceProvider::class')) {
            return;
        }

        $lineEndingCount = [
            "\r\n" => substr_count($appConfig, "\r\n"),
            "\r" => substr_count($appConfig, "\r"),
            "\n" => substr_count($appConfig, "\n"),
        ];

        $eol = array_keys($lineEndingCount, max($lineEndingCount))[0];

        file_put_contents(config_path('app.php'), str_replace(
            "{$namespace}\\Providers\RouteServiceProvider::class,".$eol,
            "{$namespace}\\Providers\RouteServiceProvider::class,".$eol."        {$namespace}\Providers\JournalServiceProvider::class,".$eol,
            $appConfig
        ));

        file_put_contents(app_path('Providers/JournalServiceProvider.php'), str_replace(
            "namespace App\Providers;",
            "namespace {$namespace}\Providers;",
            file_get_contents(app_path('Providers/JournalServiceProvider.php'))
        ));
    }
}
