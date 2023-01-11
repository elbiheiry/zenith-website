<?php

namespace App\Repositories;

use App\Http\Resources\AspectResource;
use App\Models\Aspect;

class AspectRepository 
{
    public $model;

    public function __construct(Aspect $model)
    {
        $this->model = $model;
    }

    public function show()
    {
        $about = $this->model->firstOrFail();

        return (new AspectResource($about))->resolve();
    }

    public function edit($request)
    {
        $about = $this->model->firstOrFail();
        $data = [
            'en' => [
                'description' => $request['description_en']
            ],
            'ar' => [
                'description' => $request['description_ar']
            ],
        ];
        $about->update($data);
    }  
}