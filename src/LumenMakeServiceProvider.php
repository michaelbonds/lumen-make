<?php

namespace MichaelB\LumenMake;

use Illuminate\Support\ServiceProvider;
use MichaelB\LumenMake\Commands\JobMakeCommand;
use MichaelB\LumenMake\Commands\ConsoleMakeCommand;
use MichaelB\LumenMake\Commands\ControllerMakeCommand;
use MichaelB\LumenMake\Commands\ModelMakeCommand;


class LumenMakeServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->registerNewCommand('job', JobMakeCommand::class);
        $this->registerNewCommand('console', ConsoleMakeCommand::class);
        $this->registerNewCommand('controller', ControllerMakeCommand::class);
        $this->registerNewCommand('model', ModelMakeCommand::class);
    }

    private function registerNewCommand($name = '', $class = '')
    {
        $this->app->singleton('michaelb.lumen-make.'.$name, function ($app) use ($class) {
            return $app[$class];
        });

        $this->commands('michaelb.lumen-make.'.$name);
    }
}
