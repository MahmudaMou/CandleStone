<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sizeinfos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SizeAdd;
class SizeinfoController extends Controller
{
   
    public function index()
    {
        $size = Sizeinfos::all();
        return view('admin.sizes',compact('size'));
    }

   
    public function create()
    {
        return view('admin.size-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SizeAdd $request)
    {
        $size  = new Sizeinfos();
        $size ->title=request('title');
        $size ->amount=request('amount');
        $size->save();
        return redirect()->route('size')->with('status','An Item is Added');
    }

  
    public function show(Request $request,$id)
    {
        $size  =  Sizeinfos::find($id);
        if($size){
            return view('admin.size-edit',compact('size'));
          }
          return redirect()->route('size')->with('wrongstatus','Item not found');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sizeinfos  $sizeinfos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $size  =  Sizeinfos::findOrFail($id);
        $size ->title=request('title');
        $size ->amount=request('amount');
        $size->update();
        return redirect()->route('size')->with('status','An Item is Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sizeinfos  $sizeinfos
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request,$id)
    {
        $size  =  Sizeinfos::findOrFail($id);
        $size->delete();
        return redirect()->route('size')->with('wrongstatus','An Item is deleted');
    }
}
