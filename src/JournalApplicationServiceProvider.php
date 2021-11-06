<?php

namespace Morrislaptop\Journal;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class JournalApplicationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->authorization();
    }

    /**
     * Configure the Journal authorization services.
     *
     * @return void
     */
    protected function authorization()
    {
        $this->gate();

        Journal::auth(function ($request) {
            return app()->environment('local') ||
                   Gate::check('viewJournal', [$request->user()]);
        });
    }

    /**
     * Register the Journal gate.
     *
     * This gate determines who can access Journal in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewJournal', function ($user = null) {
            return in_array($user->email, [
                //
            ]);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
