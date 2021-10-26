<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioReports extends Model
{
    protected $table = 'portfolio_reports';
    protected $fillable = ['id','year','title','download'];
}
