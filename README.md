# Laravel (5.7) Generic Boilerplate for platforms

Provides useful helper functions and class structure for core functionality of
[laravel/laravel](https://github.com/laravel/laravel).

Built to be customizable.

## Installation
Create project<br />
`composer create-project dhandarbeit-tk/laravel-boilerplate-platform`

## Preinstalled packages
- HTML and Form Builder [laravelcollective/html](https://github.com/laravelcollective/html)
- [doctrine/dbal](https://github.com/doctrine/dbal)
- Laravel IDE Helper [barryvdh/laravel-ide-helper](https://github.com/barryvdh/laravel-ide-helper)
    - registered for **dev env only** (via AppServiceProvider)
- Sentry for Laravel [getsentry/sentry-laravel](https://github.com/getsentry/sentry-laravel)
- [caouecs/laravel-lang](https://github.com/caouecs/laravel-lang)
- Hashids bridge [vinkla/hashids](https://github.com/vinkla/laravel-hashids)


## New Defaults
- LOG_CHANNEL=daily
- database.migrations=**laravel_migrations**
- queue.database.table=**laravel_jobs**
- queue.failed.table=**laravel_failed_jobs**

Other defaults:
- app.locale=de
- app.timezone=Europe/Berlin

## Directories
- app/Support
- app/Eloquent/Models
- app/Eloquent/Collections

## Helper Functions
(app/Support/helpers.php)

- array_ensured($array, $data)
    - return $array, containing all keys of data, and value if $array doesnt have the key
- user()
    - shorthand for auth()->user()
- decodeHashid($connection, $encoded, $default)
    - returns decoded hashid of $encoded for $connection; if not possible, return $default
- encodeHashid($connection, $decoded)
    - returns encoded hashid of $decoded for $connection
- isCurrentRelease()
    - determines if running release is most recent release (useful for deployment related things)

## Customizable classes and methods
- App\Eloquent\Models\Model (trait: IsModel)
    - is($model = null) (**overwrite**)
        - allows argument to be null (returns false)
    - isClass($class)
         
   
- App\Eloquent\Models\Traits\HasTimestamps
    - updateTimestamps() (**overwrite**)
        - only sets updated_at when updating, not when creating


- App\Eloquent\Models\Pivots\Pivot (trait: IsPivot)


- App\Support\Collection (trait: CollectionTrait)
    - implode($value, $glue = null, $skipNull = false) (**overwrite**)
        - allows to skip null


- App\Eloquent\Collections\Collection (trait: CollectionTrait)
    - without($model = null)
        - return a new Collection without $model
    - eachDelete()
        - runs delete() on each model
    - eachAppends($attributes)
        - runs appends($attributes) on each model

## Stubs
- artisan make:model
    - (app/Console/stubs/model.stub)
    - prefills table name
    - has predefined areas for relationships