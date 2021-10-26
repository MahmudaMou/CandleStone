<?php

namespace App\Http\Controllers\Admin;

use App\Models\Notes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\NoteAdd;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $note = Notes::all();
        return view('admin.notes',compact('note'));
    }

    
    public function create()
    {
        return view('admin.note-add');
    }

    
    public function store(NoteAdd $request)
    {
        try{
        $note  = new Notes();
        $note ->note_text=request('note_text');
        $note->save();
        return redirect()->route('note')->with('status','An Item is Added');
    }
    catch(exception $e){
       return redirect()->back()->withInput();
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notes  $notes
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $note  =  Notes::find($id);
        if($note){
            return view('admin.note-edit',compact('note'));
          }
          return redirect()->route('note')->with('wrongstatus','Item not found');
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notes  $notes
     * @return \Illuminate\Http\Response
     */
    public function update(NoteAdd $request,$id)
    {
        try{
        $note  =  Notes::findOrFail($id);
        $note ->note_text=request('note_text');
        $note->update();
        return redirect()->route('note')->with('status','An Item has updated');
    }
    catch(exception $e){
       return redirect()->back()->withInput();
    }
    }
    public function delete(Request $request,$id)
    {
        $note  =  Notes::findOrFail($id);
        $note->delete();
        return redirect()->route('note')->with('wrongstatus','An Item has Deleted');
    }
}
