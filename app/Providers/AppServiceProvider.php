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
        /**
         * EN PRODUCCION DESCOMENTAR O ENCONTRAR LA FORMA DE QUE SE SUBA Y SE USE EN PRODUCCION
         * $this->app->bind('path.public', function(){
         *   return base_path('public_html')
         * })
         */

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
