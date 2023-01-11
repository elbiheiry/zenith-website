<?php

namespace App\Models;

use App\Traits\ImageTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Cviebrock\EloquentSluggable\Sluggable;

class Solution extends Model implements TranslatableContract
{
    use HasFactory , Translatable , Sluggable , ImageTrait;

    public $translatedAttributes = ['title', 'brief'];

    protected $fillable = [
        'slug' , 'image' , 'link'
    ];

    /**
     * create slug input 
     *
     * @return response
     */
    public function sluggable() :Array
    {
        return [
            'slug' => [
                'source' => 'title_en'
            ]
        ];
    }

    public function contents()
    {
        return $this->hasMany(SContent::class);
    }

    public function delete()
    {
        $this->image_delete($this->image , 'solutions');

        return parent::delete();
    }
}
