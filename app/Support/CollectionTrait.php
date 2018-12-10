<?php

namespace App\Support;

trait CollectionTrait
{
    public function implode($value, $glue = null, $skipNull = false)
    {
        if($skipNull) {
            $collection = $this->filter(function($value) {
                return $value !== null;
            });

            return $collection->implode($value, $glue);
        }

        return parent::implode($value, $glue);
    }
}