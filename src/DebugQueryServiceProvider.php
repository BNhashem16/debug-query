<?php
namespace Bnhashem\DebugQuery;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class DebugQueryServiceProvider extends ServiceProvider
{
    
    public function register()
    {
        Builder::macro('sql', function () {
            $bindings = $this->getBindings();
            $query = $this->toSql();
            $sql = Str::replaceArray('?', $bindings, $query);
            dd($sql);
        });
    }
}
