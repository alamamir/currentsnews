<?php

namespace Bamawebsite\CurrentsNews;

use Illuminate\Support\ServiceProvider;

class CurrentsNewsServiceProvider extends ServiceProvider 
{
    public function register()
    {
        $this->app->singleton(CurrentsNews::class,function ()
        {
            return new CurrentsNews();
        });
    }
    public function boot()
    {
        $this->publishes([
            __DIR__ . "/../config/currentsnews.php"=>config_path('currentsnews.php')
        ]);
    }
}
