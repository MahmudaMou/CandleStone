<?php

namespace App\Http\Controllers\Admin;

use App\Models\DetailInformations;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DetailInformationsAdd;
use App\Models\Informations;
class DetailInformation extends Controller
{
    public function index()
    {
        $infm = DetailInformations::all();
        return view('admin.detail-informations',compact('infm'));
    }
    public function create()
    {
        $informations = Informations::all();
        
        return view('admin.detail-information-add',compact('informations'));
    }


    public function store(DetailInformationsAdd $request)
    {
         
            try{
           $infm  = new  DetailInformations();
           $infm ->title=request('title');
           $infm ->text=request('text');
           $infm ->url=request('url');
           $infm ->information_id=request('information_id');
           $infm ->save();
           return redirect()->route('detail.information')->with('status','An Item is Added');
   
       }
        catch(exception $e){
           return redirect()->back()->withInput()->with('status','An Item is Added');
        }  
           
       
    }
    public function show(Request $request,$id)
    { 
        $informations = Informations::all();
        $infm =   DetailInformations::find($id);
        if($infm){
            return view('admin.detail-information-edit',compact('infm','informations'));
          }
          return redirect()->route('infm')->with('wrongstatus','Item not found');
    }
    public function update(Request $request,$id)
    { 
        try{
        $infm=  DetailInformations::find($id);
        $infm->title= $request->input('title');
        $infm->text= $request->input('text');
        $infm->url= $request->input('url');
        $infm->information_id= $request->input('information_id');
        $infm->update();
        return redirect()->route('detail.information')->with('status','An Item is Updated');
       }
        catch(exception $e){
        return redirect()->back()->withInput()->with('status','An Item is Added');
        } 

    }
    public function delete($id)
    {
        $infm=  DetailInformations::find($id);
        $infm->delete();
        return redirect()->route('detail.information')->with('wrongstatus','An Item is deleted');
    }
}
