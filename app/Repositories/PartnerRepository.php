<?php

namespace App\Repositories;

use App\Http\Resources\PartnerResource;
use App\Models\Partner;
use App\Traits\ImageTrait;

class PartnerRepository 
{
    use ImageTrait;

    public $model;

    public function __construct(Partner $model)
    {
        $this->model = $model;
    }

    public function list(): array
    {
        $objects = $this->model->all()->sortByDesc('id');

        return PartnerResource::collection($objects)->response()->getData(true);
    }

    public function showById($id)
    {
        $partner = $this->model->findOrFail($id);

        return (new PartnerResource($partner))->resolve();
    }

    public function create($data)
    {
        $data = [
            'image' => $this->image_manipulate($data['image'] , 'partners' , 180 , 70)
        ];

        $this->model->create($data);
    }

    public function edit($request , $id)
    {
        $partner = $this->model->findOrFail($id);

        if ($request['image']) {
            $this->image_delete($partner->image , 'partners');
            $data['image'] = $this->image_manipulate($request['image'] , 'partners' , 180 , 70);
        }

        $partner->update($data);
    }
}