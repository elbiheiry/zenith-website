<?php

use App\Http\Controllers\Admin\{
    AboutController,
    ClientController,
    DashboardController,
    MessageController,
    PartnerController,
    ProfileController,
    RegionController,
    SettingController
};
use Illuminate\Support\Facades\{Auth , Route};

Auth::routes(['register' => false]);

Route::middleware('auth:web')->group(function () {
    Route::get('/' , [DashboardController::class , 'index'])->name('dashboard');

    /**
     * profile routes
     */
    Route::prefix('profile')->name('profile.')->group(function ()
    {
        Route::get('/' , [ProfileController::class , 'index'])->name('index');
        Route::put('/update' , [ProfileController::class , 'update'])->name('update');
    });

    /**
     * site-settings routes
     */
    Route::prefix('site-settings')->name('settings.')->group(function ()
    {
        Route::get('/' , [SettingController::class , 'index'])->name('index');
        Route::put('/update' , [SettingController::class , 'update'])->name('update');
    });
    
    /**
     * about-us routes
     */
    Route::prefix('about-us')->name('about.')->group(function ()
    {
        Route::get('/' , [AboutController::class , 'index'])->name('index');
        Route::put('/update' , [AboutController::class , 'update'])->name('update');
    });

    /**
     * messages routes
     */
    Route::prefix('messages')->name('messages.')->group(function ()
    {
        Route::get('/' , [MessageController::class , 'index'])->name('index');
        Route::get('/show/{message}' , [MessageController::class , 'show'])->name('show');
        Route::delete('/destroy/{message}' , [MessageController::class , 'destroy'])->name('delete');
    });


    /**
     * partners routes
     */
    Route::prefix('our-partners')->name('partners.')->controller(PartnerController::class)->group(function (){
        Route::get('/' , 'index')->name('index');
        Route::post('/store' , 'store')->name('store');
        Route::get('/edit/{id}' , 'edit')->name('edit');
        Route::put('/update/{id}' , 'update')->name('update');
        Route::delete('/delete/{id}' , 'destroy')->name('delete');
    });

    /**
     * our-clients routes
     */
    Route::prefix('our-clients')->name('clients.')->controller(ClientController::class)->group(function(){
        Route::get('/' , 'index')->name('index');
        Route::post('/store' , 'store')->name('store');
        Route::get('/edit/{id}' , 'edit')->name('edit');
        Route::put('/update/{id}' , 'update')->name('update');
        Route::delete('/delete/{id}' , 'destroy')->name('delete');
    });

    /**
     * regions routes
     */
    Route::prefix('regions')->name('regions.')->controller(RegionController::class)->group(function(){
        Route::get('/' , 'index')->name('index');
        Route::post('/store' , 'store')->name('store');
        Route::get('/edit/{id}' , 'edit')->name('edit');
        Route::put('/update/{id}' , 'update')->name('update');
        Route::delete('/delete/{id}' , 'destroy')->name('delete');
    });
});
