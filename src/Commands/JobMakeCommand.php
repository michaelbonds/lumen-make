<?php

namespace MichaelB\LumenMake\Commands;

use Illuminate\Console\GeneratorCommand;

class JobMakeCommand extends GeneratorCommand
{
    /**
     * @var string
     */
    protected $name = 'make:job';

    /**
     * @var string
     */
    protected $description = 'Make a new job.';

    protected $type = 'Job';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__.'/stubs/Job.stub';
    }

    protected function getDefaultNamespace($namespace)
    {
        return $namespace.'\Jobs';
    }
}
