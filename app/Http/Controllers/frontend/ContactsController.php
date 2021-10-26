<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contacts;

class ContactsController extends Controller
{
    public function index()
    {
        return view('frontend.contact');
    }
    public function store(Request $request)
    {  
        
         try{
        $contact = new Contacts();
        $contact->name=request('name');
        $contact->email=request('email');
        $contact->phone=request('phone');
        $contact->massage=request('massage');
        $contact->save();
        return redirect()->route('frontend.contacts')->with('status','Success!your massage sent successfully');

    }
     catch(exception $e){
        return redirect()->back()->withInput()->with('status','An Item is Added');
     }  
        
    }
}
