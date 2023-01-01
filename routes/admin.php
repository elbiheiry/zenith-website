<?php

use App\Http\Controllers\Admin\{
    DashboardController 
};
use Illuminate\Support\Facades\{Auth , Route};

Auth::routes(['register' => false]);

Route::middleware('auth:web')->group(function () {
    Route::get('/' , [DashboardController::class , 'index'])->name('dashboard');

});
