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
    return view('welcome');
});

Route::get('/francesinha', function () {
    return view('francesinha');
});

Route::prefix('avogg')->group(function () {
    Route::get('/', function () {
        return view('avogg.index');
    })->name('avogg.index');
});

Route::prefix('avogg-software')->group(function () {
    Route::get('/', function () {
        return view('avogg-software.index');
    })->name('avogg-software.index');

    Route::get('/services', function () {
        return view('avogg-software.services');
    })->name('avogg-software.services');
});

Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('dashboard.index');
    })->name('dashboard.index');
});

require __DIR__.'/auth.php';
