<?php

namespace App\Http\Controllers\Admin;

use App\Models\Abouts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Aboutvalidate;

class AboutsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = Abouts::all();
        return view('admin.abouts',compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Aboutvalidate $request)
    {
        $about= new Abouts();
        $about->title= $request->input('title');
        $about->text= $request->input('text');

        if($request->hasfile('image')){
            $file= $request->file('image');
            $extension=$file->getClientOriginalExtension(); //getting image extension
            $filename = time().'.' .$extension;
            $file->move('uploads/about/',$filename);
            $about->image= 'uploads/about/'.$filename;
        }
        else{
        
            $about->image='';
        }
        $about->save();
        return redirect()->route('about')->with('status','An Item is Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Abouts  $abouts
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $about =  Abouts::find($id);
        if($about){
            return view('admin.about-edit')->with('about',$about);
          }
          return redirect()->route('about')->with('wrongstatus','Item not found');
    }

    
    public function update(Aboutvalidate $request,$id)
    {
        $about=  Abouts::find($id);
        $about->title= $request->input('title');
        $about->text= $request->input('text');
        
        

        if($request->hasfile('image')){
            $file= $request->file('image');
            $extension=$file->getClientOriginalExtension(); //getting image extension
            $filename = time().'.' .$extension;
            $file->move('uploads/about/',$filename);
            $about->image= 'uploads/about/'.$filename;
        }
        else{
            
            $about->image='';
        }
        $about->update();
        return redirect()->route('about')->with('status','An Item is Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Abouts  $abouts
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    { 
        try{
        $about =  Abouts ::findOrFail($id);
        $about->delete();
          return redirect()->route('about')->with('wrongstatus','An item id deleted');
        }
        catch(exception $e){
           return redirect()->back()->withInput()->with('wrongstatus','Cannot delete or update a parent row');
        }
         
        }
}
