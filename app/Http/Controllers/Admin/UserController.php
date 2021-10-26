<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    public function users(){
        $users = User::all();
        return view('admin.users',compact('users'));
    }
    public function registeredit(Request $request,$id)
    {
        $users = User::findOrFail($id);
        return view('admin.regieter-edit')->with('users',$users);
    }

            public function registerupdate(Request $request,$id)
        {
            // dd('ok');
             $users= User::find($id);

              $users->name=$request->input('username');
              $users->usertype=$request->input('usertype');
             $users->update();
          return redirect('/users')->with('status','Your Data is Updated');

    }
    public function registerdelete($id)
    {
        $users = User::findOrFail($id);
        $users->delete();
        return redirect('/users')->with('wrongstatus','Your Data is Deleted');
        
    }
}
