#Laravel Boilerplate for Platforms

##Installation
`composer create-project dhandarbeit-tk/laravel-boilerplate-platform`

##Packages
- [laravelcollective/html](https://github.com/laravelcollective/html)
- [sentry/sentry-laravel](https://github.com/sentry/sentry-laravel)
- [caouecs/laravel-lang](https://github.com/caouecs/laravel-lang)


- [barryvdh/laravel-ide-helper](https://github.com/barryvdh/laravel-ide-helper)

##Directories
- app/Helpers
- app/Eloquent/Models
- app/Eloquent/Models/Pivots

##Helper Functions
(app/Helpers/functions.php)

- dispatchNow($job)
    - shorthand for Dispatcher->dispatchNow()
- now()
    - shorthand for \Carbon\Carbon::now()

##Classes and methods
- App\Eloquent\Models\Model (trait: IsModel)
    - is($model = null) (**overwrite**)
        - allows argument to be null (returns false)
    - isClass($class)    


- App\Eloquent\Models\Pivots\Pivot (trait: IsPivot)


- App\Helpers\Collection (trait: CollectionTrait)
    - implode($value, $glue = null, $skipNull = false) (**overwrite**)
        - allows to skip null


- App\Eloquent\Collections\Collection (trait: CollectionTrait)
    - without($model = null)
        - return a new Collection without this model
    
##Commands
Yet none.