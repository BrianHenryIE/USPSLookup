<?php

namespace Nickcheek\USPSLookup;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Nickcheek\USPSLookup\Skeleton\SkeletonClass
 */
class USPSLookupFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'uspslookup';
    }
}