<?php

namespace App\Http\Controllers\frontend;

use App\Models\Documents;
use App\Models\KeyFearures;
use App\Models\Sips;
use App\Models\SipSliders;
use App\Models\WhatisSips;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SipController extends Controller
{
    public function index()
    {
        $slider = SipSliders::where('is_active',1)->first();
        $whatsip= WhatisSips::all();
        $sips= Sips::all();
        $key = KeyFearures::all();
        $files = Documents::where('file_name','SIP FORM')->first();
        return view('frontend.sip',compact('slider','whatsip','sips','key','files'));
    }
}
