<?php

namespace App\Http\Controllers\Admin;

use App\Models\SensitiveInformations;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddSensitiveInformation;

class SensitiveInformation extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infm = SensitiveInformations::all();
        return view('admin.seneitive-info',compact('infm'));
    }

    public function create()
    {
        return view('admin.seneitive-info-add');
    }

    public function store(AddSensitiveInformation $request)
    {
         
            try{
           $infm = new SensitiveInformations();
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
           return redirect()->route('sensitive.info')->with('status','An Item is Added');
   
       }
        catch(exception $e){
           return redirect()->back()->withInput()->with('status','An Item is Added');
        }  
           
       }
    
    public function show(Request $request,$id)
    {
        $infm =  SensitiveInformations::find($id);
        if($infm){
            return view('admin.seneitive-info-edit',compact('infm'));
          }
          return redirect()->route('sensitive.info')->with('wrongstatus','Item not found');
    }
    public function update(AddSensitiveInformation $request,$id)
    {
        try{
            $infm=  SensitiveInformations::find($id);
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
            return redirect()->route('sensitive.info')->with('status','Your Data is Updated');
        }
        catch(exception $e){
           return redirect()->back()->withInput()->with('status','An Item is Added');
        } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SensitiveInformations  $sensitiveInformations
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $infm =  SensitiveInformations::findOrFail($id);
        $infm->delete();
        return redirect()->route('sensitive.info')->with('wrongstatus','Your Data is Updated');
    }
}
