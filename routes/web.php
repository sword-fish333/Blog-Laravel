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

        Auth::routes();
        Route::group(['middleware' => ['auth']], function() {
      Route::get('/', 'HomeController@index')->name('firstPage');

    Route::get('/allPosts', 'PostController@firstPage')->name('firstPage');


    Route::get('/posts', 'PostController@index')->name('showPosts');

    Route::get('/posts/create', 'PostController@create')->name('createPost');


    Route::post('/posts/create', 'PostController@store')->name('create');
    //admin panel with all posts
    Route::get('/admin', 'AdminController@postsTable')->name('postsTable');

    //admin panel with all user
    Route::get('admin/users', 'AdminController@usersTable')->name('usersTable');

    Route::get('/admin/category', 'CategoryController@index')->name('createCategory');

    Route::post('/admin/category', 'CategoryController@store')->name('storeCategory');

    Route::get('/admin/categorytable', 'CategoryController@tableCategory')->name('categoryTable');

    //route for deleting category
    Route::delete('/admin/category/{id}', 'CategoryController@destroy')->name('destroyCategory');
    //go to edit page
    Route::get('/admin/post/{id}', 'PostController@edit')->name('editPost');
    //delete post
    Route::delete('/admin/post/{id}', 'PostController@destroy')->name('destroyPost');

    //view one post
    Route::get('/post/{id}', 'PostController@show')->name('showOnePost');
    //route for updating a post
    Route::patch('/postupdate/{id}', 'PostController@update')->name('updatePost');

    //route for comments
    Route::post('/post/{post_id}', 'CommentController@store')->name('saveComment');


    //route for posts that wore posted only by the user that is loged in
    Route::get('/personalposts', 'PostController@personalPosts')->name('personalPosts');

    Route::get('/category/{category}', 'CategoryController@display')->name('categoryPosts');

    //route for deleting user
    Route::delete('/admin/users/{id}', 'AdminController@deleteUser')->name('deleteUser');
    Route::get('/home', 'HomeController@index')->name('home');

});



    //route for login admin
    Route::get('/admin_login', 'Admin\Auth\LoginController@showLoginForm')->name('adminLogin');
    Route::post('/admin_login', 'Admin\Auth\LoginController@login');

Route::group(['middleware' => ['auth:admin']], function () {
    Route::get('admin/home', 'HomeController@adminPage')->name('adminPage');


    Route::get('/admin/posts', 'AdminController@adminPosts')->name('adminPosts');

    Route::get('/admin/create', 'AdminController@createAdminPost')->name('adminShowCreate');
//admin panel with all posts
    Route::get('/admin', 'AdminController@postsTable')->name('postsTable');

//admin panel with all user
    Route::get('admin/users', 'AdminController@usersTable')->name('usersTable');

    Route::get('/admin/category', 'CategoryController@index')->name('createCategory');

    Route::post('/admin/category', 'CategoryController@store')->name('storeCategory');

    Route::get('/admin/categorytable', 'CategoryController@tableCategory')->name('categoryTable');

//route for deleting category
    Route::delete('/admin/category/{id}', 'CategoryController@destroy')->name('destroyCategory');
//go to edit page
    Route::get('/admin/post/{id}', 'PostController@edit')->name('editPost');
//delete post
    Route::delete('/admin/post/{id}', 'PostController@destroy')->name('destroyPost');

//view one post
    Route::get('/post/{id}', 'PostController@show')->name('showOnePost');
//route for updating a post
    Route::get('/admin/newadmin', 'AdminController@showCreateAdmin')->name('showcreateAdmin');

    Route::post('/admin/newadmin', 'AdminController@saveUser')->name('saveUser');

    Route::get('/admin/roles', 'RoleController@index')->name('showRolesTable');

    Route::get('/admin/role', 'RoleController@create')->name('createRole');
    Route::post('/admin/role', 'RoleController@store')->name('saveRole');

    Route::delete('/admin/role/{id}', 'RoleController@destroy')->name('deleteRole');

    Route::resource('/admin/permission', 'PermissionController');
});