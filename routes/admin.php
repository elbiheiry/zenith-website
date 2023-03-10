<?php

use App\Http\Controllers\Admin\{
    AboutController,
    AppleController,
    AspectController,
    BackupController,
    CenterController,
    ClientController,
    ContentController,
    DashboardController,
    IpadController,
    JamfController,
    JamfSolutionController,
    MacController,
    MessageController,
    PartnerController,
    ProcessController,
    ProfileController,
    RegionController,
    SContentController,
    SettingController,
    SliderController,
    SolutionController,
    SolutionMessageController,
    StepController,
    StoryController,
    WhyController
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
     * solution messages routes
     */
    Route::prefix('solution_messages')->name('solution_message.')->group(function ()
    {
        Route::get('/' , [SolutionMessageController::class , 'index'])->name('index');
        Route::get('/show/{id}' , [SolutionMessageController::class , 'show'])->name('show');
        Route::delete('/destroy/{id}' , [SolutionMessageController::class , 'destroy'])->name('delete');
    });

    /**
     * slideshow routes
     */
    Route::prefix('home/slideshow')->name('sliders.')->controller(SliderController::class)->group(function (){
        Route::get('/' , 'index')->name('index');
        Route::post('/store' , 'store')->name('store');
        Route::get('/edit/{id}' , 'edit')->name('edit');
        Route::put('/update/{id}' , 'update')->name('update');
        Route::delete('/delete/{id}' , 'destroy')->name('delete');
    });

    /**
     * content routes
     */
    Route::prefix('home/content')->name('content.')->controller(ContentController::class)->group(function (){
        Route::get('/' , 'index')->name('index');
        Route::put('/update' , 'update')->name('update');
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
     * our-process routes
     */
    Route::prefix('our-process')->name('processes.')->controller(ProcessController::class)->group(function(){
        Route::get('/' , 'index')->name('index');
        Route::post('/store' , 'store')->name('store');
        Route::get('/edit/{id}' , 'edit')->name('edit');
        Route::put('/update/{id}' , 'update')->name('update');
        Route::delete('/delete/{id}' , 'destroy')->name('delete');
    });

    /**
     * apple routes
     */
    Route::prefix('apple')->name('apple.')->controller(AppleController::class)->group(function(){
        Route::get('/' , 'index')->name('index');
        Route::post('/store' , 'store')->name('store');
        Route::get('/edit/{id}' , 'edit')->name('edit');
        Route::put('/update/{id}' , 'update')->name('update');
        Route::put('/update2' , 'update2')->name('update2');
        Route::delete('/delete/{id}' , 'destroy')->name('delete');
    });

    /**
     * jamf-education-solution routes
     */
    Route::prefix('jamf-education-solution/content')->name('jamf.content.')->controller(JamfController::class)->group(function(){
        Route::get('/' , 'index')->name('index');
        Route::post('/store' , 'store')->name('store');
        Route::get('/edit/{id}' , 'edit')->name('edit');
        Route::put('/update/{id}' , 'update')->name('update');
        Route::put('/update2' , 'update2')->name('update2');
        Route::delete('/delete/{id}' , 'destroy')->name('delete');
    });


    /**
     * jamf-education-solution routes
     */
    Route::prefix('success-stories')->name('stories.')->controller(StoryController::class)->group(function(){
        Route::get('/' , 'index')->name('index');
        Route::post('/store' , 'store')->name('store');
        Route::get('/edit/{id}' , 'edit')->name('edit');
        Route::put('/update/{id}' , 'update')->name('update');
        Route::delete('/delete/{id}' , 'destroy')->name('delete');
    });

    /**
     * information-technology routes
     */
    Route::prefix('information-technology')->group(function(){
        /**
         * data-center routes
         */
        Route::prefix('data-center')->name('center.')->controller(CenterController::class)->group(function(){
            Route::get('/' , 'index')->name('index');
            Route::post('/store' , 'store')->name('store');
            Route::get('/edit/{id}' , 'edit')->name('edit');
            Route::put('/update/{id}' , 'update')->name('update');
            Route::delete('/delete/{id}' , 'destroy')->name('delete');
        });

        /**
         * aspects routes
         */
        Route::prefix('aspects')->name('aspects.')->controller(AspectController::class)->group(function(){
            Route::get('/' , 'index')->name('index');
            Route::post('/store' , 'store')->name('store');
            Route::get('/edit/{id}' , 'edit')->name('edit');
            Route::put('/update/{id}' , 'update')->name('update');
            Route::put('/update2' , 'update2')->name('update2');
            Route::delete('/delete/{id}' , 'destroy')->name('delete');
        });

        /**
         * aspects routes
         */
        Route::prefix('steps')->name('steps.')->controller(StepController::class)->group(function(){
            Route::get('/' , 'index')->name('index');
            Route::post('/store' , 'store')->name('store');
            Route::get('/edit/{id}' , 'edit')->name('edit');
            Route::put('/update/{id}' , 'update')->name('update');
            Route::delete('/delete/{id}' , 'destroy')->name('delete');
        });

        /**
         * backups routes
         */
        Route::prefix('backup-and-disaster-recovery')->name('backup.')->controller(BackupController::class)->group(function(){
            Route::get('/' , 'index')->name('index');
            Route::post('/store' , 'store')->name('store');
            Route::get('/edit/{id}' , 'edit')->name('edit');
            Route::put('/update/{id}' , 'update')->name('update');
            Route::delete('/delete/{id}' , 'destroy')->name('delete');
        });
    });

    /**
     * solutions routes
     */
    Route::prefix('solutions')->name('solutions.')->controller(SolutionController::class)->group(function(){
        Route::get('/' , 'index')->name('index');
        Route::post('/store' , 'store')->name('store');
        Route::get('/edit/{id}' , 'edit')->name('edit');
        Route::put('/update/{id}' , 'update')->name('update');
        Route::delete('/delete/{id}' , 'destroy')->name('delete');

        /**
         * content routes
         */
        Route::prefix('content')->name('content.')->controller(SContentController::class)->group(function(){
            Route::get('/{id}' , 'index')->name('index');
            Route::post('/store/{id}' , 'store')->name('store');
            Route::get('/edit/{id}' , 'edit')->name('edit');
            Route::put('/update/{id}' , 'update')->name('update');
            Route::delete('/delete/{id}' , 'destroy')->name('delete');
        });
    });
    
    /**
     * jamf-education-solution routes
     */
    Route::prefix('jamf-education-solution/solutions')->name('jamf.solution.')->controller(JamfSolutionController::class)->group(function(){
        Route::get('/' , 'index')->name('index');
        Route::post('/store' , 'store')->name('store');
        Route::get('/edit/{id}' , 'edit')->name('edit');
        Route::put('/update/{id}' , 'update')->name('update');
        Route::delete('/delete/{id}' , 'destroy')->name('delete');
    });

    /**
     * ipad-in-education routes
     */
    Route::prefix('ipad-in-education')->name('ipad.')->controller(IpadController::class)->group(function(){
        Route::get('/' , 'index')->name('index');
        Route::post('/store' , 'store')->name('store');
        Route::get('/edit/{id}' , 'edit')->name('edit');
        Route::put('/update/{id}' , 'update')->name('update');
        Route::put('/update2' , 'update2')->name('update2');
        Route::delete('/delete/{id}' , 'destroy')->name('delete');
    });

    /**
     * mac-in-education routes
     */
    Route::prefix('mac-in-education')->name('mac.')->controller(MacController::class)->group(function(){
        Route::get('/' , 'index')->name('index');
        Route::post('/store' , 'store')->name('store');
        Route::get('/edit/{id}' , 'edit')->name('edit');
        Route::put('/update/{id}' , 'update')->name('update');
        Route::put('/update2' , 'update2')->name('update2');
        Route::delete('/delete/{id}' , 'destroy')->name('delete');
    });

    /**
     * why-zenith-arabia routes
     */
    Route::prefix('why-zenith-arabia')->name('why.')->controller(WhyController::class)->group(function(){
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
