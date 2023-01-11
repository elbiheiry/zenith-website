<?php

namespace App\Repositories;

use App\Http\Resources\StepResource;
use App\Models\Step;
use App\Traits\ImageTrait;

class StepRepository 
{
    use ImageTrait;

    public $model;

    public function __construct(Step $model)
    {
        $this->model = $model;
    }

    public function list($take = null): array
    {
        $objects = $this->model->all()->sortByDesc('id')->take($take);

        return StepResource::collection($objects)->response()->getData(true);
    }

    public function paginated(): array
    {
        $objects = $this->model->orderBy('id' , 'desc')->paginate(6);

        return StepResource::collection($objects)->response()->getData(true);
    }

    public function showById($id)
    {
        $member = $this->model->findOrFail($id);

        return (new StepResource($member))->resolve();
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
            'image' => $this->image_manipulate($data['image'] , 'steps' , 64 , 64)
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
            $this->image_delete($member->image , 'steps');
            $data['image'] = $this->image_manipulate($request['image'] , 'steps' , 64 , 64);
        }
        
        $member->update($data);
    }
}