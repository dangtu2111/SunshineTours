<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public $serviceBindings=[
        'App\Services\Interfaces\UserServiceInterface'=>'App\Services\UserService',
        'App\Repositories\Interfaces\UserRepositoryInterface'=>'App\Repositories\UserRepository',
    ];
    public function register(): void
    {
        foreach($this->serviceBindings as $key => $val){
            $this->app->bind($key,$val);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
