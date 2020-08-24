<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */

     //Server contained
    public function register()
    {
        $this->app->bind(
            'App\Repositories\Interfaces\IExampleRepository',
            'App\Repositories\ExampleRepository',
        );
    }
}
