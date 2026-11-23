<?php

use Illuminate\Support\Facades\Route;

// posts index
Route::livewire('/', 'pages::posts.index')->name('posts.index');

// posts create
Route::livewire('create', 'pages::posts.create')->name('posts.create');