<?php

namespace App\Http\Resources;

use App\Traits\ImageTrait;
use Illuminate\Http\Resources\Json\JsonResource;

class AboutResource extends JsonResource
{
    use ImageTrait;

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'image1' => $this->get_image($this->image1 , 'about'),
            'image2' => $this->get_image($this->image2 , 'about'),
            'image3' => $this->get_image($this->image3 , 'about'),
            'image4' => $this->get_image($this->image4 , 'about'),
            'clients' => $this->clients,
            'projects' => $this->projects,
            'partners' => $this->partners,
            'description1_en' => $this->translate('en')->description1,
            'description1_ar' => $this->translate('ar')->description1,
            'description2_en' => $this->translate('en')->description2,
            'description2_ar' => $this->translate('ar')->description2,
            'description3_en' => $this->translate('en')->description3,
            'description3_ar' => $this->translate('ar')->description3,
            'description4_en' => $this->translate('en')->description4,
            'description4_ar' => $this->translate('ar')->description4,
        ];
    }
}
