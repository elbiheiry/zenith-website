<?php

namespace App\Repositories;

use App\Http\Resources\JamfSolutionResource;
use App\Models\JamfSolution;
use App\Traits\ImageTrait;

class JamfSolutionRepository 
{
    use ImageTrait;

    public $model;

    public function __construct(JamfSolution $model)
    {
        $this->model = $model;
    }

    public function list($take = null): array
    {
        $objects = $this->model->all()->sortByDesc('id')->take($take);

        return JamfSolutionResource::collection($objects)->response()->getData(true);
    }

    public function paginated(): array
    {
        $objects = $this->model->orderBy('id' , 'desc')->paginate(6);

        return JamfSolutionResource::collection($objects)->response()->getData(true);
    }

    public function showById($id)
    {
        $member = $this->model->findOrFail($id);

        return (new JamfSolutionResource($member))->resolve();
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
            'image' => $this->image_manipulate($data['image'] , 'content' , 930 , 620)
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
            $data['image'] = $this->image_manipulate($request['image'] , 'content' , 930 , 620);
        }
        
        $member->update($data);
    }
}