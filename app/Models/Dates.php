<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dates extends Model
{
    protected $table = 'impdate';
    protected $fillable = ['id','title','date'];
}
