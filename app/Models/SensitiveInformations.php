<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SensitiveInformations extends Model
{
    protected $table = 'seneitive_informations';
    protected $fillable = ['id','year','title','download'];
}
