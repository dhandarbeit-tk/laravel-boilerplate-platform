<?php

namespace App\Eloquent\Models\Pivots;

use App\Eloquent\Traits\IsPivot;

class Pivot extends \Illuminate\Database\Eloquent\Relations\Pivot {
    use IsPivot;
}