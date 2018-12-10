<?php

namespace App\Eloquent\Models\Pivots;

use App\Eloquent\Models\Pivots\Traits\IsPivot;

/**
 * App\Eloquent\Models\Pivots\Pivot
 *
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Eloquent\Models\Pivots\Pivot newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Eloquent\Models\Pivots\Pivot newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Eloquent\Models\Pivots\Pivot query()
 */
class Pivot extends \Illuminate\Database\Eloquent\Relations\Pivot {
    use IsPivot;
}