<?php

namespace App\Repositories;

use App\Http\Resources\IContentResource;
use App\Models\IContent;
use App\Traits\ImageTrait;

class IContentRepository 
{
    use ImageTrait;

    public $model;

    public function __construct(IContent $model)
    {
        $this->model = $model;
    }

    public function list($take = null): array
    {
        $objects = $this->model->all()->sortByDesc('id')->take($take);

        return IContentResource::collection($objects)->response()->getData(true);
    }

    public function paginated(): array
    {
        $objects = $this->model->orderBy('id' , 'desc')->paginate(6);

        return IContentResource::collection($objects)->response()->getData(true);
    }

    public function showById($id)
    {
        $member = $this->model->findOrFail($id);

        return (new IContentResource($member))->resolve();
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
            'image' => $this->image_manipulate($data['image'] , 'content')
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
            $this->image_delete($member->image , 'processes');
            $data['image'] = $this->image_manipulate($request['image'] , 'content');
        }
        
        $member->update($data);
    }
}