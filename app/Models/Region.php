<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Region extends Model implements TranslatableContract
{
    use HasFactory , Translatable;

    public $translatedAttributes = [
        'name' , 'username' , 'location' , 'box'
    ];

    protected $fillable = ['email' , 'phone' , 'fax'];
}
