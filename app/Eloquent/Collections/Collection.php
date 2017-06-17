<?php

namespace App\Eloquent\Collections;

use App\Eloquent\Models\Model;

class Collection extends \Illuminate\Database\Eloquent\Collection
{
    use \App\Helpers\CollectionTrait, CollectionTrait;
}