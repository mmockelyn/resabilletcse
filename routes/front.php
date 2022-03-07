<?php
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('billetterie')->group(function () {
    Route::get('/', [\App\Http\Controllers\Front\BilletterieController::class, 'index'])->name('front.billetterie.index');
});

Route::prefix('annuaire')->group(function () {
    Route::get('/', [\App\Http\Controllers\Front\AnnuaireController::class, 'index'])->name('front.annuaire.index');
});

Route::prefix('voyage')->group(function () {
    Route::get('/', [\App\Http\Controllers\Front\VoyageController::class, 'index'])->name('front.voyage.index');
});

Route::prefix('partenaire')->group(function () {
    Route::get('/', [\App\Http\Controllers\Front\PartenaireController::class, 'index'])->name('front.partenaire.index');
});

Route::prefix('contact')->group(function () {
    Route::get('/', [\App\Http\Controllers\Front\ContactController::class, 'index'])->name('front.contact.index');
});
