<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegionTranslation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name' , 'username' , 'location' , 'box' , 'locale' , 'region_id'
    ];
}
