<?php

namespace App\Repositories;

use App\Http\Resources\SliderResource;
use App\Models\Slider;

class SliderRepository 
{
    public $model;

    public function __construct(Slider $model)
    {
        $this->model = $model;
    }

    public function list(): array
    {
        $objects = $this->model->all();

        return SliderResource::collection($objects)->response()->getData(true);
    }

    public function showById($id)
    {
        $member = $this->model->findOrFail($id);

        return (new SliderResource($member))->resolve();
    }

    public function create($data)
    {
        $data = [
            'en' => [
                'title' => $data['title_en'],
                'description' => $data['description_en']
            ],
            'ar' => [
                'title' => $data['title_ar'],
                'description' => $data['description_ar']
            ]
        ];

        $this->model->create($data);
    }

    public function edit($request , $id)
    {
        $member = $this->model->findOrFail($id);
        $data = [
            'en' => [
                'title' => $request['title_en'],
                'description' => $request['description_en']
            ],
            'ar' => [
                'title' => $request['title_ar'],
                'description' => $request['description_ar']
            ]
        ];

        $member->update($data);
    }  
}