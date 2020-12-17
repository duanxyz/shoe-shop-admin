<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return view('welcome');
});

Route::get('/table', function () {
    return Inertia::render('Admin/Tables');
})->name('tables')->middleware('auth');

Route::get('/setting', function () {
    return Inertia::render('Admin/Settings');
})->name('settings')->middleware('auth');

Route::get('/maps', function () {
    return Inertia::render('Admin/Maps');
})->name('maps')->middleware('auth');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');
