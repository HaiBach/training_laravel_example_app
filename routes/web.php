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
    if( View::exists('hello') ) {
        // return view('hello', ['name' => '<strong>Nguyen Van A</strong>']);
        return view('hello', ['name' => 'Nguyen Van A']);
    }
    return 'Khong co view Hello!';
});
