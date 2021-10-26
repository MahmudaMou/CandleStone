<?php

namespace App\Http\Controllers\Admin;

use App\Models\FundSheets;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\FundSheetvalidate;

class FundSheetController extends Controller
{
    public function index()
    {
        $slng= FundSheets::all();
        return view('admin.fund-sheet',compact('slng'));
    }
    public function create()
    {   
        return view('admin.fund-sheet-add');
    }


    public function store(FundSheetvalidate $request)
    {
         
            try{
           $slng = new  FundSheets();
           $slng->id=request('id');
           $slng->features=request('features');
           $slng->description=request('description');
           $slng->save();
           return redirect()->route('fund.sheet')->with('status','An Item is Added');
   
       }
        catch(exception $e){
           return redirect()->back()->withInput()->with('status','An Item is Added');
        }  
           
       
    }
    public function show(Request $request,$id)
    { 
        $slng =FundSheets::find($id);
        if($slng){
            return view('admin.fund-sheet-edit',compact('slng'));
          }
          return redirect()->route('fund.sheet')->with('wrongstatus','Item not found');
    }
    public function update(FundSheetvalidate $request,$id)
    { 
        try{
        $slng=  FundSheets::find($id);
        $slng->id=request('id');
           $slng->features=request('features');
           $slng->description=request('description');
        $slng->update();
        return redirect()->route('fund.sheet')->with('status','An Item is Updated');
       }
        catch(exception $e){
        return redirect()->back()->withInput()->with('status','An Item is Added');
        } 

    }
    public function delete($id)
    {
        $slng=  FundSheets::find($id);
        $slng->delete();
        return redirect()->route('fund.sheet')->with('wrongstatus','An Item is deleted');
    }
}
