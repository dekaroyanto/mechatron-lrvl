<?php

namespace App\Providers;

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
        Paginator::useBootstrapFour();

        // Share cached site_settings to ALL views (avoids repeated DB calls per page)
        // Guarded with hasTable() so artisan commands (e.g. migrate:fresh) don't crash
        // when this table doesn't exist yet, since provider boot() runs before the
        // command itself executes.
        if (Schema::hasTable('site_settings')) {
            View::share('sitesettings', Cache::remember('site_settings', 3600, fn () => SiteSetting::first()));
        }

        //
        \URL::forceRootUrl(\Config::get('app.url'));
        // And this if you wanna handle https URL scheme
        // It's not usefull for http://www.example.com, it's just to make it more independant from the constant value
        if (\Str::contains(\Config::get('app.url'), 'https://')) {
            \URL::forceScheme('https');
            //use \URL:forceSchema('https') if you use laravel < 5.4
        }
    }
}
