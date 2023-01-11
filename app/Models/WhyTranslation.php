<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhyTranslation extends Model
{
    use HasFactory;
    protected $fillable = ['title' , 'description' , 'locale' , 'why_id'];
}
