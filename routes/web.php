<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');

    Route::view('profile', 'profile.profile')->name('profile');
    Route::put('profile', [ProfileController::class,'update'])
        ->name('profile.update');
});


require __DIR__ . '/auth.php';