<?php

namespace App\Http\Resources;

use App\Traits\ImageTrait;
use Illuminate\Http\Resources\Json\JsonResource;

class SolutionResource extends JsonResource
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
            'slug' => $this->slug,
            'link' => $this->link,
            'image' => $this->get_image($this->image , 'solutions'),
            'title_en' => $this->translate('en')->title,
            'title_ar' => $this->translate('ar')->title,
            'brief_en' => $this->translate('en')->brief,
            'brief_ar' => $this->translate('ar')->brief,
            'contents' => SContentResource::collection($this->contents)->response()->getData(true)
        ];
    }
}
