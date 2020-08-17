<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\About;
class AboutController extends Controller
{
  public function view()
  {
    $data['countAbout'] = About::count();
    $data['allData'] = About::all();
    return view('backend.about.view-about', $data);
  }

  public function add()
  {
    return view('backend.about.add-about');
  }

  public function store(Request $request)
  {
    $this->validate($request,[
      'about' => 'required',
      'image' => 'required',
    ]);

    $data = new About();
    $data->about = $request->about;
    $data->created_by = Auth::user()->id;
    if($request->file('image')){
      $file = $request->file('image');
      $filename = date('YmdHi').$file->getClientOriginalName();
      $file->move(public_path('upload'), $filename);
      $data['image']=$filename;
    }
    $data->save();
    return redirect()->route('about.view')->with('success','About added successfully!');
  }

  public function edit($id)
  {
    $editData = About::find($id);
    return view('backend.about.edit-about',compact('editData'));
  }

  public function update(Request $request, $id)
  {
    $this->validate($request,[
      'about' => 'required',
    ]);
    $data = About::find($id);
    $data->updated_by = Auth::user()->id;
    $data->about = $request->about;
    if($request->file('image')){
      @unlink(public_path('upload'.$data->image));
      $file = $request->file('image');
      $filename = date('YmdHi').$file->getClientOriginalName();
      $file->move(public_path('upload'), $filename);
      $data['image']=$filename;
    }
    $data->save();
    return redirect()->route('about.view')->with('success','About updated successfully!');
  }

  public function delete($id)
  {
    $data = About::find($id);
    if(file_exists('public/upload/' .$data->image) AND ! empty($data->image)){
      unlink('public/upload/' .$data->image);
    }
    $data->delete();
    return redirect()->route('about.view')->with('success','About deleted successfully!');
  }
}
