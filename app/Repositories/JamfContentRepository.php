<?php

namespace App\Repositories;

use App\Http\Resources\JamfContentResource;
use App\Models\JamfContent;

class JamfContentRepository 
{
    public $model;

    public function __construct(JamfContent $model)
    {
        $this->model = $model;
    }

    public function show()
    {
        $about = $this->model->firstOrFail();

        return (new JamfContentResource($about))->resolve();
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