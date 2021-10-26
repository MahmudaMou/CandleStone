<?php

namespace App\Http\Controllers\Admin;

use App\Models\SellingAgents;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SellingAgentvalidate;
use App\Models\DocumentTabs;

class SellingAgentController extends Controller
{
    public function index()
    {
        $slng= SellingAgents::with('tabs')->get();
        return view('admin.selling-agent',compact('slng'));
    }
    public function create()
    {
        $informations = DocumentTabs::all();
        
        return view('admin.selling-agent-add',compact('informations'));
    }


    public function store(SellingAgentvalidate $request)
    {
         
            try{
           $slng = new  SellingAgents();
           $slng->id=request('id');
           $slng->agent_list=request('agent_list');
           $slng->address=request('address');
           $slng->tab_id=request('tab_id');
           $slng->save();
           return redirect()->route('selling.agent')->with('status','An Item is Added');
   
       }
        catch(exception $e){
           return redirect()->back()->withInput()->with('status','An Item is Added');
        }  
           
       
    }
    public function show(Request $request,$id)
    { 
        $informations = DocumentTabs::all();
        $slng =SellingAgents::find($id);
        if($slng){
            return view('admin.selling-agent-edit',compact('slng','informations'));
          }
          return redirect()->route('selling.agent')->with('wrongstatus','Item not found');
    }
    public function update(SellingAgentvalidate $request,$id)
    { 
        try{
        $slng=  SellingAgents::find($id);
        $slng->id=request('id');
        $slng->agent_list=request('agent_list');
        $slng->address=request('address');
        $slng->tab_id=request('tab_id');
        $slng->update();
        return redirect()->route('selling.agent')->with('status','An Item is Updated');
       }
        catch(exception $e){
        return redirect()->back()->withInput()->with('status','An Item is Added');
        } 

    }
    public function delete($id)
    {
        $slng=  SellingAgents::find($id);
        $slng->delete();
        return redirect()->route('selling.agent')->with('wrongstatus','An Item is deleted');
    }
}
