<?php

namespace App\Repositories;

use App\Http\Resources\ContentResource;
use App\Models\Content;
use App\Traits\ImageTrait;

class ContentRepository 
{
    use ImageTrait;
    public $model;

    public function __construct(Content $model)
    {
        $this->model = $model;
    }

    public function show()
    {
        $apple = $this->model->firstOrFail();

        return (new ContentResource($apple))->resolve();
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
            $data['image'] = $this->image_manipulate($request['image'] , 'home' , 450 , 600);
        }
        $apple->update($data);
    }
}