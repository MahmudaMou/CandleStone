<?php

namespace App\Http\Controllers\frontend;

use App\Models\Documents;
use App\Models\DocumentTabs;
use App\Models\Questions;
use App\Models\Videos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KnowledgeController extends Controller
{
    public function index()
    {
        $tab = DocumentTabs::with('questions')
            ->where('tab_type','FREQUENTLY ASKED QUESTION')->get();
        $dfiles = Documents::where('file_name','other documens')->first();
        $video = Videos::all();

        return view('frontend.knowledge',compact('tab','dfiles','video'));
    }
}
