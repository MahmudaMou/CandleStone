<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sizeinfos extends Model
{
    protected $table ='sizeinfos';
    protected $fillable=['id','title','amount'];
}
