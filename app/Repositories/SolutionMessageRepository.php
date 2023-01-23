<?php

namespace App\Repositories;

use App\Http\Resources\SolutionMessageResource;
use App\Models\SolutionMessage;

class SolutionMessageRepository 
{
    public $model;

    public function __construct(SolutionMessage $model)
    {
        $this->model = $model;
    }

    public function list(): array
    {
        $objects = $this->model->orderBy('id' , 'desc')->paginate(6);

        return SolutionMessageResource::collection($objects)->response()->getData(true);
    }

    public function listAjax($data): array
    {
        $objects = $this->model->orderBy( 'id', 'DESC' )->paginate( 6, [ '*' ], 'page', $data->page );
     
        return SolutionMessageResource::collection($objects)->response()->getData(true);
    }

    public function showById(SolutionMessage $message)
    {
        return new SolutionMessageResource($message);
    }
}