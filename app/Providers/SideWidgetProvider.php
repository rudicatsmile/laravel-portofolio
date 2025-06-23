<?php

namespace App\Providers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Builder;

class SideWidgetProvider extends ServiceProvider
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
        View()->composer('front.layout.side-widget', function ($view) {
            // $category = Category::latest()->get();
            $category = Category::withCount(['Articles' => function (Builder $query) {
                $query->where('status', 1);
            }])->take(30)->latest()->get();
            $view->with('categories', $category);

            /*
            keterangan :
                Articles = nama relasi yg ada di model Category
                take(3) = limit 3
            */
        });

        View()->composer('front.layout.side-widget', function ($view) {
            $posts = Article::orderBy('views', 'desc')->take(3)->get();
            $view->with('popular_post', $posts);
        });

        View()->composer('front.layout.navbar', function ($view) {
            $category = Category::latest()->take(3)->get();
            $view->with('category_navbar', $category);
        });
    }
}
