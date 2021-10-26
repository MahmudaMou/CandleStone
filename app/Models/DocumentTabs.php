<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocumentTabs extends Model
{
    protected $table ='documents_tabs';
    protected $guarded=['id'];

    public function questions(){
        return $this->hasMany(Questions::class,'tab_id','id');
    }
}
