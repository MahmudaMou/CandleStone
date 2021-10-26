<?php

namespace App\Http\Controllers\frontend;

use App\Models\Abouts;
use App\Models\Dates;
use App\Models\DetailInformations;
use App\Models\Informations;
use App\Models\Notes;
use App\Models\Performances;
use App\Models\Sizeinfos;
use App\Models\Sliders;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {

        $slider = Sliders::where('is_active',1)->first();
        $fundPerformance = Performances::all();
        $note = Notes::all();
        $amountsize= Sizeinfos::all();
        $date = Dates::all();
        $information= Informations::with('information')->get();
        $about= Abouts::with('nabout')->get();
        return view('frontend.home',compact('slider','fundPerformance',
            'note','amountsize','date','information','about'));
    }
}
