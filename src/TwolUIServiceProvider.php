<?php

namespace Ercanertan\TwolUI;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Ercanertan\TwolUI\Commands\TwolUICommand;

class TwolUIServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('twol-ui')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_twol-ui_table')
            ->hasCommand(TwolUICommand::class);
    }
}
