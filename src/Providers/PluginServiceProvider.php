<?php
namespace Yxx\LaravelPlugin\Providers;

use Illuminate\Support\ServiceProvider;

class PluginServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->register(ConsoleServiceProvider::class);
    }
}