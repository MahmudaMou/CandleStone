<?php

namespace App\Http\Controllers\Admin;

use App\Models\Questions;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\QuestionValidate;
use App\Models\DocumentTabs;

class QuestionController extends Controller
{
    public function index()
    {
        $slng= Questions::with('tabs')->get();
        return view('admin.question',compact('slng'));
    }
    public function create()
    {
        $informations = DocumentTabs::all();
        
        return view('admin.question-add',compact('informations'));
    }


    public function store(QuestionValidate $request)
    {
         
            try{
           $slng = new  Questions();
           $slng->id=request('id');
           $slng->question=request('question');
           $slng->answer=request('answer');
           $slng->tab_id=request('tab_id');
           $slng->save();
           return redirect()->route('questions')->with('status','An Item is Added');
   
       }
        catch(exception $e){
           return redirect()->back()->withInput()->with('status','An Item is Added');
        }  
           
       
    }
    public function show(Request $request,$id)
    { 
        $informations = DocumentTabs::all();
        $slng =Questions::find($id);
        if($slng){
            return view('admin.question-edit',compact('slng','informations'));
          }
          return redirect()->route('questions')->with('wrongstatus','Item not found');
    }
    public function update(QuestionValidate $request,$id)
    { 
        try{
        $slng=  Questions::find($id);
        $slng->id=request('id');
        $slng->question=request('question');
        $slng->answer=request('answer');
        $slng->tab_id=request('tab_id');
        $slng->update();
        return redirect()->route('questions')->with('status','An Item is Updated');
       }
        catch(exception $e){
        return redirect()->back()->withInput()->with('status','An Item is Added');
        } 

    }
    public function delete($id)
    {
        $slng=  Questions::find($id);
        $slng->delete();
        return redirect()->route('questions')->with('wrongstatus','An Item is deleted');
    }
}
