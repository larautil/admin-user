<?php

namespace LaraUtil\AdminUser;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use LaraUtil\AdminUser\Commands\AdminUserCommand;

class AdminUserServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('admin-user')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_admin-user_table')
            ->hasCommand(AdminUserCommand::class);
    }
}
