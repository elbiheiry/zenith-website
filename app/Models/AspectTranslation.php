<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AspectTranslation extends Model
{
    use HasFactory;

    protected $fillable = [
        'description' , 'locale' , 'aspect_id'
    ];
}
