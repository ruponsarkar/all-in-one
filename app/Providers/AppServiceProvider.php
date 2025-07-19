<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Tymon\JWTAuth\Facades\JWTAuth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            try {
                $user = auth()->user();
    
                if (!$user) {
                    $token = request()->cookie('jwt_token');
                    if ($token) {
                        $user = JWTAuth::setToken($token)->authenticate();
                    }
                }
    
                $view->with('authUser', $user);
            } catch (\Exception $e) {
                $view->with('authUser', null);
            }
        });
    }
}
