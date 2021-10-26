<?php

namespace App\Http\Controllers\frontend;

use App\Models\Documents;
use App\Models\DocumentTabs;
use App\Models\FundSheets;
use App\Models\SellingAgents;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormsController extends Controller
{
    public function index()
    {
        $sheet = FundSheets::all();
        $tab = DocumentTabs::where('tab_type','FUND DOCUMENT')->get();
        $tabname = Documents::with('tabs')->where('tab_id',1)->get();
        $ntab = DocumentTabs::where('tab_type','Forms')->get();
        $ntabname = Documents::with('tabs')->where('tab_id',2)->get();
        $mtab = DocumentTabs::where('tab_type','SELLING AGENT LIST')->get();
        $list = SellingAgents::all();
        return view('frontend.forms',compact('sheet','tab','tabname','ntab','ntabname','mtab','list'));
    }
}
