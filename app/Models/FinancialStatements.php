<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FinancialStatements extends Model
{
    protected $table = 'financial_statements';
    protected $fillable = ['id','year','title','download'];
    
}
