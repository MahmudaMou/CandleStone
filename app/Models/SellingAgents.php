<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SellingAgents extends Model
{
    protected $table ='selling_agents';
    protected $guarded=['id'];

    public function tabs()
    {

        return $this->hasOne(DocumentTabs::class,'id','tab_id');
    }
}
