<?php

namespace App\Repositories;

use App\Http\Resources\BackupResource;
use App\Models\Backup;
use App\Traits\ImageTrait;

class BackupRepository 
{
    use ImageTrait;

    public $model;

    public function __construct(Backup $model)
    {
        $this->model = $model;
    }

    public function list($take = null): array
    {
        $objects = $this->model->all()->sortByDesc('id')->take($take);

        return BackupResource::collection($objects)->response()->getData(true);
    }

    public function paginated(): array
    {
        $objects = $this->model->orderBy('id' , 'desc')->paginate(6);

        return BackupResource::collection($objects)->response()->getData(true);
    }

    public function showById($id)
    {
        $member = $this->model->findOrFail($id);

        return (new BackupResource($member))->resolve();
    }

    public function create($data)
    {
        $data = [
            'en' => [
                'description' => $data['description_en']
            ],
            'ar' => [
                'description' => $data['description_ar']
            ],
            'image' => $this->image_manipulate($data['image'] , 'content' , 950 , 540)
        ];

        $this->model->create($data);
    }

    public function edit($request , $id)
    {
        $member = $this->model->findOrFail($id);
        $data = [
            'en' => [
                'description' => $request['description_en'],
            ],
            'ar' => [
                'description' => $request['description_ar'],
            ]
        ];

        if ($request['image']) {
            $this->image_delete($member->image , 'content');
            $data['image'] = $this->image_manipulate($request['image'] , 'content' , 950 , 540);
        }
        
        $member->update($data);
    }
}