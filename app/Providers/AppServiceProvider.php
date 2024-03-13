<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
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
        Blade::component('header', \App\View\Components\HeaderComponent::class);
        Blade::component('footer', \App\View\Components\FooterComponent::class);
        Blade::component('food', \App\View\Components\FoodComponent::class);
    }
}
