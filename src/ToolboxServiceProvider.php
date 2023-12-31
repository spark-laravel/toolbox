<?php

namespace SparkLaravel\Toolbox;

use SparkLaravel\Toolbox\Commands\ToolboxCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ToolboxServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('toolbox')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_toolbox_table')
            ->hasCommand(ToolboxCommand::class);
    }
}
