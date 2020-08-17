<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Blog;
class BlogController extends Controller
{
  public function view()
  {
    $data['allData'] = Blog::all();
    return view('backend.blog.view-blog', $data);
  }

  public function add()
  {
    return view('backend.blog.add-blog');
  }

  public function store(Request $request)
  {
    $this->validate($request,[
      'date' => 'required',
      'short_title' => 'required',
      'long_title' => 'required',
      'image' => 'required',
    ]);

    $data = new Blog();
    $data->date = date('Y-m-d', strtotime($request->date));
    $data->short_title = $request->short_title;
    $data->long_title = $request->long_title;
    $data->created_by = Auth::user()->id;
    if($request->file('image')){
      $file = $request->file('image');
      $filename = date('YmdHi').$file->getClientOriginalName();
      $file->move(public_path('upload'), $filename);
      $data['image']=$filename;
    }
    $data->save();
    return redirect()->route('blog.view')->with('success','Data added successfully!');
  }

  public function edit($id)
  {
    $editData = Blog::find($id);
    return view('backend.blog.edit-blog',compact('editData'));
  }

  public function update(Request $request, $id)
  {
    $this->validate($request,[
      'date' => 'required',
      'short_title' => 'required',
      'long_title' => 'required',
    ]);
    $data = Blog::find($id);

    $data->date = $data->date = date('Y-m-d', strtotime($request->date));
    $data->short_title = $request->short_title;
    $data->long_title = $request->long_title;
    $data->updated_by = Auth::user()->id;
    if($request->file('image')){
      @unlink(public_path('upload'.$data->image));
      $file = $request->file('image');
      $filename = date('YmdHi').$file->getClientOriginalName();
      $file->move(public_path('upload'), $filename);
      $data['image']=$filename;
    }
    $data->save();
    return redirect()->route('blog.view')->with('success','Data updated successfully!');
  }

  public function delete($id)
  {
    $data = Blog::find($id);
    if(file_exists('public/upload/' .$data->image) AND ! empty($data->image)){
      unlink('public/upload/' .$data->image);
    }
    $data->delete();
    return redirect()->route('blog.view')->with('success','Data deleted successfully!');
  }
}
