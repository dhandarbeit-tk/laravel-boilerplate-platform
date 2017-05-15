<?php

namespace App\Eloquent\Traits;

trait HasTimestamps {
    protected function updateTimestamps()
    {
        $time = $this->freshTimestamp();

        if ($this->exists && ! $this->isDirty(static::UPDATED_AT)) {
            $this->setUpdatedAt($time);
        }

        if (! $this->exists && ! $this->isDirty(static::CREATED_AT)) {
            $this->setCreatedAt($time);
        }
    }
}