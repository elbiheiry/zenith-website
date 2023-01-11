<?php

namespace App\Models;

use App\Traits\ImageTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AspectLogo extends Model
{
    use HasFactory , ImageTrait;

    protected $fillable = ['image'];

    public function delete()
    {
        $this->image_delete($this->image , 'aspects');

        return parent::delete();
    }
}
