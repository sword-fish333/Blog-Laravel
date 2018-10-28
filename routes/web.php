<?php

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

Route::get('/', 'HomeController@main');

    Auth::routes();

    Route::get('/home', 'HomeController@main')->name('home');

    Route::get('/author/post','FormController@getPostForm')->name('post.form');

    //route with post method for fetching the data from the user
    Route::post('/author/post','FormController@createPost');
    Route::get('/posts','PostController@viewPosts')->name('post.posts');
    Route::get('/posts/{id}','PostController@viewOnePost')->name('post.viewOnePost');

    //route for submiting a comment
    Route::post('/posts/{id}',['uses'=>'CommentController@postComment','as'=>'comments.postComment']);
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

    //route for posts that wore posted only by the user
    Route::get('/personalposts','PostController@personalPosts')->name('personalposts');