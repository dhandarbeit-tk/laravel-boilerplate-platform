<?php

namespace App\Eloquent\Collections;

use App\Eloquent\Models\Model;

/**
 * Trait CollectionTrait
 * @package App\Eloquent\Collections
 */
trait CollectionTrait
{
    public function without(Model $model = null)
    {
        if($model === null) {
            return new static($this);
        }

        $collection = $this->keyBy('id');

        return $collection->forget($model->id);
    }

    public function eachDelete()
    {
        $this->each(function(Model $model) {
            $model->delete();
        });
    }

    public function eachAppends($attributes)
    {
        $this->each(function(Model $model) use($attributes) {
            $model->append($attributes);
        });

        return $this;
    }

    public function update($attributes)
    {
        $this->each(function(Model $model) use($attributes) {
            $model->fill($attributes)->save();
        });
    }
}