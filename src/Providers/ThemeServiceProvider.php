<?php

namespace ArtisanCMS\Theme\Providers;

use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('Theme', function ($app) {
            return new ArtisanCMS\Theme\Theme();
        });
        // if (! $this->app->routesAreCached()) {
        //     require __DIR__.'/../routes.php';
        // }

        // require __DIR__ . '/../menu.php';

        // $this->publishes([
        //     __DIR__.'/../config/artisancms-blog.php' => config_path('artisancms-blog.php'),
        // ]);

        // $this->loadMigrationsFrom(__DIR__ . '/../database/migrations/');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
