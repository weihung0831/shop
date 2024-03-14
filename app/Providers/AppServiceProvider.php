<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;

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
        date_default_timezone_set('Asia/Taipei');
        Carbon::setLocale('zh-TW');

        Blade::component('header', \App\View\Components\HeaderComponent::class);
        Blade::component('footer', \App\View\Components\FooterComponent::class);
        Blade::component('food', \App\View\Components\FoodComponent::class);
        Blade::component('about', \App\View\Components\AboutComponent::class);
        Blade::component('book', \App\View\Components\BookComponent::class);
    }
}
