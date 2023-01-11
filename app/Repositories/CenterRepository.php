<?php

namespace App\Repositories;

use App\Http\Resources\CenterResource;
use App\Models\Center;
use App\Traits\ImageTrait;

class CenterRepository 
{
    use ImageTrait;

    public $model;

    public function __construct(Center $model)
    {
        $this->model = $model;
    }

    public function list($take = null): array
    {
        $objects = $this->model->all()->sortByDesc('id')->take($take);

        return CenterResource::collection($objects)->response()->getData(true);
    }

    public function paginated(): array
    {
        $objects = $this->model->orderBy('id' , 'desc')->paginate(6);

        return CenterResource::collection($objects)->response()->getData(true);
    }

    public function showById($id)
    {
        $member = $this->model->findOrFail($id);

        return (new CenterResource($member))->resolve();
    }

    public function create($data)
    {
        $data = [
            'en' => [
                'title' => $data['title_en']
            ],
            'ar' => [
                'title' => $data['title_ar']
            ],
            'image' => $this->image_manipulate($data['image'] , 'content' , 190 , 190)
        ];

        $this->model->create($data);
    }

    public function edit($request , $id)
    {
        $member = $this->model->findOrFail($id);
        $data = [
            'en' => [
                'title' => $request['title_en'],
            ],
            'ar' => [
                'title' => $request['title_ar'],
            ]
        ];

        if ($request['image']) {
            $this->image_delete($member->image , 'content');
            $data['image'] = $this->image_manipulate($request['image'] , 'content' , 190 , 190);
        }
        
        $member->update($data);
    }
}