<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Informations extends Model
{
    protected $table = 'informations';
    protected $fillable = ['id','title','image'];

    public function information(){
        return $this->hasOne(DetailInformations::class,'information_id','id');
    }
}

