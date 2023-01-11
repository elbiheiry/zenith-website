<?php

namespace App\Repositories;

use App\Http\Resources\SolutionResource;
use App\Models\Solution;
use App\Traits\ImageTrait;
use Cviebrock\EloquentSluggable\Services\SlugService;

class SolutionRepository 
{
    use ImageTrait;

    public $model;

    public function __construct(Solution $model)
    {
        $this->model = $model;
    }

    public function list($take = null): array
    {
        $objects = $this->model->all()->sortByDesc('id')->take($take);

        return SolutionResource::collection($objects)->response()->getData(true);
    }

    public function paginated(): array
    {
        $objects = $this->model->orderBy('id' , 'desc')->paginate(6);

        return SolutionResource::collection($objects)->response()->getData(true);
    }

    public function showById($id)
    {
        $member = $this->model->findOrFail($id);

        return (new SolutionResource($member))->resolve();
    }

    public function create($data)
    {
        $data = [
            'en' => [
                'title' => $data['title_en'],
                'brief' => $data['brief_en']
            ],
            'ar' => [
                'title' => $data['title_ar'],
                'brief' => $data['brief_ar']
            ],
            'image' => $this->image_manipulate($data['image'] , 'solutions' , 640 , 480),
            'link' => $data['link'],
            'slug' => SlugService::createSlug(Solution::class , 'slug' , $data['title_en'] , ['unique' => true])
        ];

        $this->model->create($data);
    }

    public function edit($request , $id)
    {
        $member = $this->model->findOrFail($id);
        $data = [
            'en' => [
                'title' => $request['title_en'],
                'brief' => $request['brief_en']
            ],
            'ar' => [
                'title' => $request['title_ar'],
                'brief' => $request['brief_ar']
            ]
        ];

        if ($request['image']) {
            $this->image_delete($member->image , 'solutions');
            $data['image'] = $this->image_manipulate($request['image'] , 'solutions' , 640 , 480);
        }

        if ($member->translate('en')->title != $request['title_en']) {
            $data['slug'] = SlugService::createSlug(Solution::class , 'slug' , $request['title_en'] , ['unique' => true]);
        }

        $member->update($data);
    }
}