<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolutionMessage extends Model
{
    use HasFactory;
    protected $fillable = [
        'name' , 'school' , 'email' , 'phone' , 'message'
    ];

    public function image()
    {
        $hash = md5(strtolower(trim($this->email)));
        $image = 'http://www.gravatar.com/avatar/'.$hash;

        return $image;
    }

    public function getRouteKeyName()
    {
        return 'id';
    }
}
