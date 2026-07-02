<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbTestDataController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\NewArticleController;
use App\Http\Controllers\ShoppingcartController;

Route::get('/', function () {
    return view('navigation');
});

//Laravel vede URL-ul /testdata și spune: „apelează controller-ul”
Route::get('/testdata', [AbTestDataController::class, 'index']);

Route::get('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
Route::get('/isloggedin', [App\Http\Controllers\AuthController::class, 'isloggedin'])->name('haslogin');

Route::get('/articles', [ArticleController::class, 'index']);

Route::get('/newarticle', function () {
    return view('newarticle');
});


Route::post('/articles', [NewArticleController::class, 'validate']);

Route::get('/newsite', function () {
    return view('newsite');
});

Route::get('/send-test', function () {
    event(new \App\Events\TestEvent('Hallo von Abalo!'));
    return 'Message sent!';
});

Route::get('/send-wartung', function () {
    event(new \App\Events\WartungsEvent());
    return 'Wartungsnachricht gesendet!';
});
