<?php

namespace Mojoblanco\ArtisanStart;

use Illuminate\Support\ServiceProvider;

class ArtisanStartServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->commands([
            StartCommand::class
        ]);
    }
}
