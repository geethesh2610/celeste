<?php

use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Auth::loginUsingId(1);

Route::get('/', [WebsiteController::class, 'index'])->name('index');

Route::get('/about', [WebsiteController::class, 'about'])->name('about');

Route::prefix('plots')->controller(WebsiteController::class)->group(function () {
    Route::get('/{categorySlug}', 'plotCategoryPage')->name('plots.index');
    Route::get('/{categorySlug}/{plotSlug}', 'plotDetailsPage')->name('plots.details');
});

Route::prefix('blogs')->controller(WebsiteController::class)->group(function () {
    Route::get('/', 'blogs')->name('blogs.index');
    Route::get('/{slug}', 'blogDetails')->name('blogs.details');
});

Route::prefix('services')->controller(WebsiteController::class)->group(function () {
    Route::get('/', 'services')->name('services.index');
    Route::get('/residential-service', 'residentialServices')->name('services.residential');
    Route::get('/commercial-service', 'commercialServices')->name('services.commercial');
    Route::get('/industrial-and-logistics-service', 'industrialServices')->name('services.industrial-logistics');
});

Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');
