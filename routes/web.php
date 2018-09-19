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

Route::get('/', 'HomeController@index');

Route::get('/book-detail', function () {
    return view('book.book_detail');
});

Route::get('/add-a-book', function () {
    return view('book.add');
});

Route::get('/review', function () {
    return view('book.review');
});

Route::get('/books', function () {
    return view('book.books');
});

Route::get('/profile', function () {
    return view('user.profile');
});

Route::get('/notifications', function () {
    view('user.notifications');
});

Route::get('my-request', function () {
    return view('user.my_request');
});

Route::get('/posts', function () {
    return view('post.list');
});

Route::get('/post-detail', function () {
    return view('post.post_detail');
});

Route::get('/error', function () {
    return view('error');
});

Route::prefix('admin')->group(function () {
    Route::get('/listbook', 'BookController@ajaxShow')->name('book.show');
    Route::resource('/book', 'BookController')->except(['show']);
    Route::resource('/category', 'CategoryController')->except(['show']);
    Route::get('/post', 'HomeController@index');
    Route::get('/user', 'HomeController@index');
    Route::get('/reputation', 'HomeController@index');
    Route::get('/tag', 'HomeController@index');
    Route::get('/', 'HomeController@index');

    Route::resource('/roles', 'RoleController');
    Route::resource('/offices', 'OfficeController');
    Route::resource('/users', 'UserController');
});
