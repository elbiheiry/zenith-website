<?php

namespace App\Repositories;

use App\Http\Resources\SettingResource;
use App\Models\Setting;

class SettingRepository 
{
    public $model;

    public function __construct(Setting $model)
    {
        $this->model = $model;
    }

    public function show()
    {
        $setting = $this->model->firstOrFail();

        return (new SettingResource($setting))->resolve();
    }

    public function edit($request)
    {
        $setting = $this->model->firstOrFail();
        $data = [
            'en' => [
                'address' => $request['address_en']
            ],
            'ar' => [
                'address' => $request['address_ar']
            ],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'fax' => $request['fax'],
            'map' => $request['map']
        ];
        $setting->update($data);
    } 
}