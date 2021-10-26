<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Performances;
use App\Http\Requests\fundPerformanceUpdate;
use App\Http\Requests\FundAdd;

class Fundperformence extends Controller
{
    public function index()
    {
        $fund = Performances::all();
        return view('admin.fndprmns',compact('fund'));
    }
    public function add()
    {
      
        $fund = Performances::all();
        return view('admin.fund-add',compact('fund'));
    }
    public function store(FundAdd $request)
    { 
         try{
        $performence = new Performances();
        $performence->fund_name=request('fund_name');
        $performence->nav_as_on=request('nav_as_on');
        $performence->nav_per_unit=request('nav_per_unit');
        $performence->investor_buy_Price=request('investor_buy_Price');
        $performence->investor_sale_price=request('investor_sale_price');
        $performence->save();
        return redirect()->route('fund.perfprmance')->with('status','An Item is Added');

    }
     catch(exception $e){
        return redirect()->back()->withInput();
     }  
        
    }



    public function edit(Request $request,$id)
    {
        $performence =  Performances::find($id);
        if($performence){
            return view('admin.fund-edit',compact('performence'));
          }
          return redirect()->route('fund.perfprmance')->with('wrongstatus','Item not found');
        }
        

    public function update(FundAdd $request,$id)
    {
        try{
        $performence=  Performances::find($id);
        $performence->fund_name=$request->input('fund_name');
        $performence->nav_as_on=$request->input('nav_as_on');
        $performence->nav_per_unit=$request->input('nav_per_unit');
        $performence->investor_buy_Price=$request->input('investor_buy_Price');
        $performence->investor_sale_price=$request->input('investor_sale_price');
        $performence->update();
        return redirect()->route('fund.perfprmance')->with('status','Your Data is Updated');
    }
    catch(exception $e){
       return redirect()->back()->withInput();
    } 
    }
    public function delete($id)
    {
        $performence =  Performances::findOrFail($id);
        $performence->delete();
        return redirect()->route('fund.perfprmance')->with('wrongstatus','Your Data is Updated');
        
    }
}
