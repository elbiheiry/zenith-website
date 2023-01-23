<?php

namespace App\Repositories;

use App\Http\Resources\AppleContentResource;
use App\Models\AppleContent;
use App\Traits\ImageTrait;

class AppleContentRepository 
{
    use ImageTrait;
    
    public $model;

    public function __construct(AppleContent $model)
    {
        $this->model = $model;
    }

    public function show()
    {
        $apple = $this->model->firstOrFail();

        return (new AppleContentResource($apple))->resolve();
    }

    public function edit($request)
    {
        $apple = $this->model->firstOrFail();
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

        if ($request['image']) {
            $this->image_delete($apple->image , 'apple');
            $data['image'] = $this->image_manipulate($request['image'] , 'apple' , 1440 , 610);
        }

        $apple->update($data);
    }
}