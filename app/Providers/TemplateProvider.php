<?php

namespace App\Providers;

use App\Models\Config;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class TemplateProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View()->composer('front.layout.template', function ($view) {

            $configKeys = [
                'logo',
                'blogname',
                'title',
                'caption',
                'ads_widget',
                'ads_header',
                'ads_footer',               
                'footer'
            ];

            $config = Config::whereIn('name', $configKeys)->pluck('value','name');

            $view->with('config', $config);
        });

        View()->composer('front.contact.index', function ($view) {

            $configKeys = [               
                'phone',
                'email',
                'facebook',
                'instagram',
                'youtube',
                'footer'
            ];

            $config = Config::whereIn('name', $configKeys)->pluck('value','name');

            $view->with('config', $config);
        });

        View()->composer('front.layout.side-widget', function ($view) {

            $configKeys = [               
                'ads_widget',
               
            ];

            $config = Config::whereIn('name', $configKeys)->pluck('value','name');

            $view->with('config', $config);
        });


        /*
            catatan:
                View harus di import 
                Config harus di import
                front.layout.template ->    /views/front/layout/template.blade.php
                front.contact.index ->      /views/front/layout/contact.blade.php
                front.layout.side-widget -> /views/front/layout/side-widget.blade.php
        */
    }
}
