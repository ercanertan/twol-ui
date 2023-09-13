<?php

namespace Ercanertan\TwolUI;

use Ercanertan\TwolUI\Commands\TwolUICommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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

    public function bootingPackage()
    {
        $this->callAfterResolving(BladeCompiler::class, function (BladeCompiler $blade) {
            $prefix = config('twol-ui.prefix', '');
            $assets = config('twol-ui.assets', []);

            /** @var BladeComponent $component */
            foreach (config('twol-ui.components', []) as $alias => $component) {
                $blade->component($component, $alias, $prefix);

                $this->registerAssets($component, $assets);
            }
        });
    }
}
