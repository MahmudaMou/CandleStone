<?php

namespace App\Http\Controllers\Admin;

use App\Models\KeyFearures;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\KeyFeaturesValidate;

class KeyFeaturesController extends Controller
{
    public function index()
    {
        $note = KeyFearures::all();
        return view('admin.key-features',compact('note'));
    }

    
    public function create()
    {
        return view('admin.key-features-add');
    }

    
    public function store(KeyFeaturesValidate $request)
    {
        try{
        $note  = new KeyFearures();
        $note ->id=request('id');
        $note ->key_features=request('key_features');
        $note->save();
        return redirect()->route('key.features')->with('status','An Item is Added');
    }
    catch(exception $e){
       return redirect()->back()->withInput();
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KeyFearures  $KeyFearures
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $note  =  KeyFearures::find($id);
        if($note){
            return view('admin.key-features-edit',compact('note'));
          }
          return redirect()->route('key.features')->with('wrongstatus','Item not found');
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KeyFearures  $KeyFearures
     * @return \Illuminate\Http\Response
     */
    public function update(KeyFeaturesValidate $request,$id)
    {
        try{
        $note  =  KeyFearures::find($id);
        $note ->id=request('id');
        $note ->key_features=request('key_features');
        $note->update();
        return redirect()->route('key.features')->with('status','An Item has updated');
    }
    catch(exception $e){
       return redirect()->back()->withInput();
    }
    }
    public function delete(Request $request,$id)
    {
        $note  =  KeyFearures::findOrFail($id);
        $note->delete();
        return redirect()->route('key.features')->with('wrongstatus','An Item has Deleted');
    }
}
