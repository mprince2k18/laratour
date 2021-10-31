<?php

namespace Mprince\Laratour;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mprince\Laratour\Skeleton\SkeletonClass
 */
class LaratourFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laratour';
    }
}
