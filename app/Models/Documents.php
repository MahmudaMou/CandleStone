<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    protected $table ='documents';
    protected $guarded=['id'];



    public function tabs()
    {

        return $this->hasOne(DocumentTabs::class,'id','tab_id');
    }
}
