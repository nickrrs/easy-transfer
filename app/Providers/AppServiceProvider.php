<?php

namespace App\Providers;

use App\Models\Shopkeeper;
use App\Models\User;
use App\Observers\ShopkeeperObserver;
use App\Observers\UserObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        User::observe(UserObserver::class);
        Shopkeeper::observe(ShopkeeperObserver::class);
    }
}
