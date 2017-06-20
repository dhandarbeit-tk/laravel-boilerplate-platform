<?php

function dispatchNow($job)
{
    return app(\Illuminate\Contracts\Bus\Dispatcher::class)->dispatchNow($job);
}

/**
 * @return \App\Helpers\Carbon
 */
function now()
{
    return \App\Helpers\Carbon::now();
}

/**
 * Create a collection from the given value.
 *
 * @param  mixed  $value
 * @return \App\Helpers\Collection
 */
function collect($value = null)
{
    return new \App\Helpers\Collection($value);
}