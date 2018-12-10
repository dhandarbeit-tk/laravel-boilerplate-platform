<?php

/**
 * Create a collection from the given value.
 *
 * @param  mixed  $value
 * @return \App\Support\Collection
 */
function collect($value = null)
{
    return new \App\Support\Collection($value);
}

function array_ensured($array, $data) {
    $array = (array) $array;

    foreach($data as $key => $value) {
        if (!isset($array[$key])) {
            $array[$key] = $value;
        }
    }

    return $array;
}

/**
 * Get the currently authenticated user.
 *
 * @return \App\Eloquent\Models\User|null
 */
function user() {
    return auth()->user();
}

function decodeHashid($connection, $encoded, $default = null) {
    $decoded = \Hashids::connection($connection)->decode($encoded);

    if(isset($decoded[0])) {
        return $decoded[0];
    }

    return $default;
}

function encodeHashid($connection, $decoded) {
    return \Hashids::connection($connection)->encode($decoded);
}

/**
 * @return bool
 */
function isCurrentRelease() {
    return app()->environment('local') || \Illuminate\Support\Str::is(readlink(base_path('../../current')), base_path());
}