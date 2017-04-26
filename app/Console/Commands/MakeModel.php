<?php

namespace App\Console\Commands;

use Illuminate\Foundation\Console\ModelMakeCommand;

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
}
