<?php

namespace App\Eloquent\Models\Traits;

use App\Eloquent\Collections\Collection;
use Illuminate\Support\Str;

trait IsModel
{
    use HasTimestamps;

    /**
     * Determine if two models have the same ID and belong to the same table.
     *
     * Boilerplate changes: allow $model to be null
     *
     * @param  \Illuminate\Database\Eloquent\Model|null  $model
     * @return bool
     */
    public function is($model = null)
    {
        if($model === null) {
            return false;
        }

        return parent::is($model);
    }

    /**
     * Determine if class of $this has string pattern of $class, using Str helper
     *
     * @param $class
     * @return bool
     */
    public function isClass($class)
    {
        return Str::is($class, static::class);
    }

    /**
     * Create a new Eloquent Collection instance.
     *
     * @param  array  $models
     * @return \App\Eloquent\Collections\Collection
     */
    public function newCollection(array $models = [])
    {
        return new Collection($models);
    }
}
