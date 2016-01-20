<?php

namespace MichaelB\LumenMake\Commands;

use Illuminate\Console\GeneratorCommand;

class ExceptionMakeCommand extends GeneratorCommand
{
    /**
     * @var string
     */
    protected $name = 'make:exception';

    /**
     * @var string
     */
    protected $description = 'Make a new application exception.';

    protected $type = 'Exception';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__.'/stubs/exception.stub';
    }

    protected function getDefaultNamespace($namespace)
    {
        return $namespace.'\Exceptions';
    }
}
