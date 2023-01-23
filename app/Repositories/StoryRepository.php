<?php

namespace App\Repositories;

use App\Http\Resources\StoryResource;
use App\Models\Story;

class StoryRepository 
{
    public $model;

    public function __construct(Story $model)
    {
        $this->model = $model;
    }

    public function list(): array
    {
        $objects = $this->model->all()->sortByDesc('id');

        return StoryResource::collection($objects)->response()->getData(true);
    }

    public function showById($id)
    {
        $member = $this->model->findOrFail($id);

        return (new StoryResource($member))->resolve();
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
            'link' => $data['link']
        ];

        $this->model->create($data);
    }

    public function edit($request , $id)
    {
        $member = $this->model->findOrFail($id);
        $data = [
            'en' => [
                'title' => $request['title_en']
            ],
            'ar' => [
                'title' => $request['title_ar']
            ],
            'link' => $request['link']
        ];

        $member->update($data);
    }    
}