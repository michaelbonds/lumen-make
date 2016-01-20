<?php

namespace MichaelB\LumenMake\Commands;

use Illuminate\Console\GeneratorCommand;

class JobMakeCommand extends GeneratorCommand
{
    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__.'./stubs/Job.stub';
    }

    protected function getRootNamespace($namespace)
    {
        return $namespace.'\Jobs';
    }
}
