<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sliders;
use App\Http\Requests\SlidersAdd;

class SlidersController extends Controller
{
      public function index()
      {
        $galary= Sliders::all();
        return view('admin.sliders',compact('galary'));
      }
      public function addview()
      {
        return view('admin.slideradd');
      }
      public function store(SlidersAdd $request)
    {
      try{
        $galary= new Sliders();
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
        return redirect()->route('slider')->with('status','An Item is Added');
      }
      catch(exception $e){
         return redirect()->back()->withInput();
      }

    }
    public function edit(Request $request,$id)
      {
        $performence =  Sliders::find($id);
        if($performence){
          return view('admin.slideredit')->with('performence',$performence);
        }
        return redirect()->route('slider')->with('wrongstatus','Item not found');
      }
      public function update(SlidersAdd $request,$id)
      {
        try{
        $galary=  Sliders::find($id);
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
        return redirect()->route('slider')->with('status','Your Data is Updated');
      }
      catch(exception $e){
         return redirect()->back()->withInput();
      }
      }
      public function delete($id)
      {
          $performence =  Sliders::findOrFail($id);
          $performence->delete();
          return redirect()->back()->with('wrongstatus','Your Data is Deleted');

      }


}
