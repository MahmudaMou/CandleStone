<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AnnualReports;

class AnnualReport extends Controller
{
    public function index()
    {
        $infm = AnnualReports::all();
        return view('admin.annual-repoet',compact('infm'));
    }

    public function create()
    {
        return view('admin.annual-repoet-add');
    }

    public function store(Request $request)
    {
         
            try{
           $infm = new AnnualReports();
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
           return redirect()->route('annual.repoet')->with('status','An Item is Added');
   
       }
        catch(exception $e){
           return redirect()->back()->withInput()->with('status','An Item is Added');
        }  
           
       }
    
    public function show(Request $request,$id)
    {
        $infm =  AnnualReports::find($id);
        if($infm){
            return view('admin.annual-repoet-edit',compact('infm'));
          }
          return redirect()->route('annual.repoet')->with('wrongstatus','Item not found');
    }
    public function update(Request $request,$id)
    {
        try{
            $infm=  AnnualReports::find($id);
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
            return redirect()->route('annual.repoet')->with('status','Your Data is Updated');
        }
        catch(exception $e){
           return redirect()->back()->withInput()->with('status','An Item is Added');
        } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AnnualReports  $AnnualReports
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $infm =  AnnualReports::findOrFail($id);
        $infm->delete();
        return redirect()->route('annual.repoet')->with('wrongstatus','Your Data is Updated');
    }
}
