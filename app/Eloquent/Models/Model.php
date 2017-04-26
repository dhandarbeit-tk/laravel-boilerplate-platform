<?php

namespace App\Eloquent\Models;

class Model extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'pages';

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
