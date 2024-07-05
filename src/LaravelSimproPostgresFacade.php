<?php

namespace StitchDigital\LaravelSimproPostgres;

use Illuminate\Support\Facades\Facade;

/**
 * @see \StitchDigital\LaravelSimproPostgres\Skeleton\SkeletonClass
 */
class LaravelSimproPostgresFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-simpro-postgres';
    }
}
