<?php

namespace App\Repositories;

use App\Http\Resources\MacResource;
use App\Models\Mac;

class MacRepository 
{
    public $model;

    public function __construct(Mac $model)
    {
        $this->model = $model;
    }

    public function show()
    {
        $about = $this->model->firstOrFail();

        return (new MacResource($about))->resolve();
    }

    public function edit($request)
    {
        $about = $this->model->firstOrFail();
        $data = [
            'en' => [
                'title' => $request['title_en'],
                'description' => $request['description_en']
            ],
            'ar' => [
                'title' => $request['title_ar'],
                'description' => $request['description_ar']
            ],
        ];
        $about->update($data);
    }
}