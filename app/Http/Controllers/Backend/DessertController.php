<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Dessert;
use Auth;
class DessertController extends Controller
{
  public function view()
  {
    $data['allData'] = Dessert::all();
    return view('backend.menu.dessert.view-dessert', $data);
  }

  public function add()
  {
    return view('backend.menu.dessert.add-dessert');
  }

  public function store(Request $request)
  {
    $this->validate($request,[
      'title' => 'required',
      'price' => 'required',
      'description' => 'required',
      'image' => 'required',
    ]);

    $data = new Dessert();
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
    return redirect()->route('dessert.view')->with('success','Dessert added successfully!');
  }

  public function edit($id)
  {
    $editData = Dessert::find($id);
    return view('backend.menu.dessert.edit-dessert',compact('editData'));
  }

  public function update(Request $request, $id)
  {
    $this->validate($request,[
      'title' => 'required',
      'price' => 'required',
      'description' => 'required',
    ]);
    $data = Dessert::find($id);
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
    return redirect()->route('dessert.view')->with('success','Dessert updated successfully!');
  }

  public function delete($id)
  {
    $data = Dessert::find($id);
    if(file_exists('public/upload/' .$data->image) AND ! empty($data->image)){
      unlink('public/upload/' .$data->image);
    }
    $data->delete();
    return redirect()->route('dessert.view')->with('success','Dessert deleted successfully!');
  }
}
