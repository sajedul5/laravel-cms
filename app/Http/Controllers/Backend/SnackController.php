<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Snack;
class SnackController extends Controller
{
  public function view()
  {
    $data['allData'] = Snack::all();
    return view('backend.menu.snack.view-snack', $data);
  }

  public function add()
  {
    return view('backend.menu.snack.add-snack');
  }

  public function store(Request $request)
  {
    $this->validate($request,[
      'title' => 'required',
      'price' => 'required',
      'description' => 'required',
      'image' => 'required',
    ]);

    $data = new Snack();
    $data->title = $request->title;
    $data->price = $request->price;
    $data->description = $request->description;
    $data->created_by = Auth::user()->id;
    if($request->file('image')){
      $file = $request->file('image');
      $filename = date('YmdHi').$file->getClientOriginalName();
      $file->move(public_path('upload'), $filename);
      $data['image']=$filename;
    }
    $data->save();
    return redirect()->route('snacks.view')->with('success','Snack added successfully!');
  }

  public function edit($id)
  {
    $editData = Snack::find($id);
    return view('backend.menu.snack.edit-snack',compact('editData'));
  }

  public function update(Request $request, $id)
  {
    $this->validate($request,[
      'title' => 'required',
      'price' => 'required',
      'description' => 'required',
    ]);
    $data = Snack::find($id);
    $data->updated_by = Auth::user()->id;
    $data->title = $request->title;
    $data->price = $request->price;
    $data->description = $request->description;
    if($request->file('image')){
      @unlink(public_path('upload'.$data->image));
      $file = $request->file('image');
      $filename = date('YmdHi').$file->getClientOriginalName();
      $file->move(public_path('upload'), $filename);
      $data['image']=$filename;
    }
    $data->save();
    return redirect()->route('snacks.view')->with('success','Snack updated successfully!');
  }

  public function delete($id)
  {
    $data = Snack::find($id);
    if(file_exists('public/upload/' .$data->image) AND ! empty($data->image)){
      unlink('public/upload/' .$data->image);
    }
    $data->delete();
    return redirect()->route('snacks.view')->with('success','Snack deleted successfully!');
  }
}
