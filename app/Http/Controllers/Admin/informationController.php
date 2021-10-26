<?php

namespace App\Http\Controllers\Admin;

use App\Models\Informations;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\InfoAdd;
class informationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infm = Informations::all();
        return view('admin.infms',compact('infm'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.infm-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InfoAdd $request)
    {
        $infm= new Informations();
        $infm->title= $request->input('title');

        if($request->hasfile('image')){
            $file= $request->file('image');
            $extension=$file->getClientOriginalExtension(); //getting image extension
            $filename = time().'.' .$extension;
            $file->move('uploads/infm/',$filename);
            $infm->image ='uploads/infm/'.$filename;
         
        }
        else{
            
            $infm->image='';
        }
        $infm->save();
        return redirect()->route('infm')->with('status','An Item is Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Informations  $informations
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $infm =  Informations::find($id);
        if($infm){
            return view('admin.infm-edit',compact('infm'));
          }
          return redirect()->route('infm')->with('wrongstatus','Item not found');
    }
   
    public function update(Request $request,$id)
    {
        $infm=  Informations::find($id);
        $infm->title= $request->input('title');
        

        if($request->hasfile('image')){
            $file= $request->file('image');
            $extension=$file->getClientOriginalExtension(); //getting image extension
            $filename = time().'.' .$extension;
            $file->move('uploads/infm/',$filename);
            $infm->image= 'uploads/infm/'.$filename;
        }
        else{
            
            $infm->image='';
        }
        $infm->update();
        return redirect()->route('infm')->with('status','An Item is Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Informations  $informations
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $infm =  Informations::findOrFail($id);
        $infm->delete();
          return redirect()->route('infm')->with('wrongstatus','An item id deleted');
    }
}
