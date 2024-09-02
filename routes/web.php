<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TranslationController;
use App\Http\Controllers\ProfilePasswordController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::resource('translations', TranslationController::class)->except('edit', 'update', 'show');

    Route::get('translations/show', [TranslationController::class, 'show'])->name('translations.show');
    Route::redirect('dashboard', 'translations/show');

    Route::prefix('profile')->as('profile.')->group(function () {
        Route::singleton('password', ProfilePasswordController::class)->only(['edit', 'update']);
    });

    Route::get('/delete', [ProfileController::class, 'delete'])->name('profile.delete');
    Route::singleton('profile', ProfileController::class)->destroyable();
});

require __DIR__.'/auth.php';
