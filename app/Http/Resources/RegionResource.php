<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RegionResource extends JsonResource
{
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
            'email' => $this->email,
            'phone' => $this->phone,
            'fax' => $this->fax,
            'name_en' => $this->translate('en')->name,
            'name_ar' => $this->translate('ar')->name,
            'username_en' => $this->translate('en')->username,
            'username_ar' => $this->translate('ar')->username,
            'location_en' => $this->translate('en')->location,
            'location_ar' => $this->translate('ar')->location,
            'box_en' => $this->translate('en')->box,
            'box_ar' => $this->translate('ar')->box
        ];
    }
}
