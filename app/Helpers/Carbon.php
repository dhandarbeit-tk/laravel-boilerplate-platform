<?php

namespace App\Helpers;

class Carbon extends \Carbon\Carbon
{
    public function lt(\Carbon\Carbon $dt = null)
    {
        if($dt === null) {
            return false;
        }

        return parent::lt($dt);
    }

    public function lte(\Carbon\Carbon $dt = null)
    {
        if($dt === null) {
            return false;
        }

        return parent::lte($dt);
    }

    public function gt(\Carbon\Carbon $dt = null)
    {
        if($dt === null) {
            return true;
        }

        return parent::gt($dt);
    }

    public function gte(\Carbon\Carbon $dt = null)
    {
        if($dt === null) {
            return true;
        }

        return parent::gte($dt);
    }
}