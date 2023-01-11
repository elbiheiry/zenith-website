<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JamfStepTranslation extends Model
{
    use HasFactory;
    protected $fillable = ['title' , 'description' , 'locale' , 'jamf_step_id'];
}
