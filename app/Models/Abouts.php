<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Abouts extends Model
{
    protected $table = 'abouts';
    protected $fillable = ['id','title','text','image'];

    public function nabout(){
        return $this->hasOne(DetailAbouts::class,'about_id','id');
    }
}
