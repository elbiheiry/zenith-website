<?php

namespace App\Repositories;

use App\Http\Resources\RegionResource;
use App\Models\Region;

class RegionRepository 
{
    public $model;

    public function __construct(Region $model)
    {
        $this->model = $model;
    }

    public function list(): array
    {
        $objects = $this->model->all()->sortByDesc('id');

        return RegionResource::collection($objects)->response()->getData(true);
    }

    public function showById($id)
    {
        $member = $this->model->findOrFail($id);

        return (new RegionResource($member))->resolve();
    }

    public function create($data)
    {
        $data = [
            'en' => [
                'name' => $data['name_en'],
                'username' => $data['username_en'],
                'location' => $data['location_en'],
                'box' => $data['box_en'],
            ],
            'ar' => [
                'name' => $data['name_ar'],
                'username' => $data['username_ar'],
                'location' => $data['location_ar'],
                'box' => $data['box_ar'],
            ],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'fax' => $data['fax']
        ];

        $this->model->create($data);
    }

    public function edit($request , $id)
    {
        $member = $this->model->findOrFail($id);
        $data = [
            'en' => [
                'name' => $request['name_en'],
                'username' => $request['username_en'],
                'location' => $request['location_en'],
                'box' => $request['box_en'],
            ],
            'ar' => [
                'name' => $request['name_ar'],
                'username' => $request['username_ar'],
                'location' => $request['location_ar'],
                'box' => $request['box_ar'],
            ],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'fax' => $request['fax']
        ];

        $member->update($data);
    }  
}