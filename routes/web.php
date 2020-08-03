<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'IndexController@index')->name('index');
Route::get('/post/{slug}', 'IndexController@show')->name('post.show');
Route::get('/tag/{slug}', 'IndexController@tag')->name('tag.show');
Route::get('/category/{slug}', 'IndexController@category')->name('category.show');
Route::post('/subscribe', 'SubsController@subscribe');
Route::get('/verify/{token}', 'SubsController@verify');
Route::post('/comment', 'CommentController@store');
Route::get('/contact', 'ContactController@index')->name('contact');

Route::group(['prefix' => 'government', 'namespace' => 'Admin'], function () {//, 'middleware'=>'admin'
    Route::group(['middleware' => 'guest'], function () {
        Route::get('/register', 'AuthController@registerForm');
        Route::post('/register', 'AuthController@register');
        Route::get('/login', 'AuthController@loginForm');
        Route::post('/login', 'AuthController@login')->name('login');
    });;

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/logout', 'AuthController@logout')->name('logout');
        Route::get('/', 'DashboardController@index')->name('dashboard');
        Route::resource('/categories', 'CategoriesController');
        Route::resource('/tags', 'TagsController');
        Route::resource('/users', 'UsersController');
        Route::resource('/posts', 'PostsController');
        Route::resource('/contact', 'ContactController');
        Route::get('/comments', 'CommentsController@index')->name('comments');
        Route::get('/comments/toggle/{id}', 'CommentsController@toggle');
        Route::delete('/comments/{id}/destroy', 'CommentsController@destroy')->name('comment.destroy');
        Route::resource('/subscribers', 'SubscribersController');
    });
});


