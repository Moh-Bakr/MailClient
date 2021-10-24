<?php

use App\Http\Controllers\ShowMailsController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::view('/', 'welcome')->name('welcome');

Route::group(['middleware' => 'auth'], function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');

    Route::view('profile', 'profile.profile')->name('profile');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::view('mail', 'mail.cmail')->name('mail');
    Route::put('mail', [MailController::class, 'create'])->name('mail.create');
    Route::Get('send', [MailController::class, 'send'])->name('mail.send');
    Route::Get('receive', [MailController::class, 'received'])->name('mail.receive');
    Route::Get('read/{id}', [MailController::class, 'read'])->name('mail.read');


});


require __DIR__ . '/auth.php';
