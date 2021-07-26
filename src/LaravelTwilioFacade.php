<?php

namespace Alecgarcia\LaravelTwilio;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Alecgarcia\LaravelTwilio\Skeleton\SkeletonClass
 */
class LaravelTwilioFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-twilio';
    }
}
