<?php

namespace App\Http\Controllers\frontend;

use App\Models\AnnualReports;
use App\Models\FinancialStatements;
use App\Models\Notes;
use App\Models\PerformanceReports;
use App\Models\Performances;
use App\Models\PortfolioReports;
use App\Models\SensitiveInformations;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mockery\Matcher\Not;

class PerformanceController extends Controller
{
    public function index()
    {
        $infm = SensitiveInformations::all();
        $statm = FinancialStatements::all();
        $anul = AnnualReports::all();
        $port = PortfolioReports::all();
        $ninfm = PerformanceReports::all();
        $information = Performances::all();
        $fundItem = Performances::select('fund_name')->groupBy('fund_name')->get();
        $note = Notes::all();
        return view('frontend.performance',compact('infm','statm','anul','port','ninfm','information','note','fundItem'));
    }

    public function search(Request $request)
    {
        $infm = SensitiveInformations::all();
        $statm = FinancialStatements::all();
        $anul = AnnualReports::all();
        $port = PortfolioReports::all();
        $ninfm = PerformanceReports::all();
        $fundItem = Performances::select('fund_name')->groupBy('fund_name')->get();
        $note = Notes::all();
        $search_text = $request->fund_category;
        $search_from = $request->from_date;
        $search_to = $request->date;

        $information = Performances::query();
        if($request->has('fund_category') && $request->filled('fund_category')){
            $information = $information->where('fund_name',$request->fund_category);
        }
        if($request->has('from_date') && $request->filled('from_date')){
            $information = $information->where('nav_as_on','>=',$request->from_date);
        }
        if($request->has('date') && $request->filled('date')){
            $information = $information->where('nav_as_on','<=',$request->date);
        }

        $information = $information->get();

        return view('frontend.performance',compact('infm','statm','anul','port','ninfm','information','note','fundItem'));
    }
}
