<?php

namespace App\Eloquent\Traits;

use App\Eloquent\Collections\Collection;
use Illuminate\Support\Str;

trait IsModel
{
    use HasTimestamps;

    public function is(\Illuminate\Database\Eloquent\Model $model = null)
    {
        if($model === null) {
            return false;
        }

        return parent::is($model);
    }

    public function isClass($class)
    {
        return Str::is($class, static::class);
    }

    public function newCollection(array $models = [])
    {
        return new Collection($models);
    }
}
