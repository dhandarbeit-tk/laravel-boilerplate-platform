<?php

namespace App\Eloquent\Collections;

use App\Eloquent\Models\Model;

trait CollectionTrait
{
    public function delete()
    {
        $this->each(function(Model $model) {
            $model->delete();
        });
    }

    public function without($model = null)
    {
        if($model === null) {
            return new static($this);
        }

        $collection = $this->keyBy('id');

        return $collection->forget($model->id);
    }

    public function appends($attributes)
    {
        $this->each(function($model) use($attributes) {
            /** Model $model */
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