<?php

namespace App\Repositories;

use App\Http\Resources\AppleResource;
use App\Models\Apple;
use App\Traits\ImageTrait;

class AppleRepository 
{
    use ImageTrait;

    public $model;

    public function __construct(Apple $model)
    {
        $this->model = $model;
    }

    public function list($take = null): array
    {
        $objects = $this->model->all()->sortByDesc('id')->take($take);

        return AppleResource::collection($objects)->response()->getData(true);
    }

    public function paginated(): array
    {
        $objects = $this->model->orderBy('id' , 'desc')->paginate(6);

        return AppleResource::collection($objects)->response()->getData(true);
    }

    public function showById($id)
    {
        $member = $this->model->findOrFail($id);

        return (new AppleResource($member))->resolve();
    }

    public function create($data)
    {
        $data = [
            'en' => [
                'title' => $data['title_en'],
                'subtitle' => $data['subtitle_en'],
                'description' => $data['description_en']
            ],
            'ar' => [
                'title' => $data['title_ar'],
                'subtitle' => $data['subtitle_ar'],
                'description' => $data['description_ar']
            ],
            'image' => $this->image_manipulate($data['image'] , 'apple'),
            'link' => $data['link']
        ];

        $this->model->create($data);
    }

    public function edit($request , $id)
    {
        $member = $this->model->findOrFail($id);
        $data = [
            'en' => [
                'title' => $request['title_en'],
                'subtitle' => $request['subtitle_en'],
                'description' => $request['description_en']
            ],
            'ar' => [
                'title' => $request['title_ar'],
                'subtitle' => $request['subtitle_ar'],
                'description' => $request['description_ar']
            ],
            'link' => $request['link']
        ];

        if ($request['image']) {
            $this->image_delete($member->image , 'processes');
            $data['image'] = $this->image_manipulate($request['image'] , 'content');
        }
        
        $member->update($data);
    }
}