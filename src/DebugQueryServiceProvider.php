<?php

namespace Hashem\DebugQuery;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class DebugQueryServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        // $package
        //     ->name('debug-query')
        //     ->hasConfigFile()
        //     ->hasViews()
        //     ->hasMigration('create_debug-query_table')
        //     ->hasCommand(DebugQueryCommand::class);
    }

    public function register()
    {
        Builder::macro('sql', function () {
            $bindings = $this->getBindings();
            $query = $this->toSqlWithBindings();
            $sql = Str::replaceArray('?', $bindings, $query);
            dd($sql);
        });
    }
}
