<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::get('/', function () {
    return view('welcome');
});

Route::get('en', function () {
    return 'En';
});

Route::get('vi', function () {
    return 'Vi';
});

Route::get('user/{id?}', function ($id = null) {
    if ($id === null) {
        return "Xin mời nhập user ID.";
    }
    return "User ID: $id";
});

Route::get('hello', function () {
    if( View::exists('hello1') ) {
        return view('hello', ['body' => 'Bien body']);
    }
    return 'Khong co view Hello!';
});
