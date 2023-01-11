<?php

namespace App\Repositories;

use App\Http\Resources\AspectLogoResource;
use App\Models\AspectLogo;
use App\Traits\ImageTrait;

class AspectLogoRepository 
{
    use ImageTrait;

    public $model;

    public function __construct(AspectLogo $model)
    {
        $this->model = $model;
    }

    public function list($take = null): array
    {
        $objects = $this->model->all()->sortByDesc('id')->take($take);

        return AspectLogoResource::collection($objects)->response()->getData(true);
    }

    public function showById($id)
    {
        $partner = $this->model->findOrFail($id);

        return (new AspectLogoResource($partner))->resolve();
    }

    public function create($data)
    {
        $data = [
            'image' => $this->image_manipulate($data['image'] , 'aspects' , 128 , 130)
        ];

        $this->model->create($data);
    }

    public function edit($request , $id)
    {
        $partner = $this->model->findOrFail($id);

        if ($request['image']) {
            $this->image_delete($partner->image , 'aspects');
            $data['image'] = $this->image_manipulate($request['image'] , 'aspects' , 128 , 130);
        }

        $partner->update($data);
    }
}