<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected $table ='questions';
    protected $guarded=['id'];

    public function tabs()
    {

        return $this->hasOne(DocumentTabs::class,'id','tab_id');
    }
}
