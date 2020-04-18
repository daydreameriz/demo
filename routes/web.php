<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin', function () {
    return view('demo.template');
});

Route::get('login', function () {
    return view('demo.pages.auth.login');
});

Route::get('forgot-password', function () {
    return view('demo.pages.auth.forgot-password');
});

Route::get('register', function () {
    return view('demo.pages.auth.register');
});

Route::get('admin/posts', function () {
    return view('demo.pages.posts.index');
});

Route::get('admin/posts/create', function () {
    return view('demo.pages.posts.create');
});

Route::get('/about', 'IvanaController@about');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
