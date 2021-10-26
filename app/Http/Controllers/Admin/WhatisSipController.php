<?php

namespace App\Http\Controllers\Admin;

use App\Models\WhatisSips;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\WhatSipvalidation;

class WhatisSipController extends Controller
{
    public function index()
    {
        $note = WhatisSips::all();
        return view('admin.what-is-sip',compact('note'));
    }

    
    public function create()
    {
        return view('admin.what-is-sip-add');
    }

    
    public function store(WhatSipvalidation $request)
    {
        $note  = new WhatisSips();
        $note ->id=request('id');
        $note ->text=request('text');
        $note->save();
        return redirect()->route('what.is.sip')->with('status','An Item is Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WhatisSips  $WhatisSips
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $note  =  WhatisSips::find($id);
        if($note){
            return view('admin.what-is-sip-edit',compact('note'));
          }
          return redirect()->route('what.is.sip')->with('wrongstatus','Item not found');
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WhatisSips  $WhatisSips
     * @return \Illuminate\Http\Response
     */
    public function update(WhatSipvalidation $request,$id)
    {
        $note  =  WhatisSips::findOrFail($id);
        $note ->id=request('id');
        $note ->text=request('text');
        $note->update();
        return redirect()->route('what.is.sip')->with('status','An Item has updated');
    }
    public function delete(Request $request,$id)
    {
        $note  =  WhatisSips::findOrFail($id);
        $note->delete();
        return redirect()->route('what.is.sip')->with('wrongstatus','An Item has Deleted');
    }
}
