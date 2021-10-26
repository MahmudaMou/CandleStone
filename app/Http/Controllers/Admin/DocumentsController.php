<?php

namespace App\Http\Controllers\Admin;

use App\Models\Documents;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use  App\Http\Requests\DocumentValidate;
use App\Models\DocumentTabs;

class DocumentsController extends Controller
{
    public function index()
    {
        $infm = Documents::with('tabs')->get();
        return view('admin.document',compact('infm'));
    }
    public function create()

    {
        $informations = DocumentTabs::all();
        return view('admin.document-add',compact('informations'));
    }


    public function store(DocumentValidate $request)
    {

            try{
           $infm  = new  Documents();
           $infm->id=request('id');
           $infm->file_name=request('file_name');
           $infm->tab_id=request('tab_id');

                if($request->hasfile('file')){
            $file= $request->file('file');
            $extension=$file->getClientOriginalExtension(); //getting file extension
            $filename = time().'.' .$extension;
            $file->move('uploads/infm/',$filename);
            $infm->file= 'uploads/infm/'.$filename;
        }
        else{

            $infm->file='';
        }
           $infm ->save();
           return redirect()->route('documents')->with('status','An Item is Added');

       }
        catch(exception $e){
           return redirect()->back()->withInput()->with('status','An Item is Added');
        }


    }
    public function show(Request $request,$id)
    {
        $informations = DocumentTabs::all();

        $infm =   Documents::find($id);
        if($infm){
            return view('admin.document-edit',compact('infm','informations'));
          }
          return redirect()->route('documents')->with('wrongstatus','Item not found');
    }
    public function update(DocumentValidate $request,$id)
    {
        try{
            $infm  = Documents::find($id);
           $infm->id=request('id');
           $infm->file_name=request('file_name');
           $infm->tab_id=request('tab_id');

                if($request->hasfile('file')){
            $file= $request->file('file');
            $extension=$file->getClientOriginalExtension(); //getting file extension
            $filename = time().'.' .$extension;
            $file->move('uploads/infm/',$filename);
            $infm->file= 'uploads/infm/'.$filename;
        }
        else{

            $infm->file='';
        }

        $infm->update();
        return redirect()->route('documents')->with('status','An Item is Updated');
       }
        catch(exception $e){
        return redirect()->back()->withInput()->with('status','An Item is Added');
        }

    }
    public function delete($id)
    {
        $infm=  Documents::find($id);
        $infm->delete();
        return redirect()->route('documents')->with('wrongstatus','An Item is deleted');
    }

}
