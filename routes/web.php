<?php

use App\Http\Controllers\Site\HomeController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function()
{
    Route::get('/' , [HomeController::class , 'index'])->name('index');
    
    Route::get('/about-us' , [HomeController::class , 'about'])->name('about');

    Route::get('/our-partners' , [HomeController::class , 'partners'])->name('partners');

    Route::get('/contact' , [HomeController::class  , 'contact'])->name('contact');

    Route::post('/contact/store' , [HomeController::class , 'store'])->name('contact.store');

    Route::get('/success-stories' , [HomeController::class , 'story'])->name('story');

    Route::get('/information-technology' , [HomeController::class , 'it'])->name('it');

    Route::get('/jamf-education-solutions' , [HomeController::class , 'jamf'])->name('jamf');
});