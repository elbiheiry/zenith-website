<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CenterTranslation extends Model
{
    use HasFactory;

    protected $fillable = ['title' , 'locale' , 'center_id'];
}
