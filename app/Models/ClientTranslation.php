<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientTranslation extends Model
{
    use HasFactory;
    
    protected $fillable = ['title' , 'description' , 'locale' , 'client_id'];
}
