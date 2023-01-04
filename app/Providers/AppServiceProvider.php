<?php

namespace App\Providers;

use App\Http\Resources\SettingResource;
use App\Models\Setting;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $setting = Setting::firstOrFail();
        
        if (!app()->runningInConsole()) {
            view()->share([
                'settings' => (new SettingResource($setting))->resolve(),
            ]);
        }
    }
}
