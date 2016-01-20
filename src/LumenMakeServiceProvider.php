<?php

namespace MichaelB\LumenMake;

use Illuminate\Support\ServiceProvider;
use MichaelB\LumenMake\Commands\JobMakeCommand;

class LumenMakeServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('michaelb.lumen-make.job', function ($app) {
            return app[JobMakeCommand::class];
        });
        $this->commands('michaelb.lumen-make.job');
    }

}
