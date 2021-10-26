<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PerformanceReports extends Model
{
    protected $table = 'performance_report';
    protected $fillable = ['id','year','title','download'];
}
