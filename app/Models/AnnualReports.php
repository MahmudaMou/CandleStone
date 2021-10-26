<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnnualReports extends Model
{
    protected $table = 'annual_reports';
    protected $fillable = ['id','year','title','download'];
}
