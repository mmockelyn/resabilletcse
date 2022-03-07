<?php
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->prefix('account')->group(function () {
    Route::get('subscribe', [\App\Http\Controllers\Account\AccountController::class, 'subscribe'])->name('account.subscribe');
});
