<?php

namespace MHA\LaravelDuskBrowserConsole;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use MHA\LaravelDuskBrowserConsole\Commands\LaravelDuskBrowserConsoleCommand;

class LaravelDuskBrowserConsoleServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-dusk-browser-console')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-dusk-browser-console_table')
            ->hasCommand(LaravelDuskBrowserConsoleCommand::class);
    }
}
