<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class About extends Model implements TranslatableContract
{
    use HasFactory , Translatable;

    public $translatedAttributes = [
        'description1' , 'description2' , 'description3', 'description4'
    ];

    protected $fillable = ['image1' , 'image2' , 'image3' , 'image4' , 'clients' , 'projects' , 'partners'];
}
