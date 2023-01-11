<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IpadTranslation extends Model
{
    use HasFactory;

    protected $fillable = [
        'title' , 'description' , 'locale' , 'ipad_id'
    ];
}
