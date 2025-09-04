<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
});

// 一覧
Volt::route('/articles', 'articles.index')->name('articles.index');
// 新規作成
Volt::route('/articles/create', 'articles.create')->name('articles.create');
// 詳細
Volt::route('/articles/{article}', 'articles.show')->name('articles.show');
