<?php

namespace App\Console\Commands;

use Illuminate\Foundation\Console\ModelMakeCommand;
use Illuminate\Support\Str;

class MakeModel extends ModelMakeCommand
{
    public function getDefaultNamespace($rootNamespace)
    {
        return 'App\Eloquent\Models';
    }

    protected function getStub()
    {
        return __DIR__.'/../stubs/model.stub';
    }

    protected function replaceClass($stub, $name)
    {
        $stub = parent::replaceClass($stub, $name);

        $class = str_replace($this->getNamespace($name).'\\', '', $name);

        return str_replace('DummyTable', Str::plural(Str::snake($class)), $stub);
    }
}
