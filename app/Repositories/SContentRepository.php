<?php

namespace App\Repositories;

use App\Http\Resources\SContentResource;
use App\Models\SContent;
use App\Traits\ImageTrait;

class SContentRepository 
{
    use ImageTrait;

    public $model;

    public function __construct(SContent $model)
    {
        $this->model = $model;
    }

    public function list($id ,$take = null): array
    {
        $objects = $this->model->all()->where('solution_id' , $id)->sortByDesc('id')->take($take);

        return SContentResource::collection($objects)->response()->getData(true);
    }

    public function showById($id)
    {
        $member = $this->model->findOrFail($id);

        return (new SContentResource($member))->resolve();
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
            ],
            'image' => $this->image_manipulate($data['image'] , 'content'),
            'solution_id' => $data['solution_id']
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

        if ($request['image']) {
            $this->image_delete($member->image , 'content');
            $data['image'] = $this->image_manipulate($request['image'] , 'content');
        }
        
        $member->update($data);
    }
}