<?php

namespace Bootstrapper\Facades;

/**
 * Facade for Bootstrapper Badges
 *
 * @package Bootstrapper\Facades
 * @see     Bootstrapper\Badge
 */
class Badge extends BootstrapperFacade
{

    protected static function getFacadeAccessor()
    {
        return 'badge';
    }

}
