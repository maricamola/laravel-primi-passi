<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $text = [
        'welcome' => 'This is my frist homepage',
    ];
    return view('home', $text);
})->name('home');

Route::get('/our_experiences', function () {
    return view('experiences');
})->name('experiences');

Route::get('/info', function () {
    return view('contacts');
})->name('contacts');
