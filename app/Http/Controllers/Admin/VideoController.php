<?php

namespace App\Http\Controllers\Admin;

use App\Models\Videos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Videovalidate;

class VideoController extends Controller
{
    public function index()
    {
      $galary= Videos::all();
      return view('admin.video',compact('galary'));
    }
    public function create()
    {
      return view('admin.video-add');
    }
    public function store(Videovalidate $request)
  {
    try{
      $galary= new Videos();
      $galary->id= $request->input('id');
      $galary->url= $request->input('url');
      $galary->note= $request->input('note');
      $galary->is_active= $request->input('is_active');

      if($request->hasfile('video_img')){
          $file= $request->file('video_img');
          $extension=$file->getClientOriginalExtension(); //getting video_img extension
          $filename = time().'.' .$extension;
          $file->move('uploads/galary/',$filename);
          $galary->video_img= 'uploads/galary/'.$filename;
      }
      else{

          $galary->video_img='';
      }
      $galary->save();
      return redirect()->route('videos')->with('status','An Item is Added');
    }
    catch(exception $e){
       return redirect()->back()->withInput();
    }

  }
  public function show(Request $request,$id)
    {
      $galary =  Videos::find($id);
      if($galary){
        return view('admin.video-edit')->with('galary',$galary);
      }
      return redirect()->route('videos')->with('wrongstatus','Item not found');
    }
    public function update(Videovalidate $request,$id)
    {
      try{
      $galary=  Videos::find($id);
      $galary->id= $request->input('id');
      $galary->url= $request->input('url');
      $galary->note= $request->input('note');
      $galary->is_active= $request->input('is_active');

      if($request->hasfile('video_img')){
          $file= $request->file('video_img');
          $extension=$file->getClientOriginalExtension(); //getting video_img extension
          $filename = time().'.' .$extension;
          $file->move('uploads/galary/',$filename);
          $galary->video_img= 'uploads/galary/'.$filename;
      }
      else{

          $galary->video_img='';
      }
      $galary->update();
      return redirect()->route('videos')->with('status','Your Data is Updated');
    }
    catch(exception $e){
       return redirect()->back()->withInput();
    }
    }
    public function delete($id)
    {
        $galary =  Videos::findOrFail($id);
        $galary->delete();
        return redirect()->back()->with('wrongstatus','Your Data is Deleted');

    }
}
