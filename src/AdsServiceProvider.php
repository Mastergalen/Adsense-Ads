<?php

namespace Mastergalen\AdsenseAds;

use Illuminate\Support\ServiceProvider;
use App;

class AdsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/ads.php' => config_path('ads.php'),
        ]);

        $this->loadViewsFrom(__DIR__.'/views', 'adsense-ads');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('adsense.ads', function()
        {
            return new \Mastergalen\AdsenseAds\AdsBuilder;
        });
    }
}
