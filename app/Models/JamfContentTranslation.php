<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JamfContentTranslation extends Model
{
    use HasFactory;

    protected $fillable = [
        'title' , 'description' , 'locale' , 'jamf_content_id'
    ];
}
