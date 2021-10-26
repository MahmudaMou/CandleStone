<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FinancialStatements;
use App\Http\Requests\FinancialStatementvalidate;

class FinancialStatement extends Controller
{
    public function index()
    {
        $infm = FinancialStatements::all();
        return view('admin.finencial-statement',compact('infm'));
    }

    public function create()
    {
        return view('admin.finencial-statement-add');
    }

    public function store(FinancialStatementvalidate $request)
    {
         
            try{
           $infm = new FinancialStatements();
           $infm->id=request('id');
           $infm->year=request('year');
           $infm->title=request('title');
          
           if($request->hasfile('download')){
            $file= $request->file('download');
            $extension=$file->getClientOriginalExtension(); //getting download extension
            $filename = time().'.' .$extension;
            $file->move('uploads/about/',$filename);
            $infm->download= 'uploads/about/'.$filename;
        }
        else{
            
            $infm->download='';
        }
           $infm->save();
           return redirect()->route('finencia.statement')->with('status','An Item is Added');
   
       }
        catch(exception $e){
           return redirect()->back()->withInput()->with('status','An Item is Added');
        }  
           
       }
    
    public function show(Request $request,$id)
    {
        $infm =  FinancialStatements::find($id);
        if($infm){
            return view('admin.finencial-statement-edit',compact('infm'));
          }
          return redirect()->route('finencia.statement')->with('wrongstatus','Item not found');
    }
    public function update(FinancialStatementvalidate $request,$id)
    {
        try{
            $infm=  FinancialStatements::find($id);
            $infm->id=request('id');
            $infm->year=request('year');
            $infm->title=request('title');
             
            if($request->hasfile('download')){
                $file= $request->file('download');
                $extension=$file->getClientOriginalExtension(); //getting download extension
                $filename = time().'.' .$extension;
                $file->move('uploads/about/',$filename);
                $infm->download= 'uploads/about/'.$filename;
            }
            else{
                
                $infm->download='';
            }
            $infm->update();
            return redirect()->route('finencia.statement')->with('status','Your Data is Updated');
        }
        catch(exception $e){
           return redirect()->back()->withInput()->with('status','An Item is Added');
        } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FinancialStatements  $FinancialStatements
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $infm =  FinancialStatements::findOrFail($id);
        $infm->delete();
        return redirect()->route('finencia.statement')->with('wrongstatus','Your Data is Updated');
    }
}
