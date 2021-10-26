<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sips;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Sipvalidation;

class SipController extends Controller
{
    public function index()
    {
        $slng= Sips::all();
        return view('admin.sip',compact('slng'));
    }
    public function create()
    {
        $slng = Sips::all();
        
        return view('admin.sip-add',compact('slng'));
    }


    public function store(Sipvalidation $request)
    {
         
            try{
           $slng = new  Sips();
           $slng->id=request('id');
           $slng->title=request('title');
           $slng->text=request('text');
           if($request->hasfile('image')){
            $file= $request->file('image');
            $extension=$file->getClientOriginalExtension(); //getting image extension
            $filename = time().'.' .$extension;
            $file->move('uploads/about/',$filename);
            $slng->image= 'uploads/about/'.$filename;
        }
        else{
        
            $about->image='';
        }
           $slng->save();

           return redirect()->route('sips')->with('status','An Item is Added');
   
       }
        catch(exception $e){
           return redirect()->back()->withInput()->with('status','An Item is Added');
        }  
           
       
    }
    public function show(Request $request,$id)
    { 
        $slng =Sips::find($id);
        if($slng){
            return view('admin.sip-edit',compact('slng'));
          }
          return redirect()->route('sips')->with('wrongstatus','Item not found');
    }
    public function update(Sipvalidation $request,$id)
    { 
        try{
        $slng=  Sips::find($id);
        $slng->id=request('id');
        $slng->title=request('title');
        $slng->text=request('text');

         if($request->hasfile('image')){
               $file= $request->file('image');
               $extension=$file->getClientOriginalExtension(); //getting image extension
               $filename = time().'.' .$extension;
               $file->move('uploads/about/',$filename);
               $slng->image= 'uploads/about/'.$filename;
                }
           else{
            
            $about->image='';
        }
        $slng->update();
        return redirect()->route('sips')->with('status','An Item is Updated');
       }
        catch(exception $e){
        return redirect()->back()->withInput()->with('status','An Item is Added');
        } 

    }
    public function delete($id)
    {
        $slng=  Sips::find($id);
        $slng->delete();
        return redirect()->route('sips')->with('wrongstatus','An Item is deleted');
    }
}
