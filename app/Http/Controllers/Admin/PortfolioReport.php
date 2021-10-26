<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PortfolioReports;

class PortfolioReport extends Controller
{
    public function index()
    {
        $infm = PortfolioReports::all();
        return view('admin.portfolio-report',compact('infm'));
    }

    public function create()
    {
        return view('admin.portfolio-report-add');
    }

    public function store(Request $request)
    {
         
            try{
           $infm = new PortfolioReports();
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
           return redirect()->route('portfolio.report')->with('status','An Item is Added');
   
       }
        catch(exception $e){
           return redirect()->back()->withInput()->with('status','An Item is Added');
        }  
           
       }
    
    public function show(Request $request,$id)
    {
        $infm =  PortfolioReports::find($id);
        if($infm){
            return view('admin.portfolio-report-edit',compact('infm'));
          }
          return redirect()->route('portfolio.report')->with('wrongstatus','Item not found');
    }
    public function update(Request $request,$id)
    {
        try{
            $infm=  PortfolioReports::find($id);
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
            return redirect()->route('portfolio.report')->with('status','Your Data is Updated');
        }
        catch(exception $e){
           return redirect()->back()->withInput()->with('status','An Item is Added');
        } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PortfolioReports  $PortfolioReports
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $infm =  PortfolioReports::findOrFail($id);
        $infm->delete();
        return redirect()->route('portfolio.report')->with('wrongstatus','Your Data is Updated');
    }
}
