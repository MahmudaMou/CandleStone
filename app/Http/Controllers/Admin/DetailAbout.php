<?php

namespace App\Http\Controllers\Admin;

use App\Models\DetailAbouts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Abouts;
use App\Http\Requests\DetailAboutAdd;

class DetailAbout extends Controller
{
    public function index()
    {
        $infm = DetailAbouts::all();
        return view('admin.detail-abouts',compact('infm'));
    }
    public function create()
    {   
        $informations = Abouts::all();
        return view('admin.detail-about-add',compact('informations'));
    }


    public function store(DetailAboutAdd $request)
    {
         
            try{
           $infm  = new  DetailAbouts();
           $infm ->title=request('title');
           $infm ->text=request('text');
           $infm ->url=request('url');
           $infm ->about_id=request('about_id');
           $infm ->save();
           return redirect()->route('detail.about')->with('status','An Item is Added');
   
       }
        catch(exception $e){
           return redirect()->back()->withInput()->with('status','An Item is Added');
        }  
           
       
    }
    public function show(Request $request,$id)
    {
        $infm =   DetailAbouts::find($id);
        $informations = Abouts::all();
        if($infm){
            return view('admin.detail-about-edit',compact('infm','informations'));
          }
          return redirect()->route('detail.about')->with('wrongstatus','Item not found');
    }
    public function update(Request $request,$id)
    { 
        try{
        $infm=  DetailAbouts::find($id);
        $infm->title= $request->input('title');
        $infm->text= $request->input('text');
        $infm->url= $request->input('url');
        $infm->about_id= $request->input('about_id');
        $infm->update();
        return redirect()->route('detail.about')->with('status','An Item is Updated');
       }
        catch(exception $e){
        return redirect()->back()->withInput()->with('status','An Item is Added');
        } 

    }
    public function delete($id)
    {
        $infm=  DetailAbouts::find($id);
        $infm->delete();
        return redirect()->route('detail.about')->with('wrongstatus','An Item is deleted');
    }
}
