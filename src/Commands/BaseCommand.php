<?php

namespace MichaelB\LumenMake\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Str;

abstract class BaseCommand extends GeneratorCommand
{

    protected function getPath($name = '')
    {
        $name = str_replace('App\\', '', $name);
        return $this->laravel['path'].'/'.str_replace('\\', '/', $name).'.php';
    }

    protected function parseName($name)
    {
        $rootNamespace = 'App\\';

        if (Str::startsWith($name, $rootNamespace)) {
            return $name;
        }

        if (Str::contains($name, '/')) {
            $name = str_replace('/', '\\', $name);
        }

        return $this->parseName($this->getDefaultNamespace(trim($rootNamespace, '\\')).'\\'.$name);
    }

    protected function replaceNamespace(&$stub, $name)
    {
        $stub = str_replace(
            'DummyNamespace', $this->getNamespace($name), $stub
        );

        $stub = str_replace(
            'DummyRootNamespace', 'App\\', $stub
        );

        return $this;
    }
}

