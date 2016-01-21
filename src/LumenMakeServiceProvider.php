<?php

namespace MichaelB\LumenMake;

use Illuminate\Support\ServiceProvider;
use MichaelB\LumenMake\Commands\JobMakeCommand;
use MichaelB\LumenMake\Commands\ConsoleMakeCommand;
use MichaelB\LumenMake\Commands\ControllerMakeCommand;
use MichaelB\LumenMake\Commands\ModelMakeCommand;
use MichaelB\LumenMake\Commands\MiddlewareMakeCommand;
use MichaelB\LumenMake\Commands\ExceptionMakeCommand;
use MichaelB\LumenMake\Commands\EventMakeCommand;


class LumenMakeServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->commands(JobMakeCommand::class);
        $this->commands(ConsoleMakeCommand::class);
        $this->commands(ControllerMakeCommand::class);
        $this->commands(ModelMakeCommand::class);
        $this->commands(MiddlewareMakeCommand::class);
        $this->commands(ExceptionMakeCommand::class);
        $this->commands(EventMakeCommand::class);
    }
}
