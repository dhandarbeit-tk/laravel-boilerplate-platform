<?php

namespace App\Eloquent\Models;

use App\Eloquent\Models\Traits\IsModel;

/**
 * Class Model
 *
 * @package App\Eloquent\Models
 * @method static static create($attributes = [])
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Eloquent\Models\Model newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Eloquent\Models\Model newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Eloquent\Models\Model query()
 */
class Model extends \Illuminate\Database\Eloquent\Model
{
    use IsModel;
}
