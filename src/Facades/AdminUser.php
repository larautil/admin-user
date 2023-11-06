<?php

namespace LaraUtil\AdminUser\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LaraUtil\AdminUser\AdminUser
 */
class AdminUser extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \LaraUtil\AdminUser\AdminUser::class;
    }
}
