<?php

namespace App\Http\Controllers\Admin;

use App\Models\SipSliders;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SipSlidervalidate;

class SipSliderController extends Controller
{
    public function index()
      {
        $galary= SipSliders::all();
        return view('admin.sip-slider',compact('galary'));
      }
      public function create()
      {
        return view('admin.sip-slider-add');
      }
      public function store(SipSlidervalidate $request)
    {
      try{
        $galary= new SipSliders();
        $galary->title= $request->input('title');
        $galary->is_active= $request->input('is_active');

        if($request->hasfile('image')){
            $file= $request->file('image');
            $extension=$file->getClientOriginalExtension(); //getting image extension
            $filename = time().'.' .$extension;
            $file->move('uploads/galary/',$filename);
            $galary->image= 'uploads/galary/'.$filename;
        }
        else{

            $galary->image='';
        }
        $galary->save();
        return redirect()->route('sip.slider')->with('status','An Item is Added');
      }
      catch(exception $e){
         return redirect()->back()->withInput();
      }

    }
    public function show(Request $request,$id)
      {
        $performence =  SipSliders::find($id);
        if($performence){
          return view('admin.sip-slider-edit')->with('performence',$performence);
        }
        return redirect()->route('sip.slider')->with('wrongstatus','Item not found');
      }
      public function update(SipSlidervalidate $request,$id)
      {
        try{
        $galary=  SipSliders::find($id);
        $galary->title= $request->input('title');
        $galary->is_active= $request->input('is_active');

        if($request->hasfile('image')){
            $file= $request->file('image');
            $extension=$file->getClientOriginalExtension(); //getting image extension
            $filename = time().'.' .$extension;
            $file->move('uploads/galary/',$filename);
            $galary->image= 'uploads/galary/'.$filename;
        }
        else{

            $galary->image='';
        }
        $galary->update();
        return redirect()->route('sip.slider')->with('status','Your Data is Updated');
      }
      catch(exception $e){
         return redirect()->back()->withInput();
      }
      }
      public function delete($id)
      {
          $performence =  SipSliders::findOrFail($id);
          $performence->delete();
          return redirect()->back()->with('wrongstatus','Your Data is Deleted');

      }
}
