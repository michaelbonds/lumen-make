<?php

namespace MichaelB\LumenMake\Commands;

use Illuminate\Console\GeneratorCommand;

class ModelMakeCommand extends GeneratorCommand
{
    /**
     * @var string
     */
    protected $name = 'make:model';

    /**
     * @var string
     */
    protected $description = 'Make a new model.';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__.'/stubs/model.stub';
    }

    protected function getRootNamespace($namespace)
    {
        return $namespace;
    }
}
