<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IContentTranslation extends Model
{
    use HasFactory;
    protected $fillable = ['title' , 'description' , 'locale' , 'i_content_id'];
}
