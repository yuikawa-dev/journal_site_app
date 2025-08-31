<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
});

// 一覧
Volt::route('/articles', 'articles.index')->name('articles.index');
// 詳細
Volt::route('/articles/{article}', 'articles.show')->name('articles.show');
