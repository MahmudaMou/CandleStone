<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailAbouts extends Model
{
    protected $table = 'about_details';
    protected $fillable = ['id','title','text','url','about_id'];
}
