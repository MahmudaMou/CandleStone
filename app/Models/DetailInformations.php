<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailInformations extends Model
{
    protected $table = 'details_information'; 
    protected $fillable = ['id','title','text','url','information_id'];



    public function comments()
    {
     
        return $this->hasOne('App\Models\Informations','information_id','id');
    }
}
