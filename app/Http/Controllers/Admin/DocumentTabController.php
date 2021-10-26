<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DocumentTabs;
use App\Http\Requests\DocumentTabvalidate;

class DocumentTabController extends Controller
{
    public function index()
    {
        $fund = DocumentTabs::all();
        return view('admin.document-tab',compact('fund'));
    }
    public function create()
    {
      
        $fund = DocumentTabs::all();
        return view('admin.document-tab-add',compact('fund'));
    }
    public function store(DocumentTabvalidate $request)
    { 
         try{
        $performence = new DocumentTabs();
        $performence->id=request('id');
        $performence->tab_name=request('tab_name');
        $performence->tab_type=request('tab_type');
        $performence->save();
        return redirect()->route('document.tab')->with('status','An Item is Added');

    }
     catch(exception $e){
        return redirect()->back()->withInput();
     }  
        
    }



    public function show(Request $request,$id)
    {
        $performence =  DocumentTabs::find($id);
        if($performence){
            return view('admin.document-tab-edit',compact('performence'));
          }
          return redirect()->route('document.tab')->with('wrongstatus','Item not found');
        }
        

    public function update(DocumentTabvalidate $request,$id)
    {
        try{
        $performence=  DocumentTabs::find($id);
        $performence->id=request('id');
        $performence->tab_name=request('tab_name');
        $performence->tab_type=request('tab_type');
        $performence->update();
        return redirect()->route('document.tab')->with('status','Your Data is Updated');
    }
    catch(exception $e){
       return redirect()->back()->withInput();
    } 
    }
    public function delete($id)
    {
        $performence =  DocumentTabs::findOrFail($id);
        $performence->delete();
        return redirect()->route('document.tab')->with('wrongstatus','Your Data is Updated');
        
    }
}
