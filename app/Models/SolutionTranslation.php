<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolutionTranslation extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'brief' , 'locale' , 'solution_id'];
}
