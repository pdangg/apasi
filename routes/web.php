<?php

use App\Livewire\LivePreview;
use App\Livewire\Counter;
use App\Livewire\MessagePreview;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/msg', function () {
    return view('msg');
});

Route::get('/counter', Counter::class);
Route::get('/live', LivePreview::class);
Route::get('/live2', MessagePreview::class);

