<?php

namespace App\Eloquent\Models;

use App\Eloquent\Traits\HasTimestamps;

class Model extends \Illuminate\Database\Eloquent\Model
{
    use HasTimestamps;

    public function is(\Illuminate\Database\Eloquent\Model $model = null)
    {
        if($model === null) {
            return false;
        }

        return \Illuminate\Database\Eloquent\Model::is($model);
    }
}
