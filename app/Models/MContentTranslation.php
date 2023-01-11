<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MContentTranslation extends Model
{
    use HasFactory;
    protected $fillable = ['title' , 'description' , 'locale' , 'm_content_id'];
}
