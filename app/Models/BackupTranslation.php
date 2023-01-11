<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BackupTranslation extends Model
{
    use HasFactory;

    protected $fillable = ['description' , 'locale' , 'backup_id'];
}
