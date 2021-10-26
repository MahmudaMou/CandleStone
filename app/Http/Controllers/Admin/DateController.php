<?php

namespace App\Http\Controllers\Admin;

use App\Models\Dates;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DateAdd;
class DateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date = Dates::all();
        return view('admin.dates',compact('date'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.date-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DateAdd $request)
    {
        $date  = new Dates();
        $date ->title=request('title');
        $date ->date=request('date');
        $date->save();
        return redirect()->route('date')->with('status','An Item is Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dates  $dates
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        
        $date  = Dates::find($id);
        if($date){
            return view('admin.date-edit',compact('date'));
          }
          return redirect()->route('date')->with('wrongstatus','Item not found');
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dates  $dates
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $date  =  Dates::findOrFail($id);
        $date ->title=request('title');
        $date ->date=request('date');
        $date->update();
        return redirect()->route('date')->with('status','An Item is Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dates  $dates
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request,$id)
    {
        $date  =  Dates::findOrFail($id);
        $date->delete();
        return redirect()->route('date')->with('wrongstatus','An item is deleted');
    }
}
