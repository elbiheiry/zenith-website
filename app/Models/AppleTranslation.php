<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppleTranslation extends Model
{
    use HasFactory;

    protected $fillable = ['title' , 'subtitle' , 'description' , 'locale' , 'apple_id'];
}
