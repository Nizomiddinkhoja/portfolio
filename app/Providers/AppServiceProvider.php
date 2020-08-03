<?php

namespace App\Providers;

use App\Category;
use App\Tag;
use App\Post;
use App\User;
use Illuminate\Support\ServiceProvider;

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
        view()->composer('pages._sidebar', function ($view) {
            $view->with('admin', User::where('email','nizomiddinkhoja@gmail.com')->get());
            $view->with('popularPosts', Post::orderBy('views', 'desc')->take(3)->get());
            $view->with('featuredPosts', Post::where('is_featured', 1)->take(4)->get());
            $view->with('recentPosts', Post::orderBy('date', 'desc')->take(4)->get());
            $view->with('tags', Tag::all());
            $view->with('categories', Category::all());
        });


        view()->composer('admin._sidebar', function ($view) {
            $view->with('newCommentsCount', \App\Comment::where('status',0)->count());
        });

        view()->composer('pages._slider', function ($view) {
            $view->with('featuredPosts', Post::where('is_featured', 1)->take(4)->get());
        });


    }
}
