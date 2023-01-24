<?php

namespace App\Repositories;

use App\Http\Resources\AboutResource;
use App\Models\About;
use App\Traits\ImageTrait;

class AboutRepository 
{
    use ImageTrait;

    public $model;

    public function __construct(About $model)
    {
        $this->model = $model;
    }

    public function show()
    {
        $about = $this->model->firstOrFail();

        return (new AboutResource($about))->resolve();
    }

    public function edit($request)
    {
        $about = $this->model->firstOrFail();
        $data = [
            'en' => [
                'description1' => $request['description1_en'],
                'description2' => $request['description2_en'],
                'description3' => $request['description3_en'],
                'description4' => $request['description4_en']
            ],
            'ar' => [
                'description1' => $request['description1_ar'],
                'description2' => $request['description2_ar'],
                'description3' => $request['description3_ar'],
                'description4' => $request['description4_ar']
            ],
            'clients' => $request['clients'],
            'projects' => $request['projects'],
            'partners' => $request['partners']
        ];

        if ($request['image1']) {
            $this->image_delete($about->image1 , 'about');
            $data['image1'] = $this->image_manipulate($request['image1'] , 'about' , 650 , 450);
        }

        if ($request['image2']) {
            $this->image_delete($about->image2 , 'about');
            $data['image2'] = $this->image_manipulate($request['image2'] , 'about' , 650 , 350);
        }

        if ($request['image3']) {
            $this->image_delete($about->image3 , 'about');
            $data['image3'] = $this->image_manipulate($request['image3'] , 'about' , 650 , 350);
        }

        if ($request['image4']) {
            $this->image_delete($about->image4 , 'about');
            $data['image4'] = $this->image_manipulate($request['image4'] , 'about' , 650 , 350);
        }

        $about->update($data);
    }     
}