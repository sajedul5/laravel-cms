<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Food;
class FoodController extends Controller
{
  public function view()
  {
    $data['allData'] = Food::all();
    return view('backend.gallery.food.view-food', $data);
  }

  public function add()
  {
    return view('backend.gallery.food.add-food');
  }

  public function store(Request $request)
  {
    $this->validate($request,[
      'image' => 'required',
    ]);

    $data = new Food();
    $data->created_by = Auth::user()->id;
    if($request->file('image')){
      $file = $request->file('image');
      $filename = date('YmdHi').$file->getClientOriginalName();
      $file->move(public_path('upload'), $filename);
      $data['image']=$filename;
    }
    $data->save();
    return redirect()->route('food.view')->with('success','Food added successfully!');
  }

  public function edit($id)
  {
    $editData = Food::find($id);
    return view('backend.gallery.food.edit-food',compact('editData'));
  }

  public function update(Request $request, $id)
  {

    $data = Food::find($id);
    $data->updated_by = Auth::user()->id;
    if($request->file('image')){
      @unlink(public_path('upload'.$data->image));
      $file = $request->file('image');
      $filename = date('YmdHi').$file->getClientOriginalName();
      $file->move(public_path('upload'), $filename);
      $data['image']=$filename;
    }
    $data->save();
    return redirect()->route('food.view')->with('success','Food updated successfully!');
  }

  public function delete($id)
  {
    $data = Food::find($id);
    if(file_exists('public/upload/' .$data->image) AND ! empty($data->image)){
      unlink('public/upload/' .$data->image);
    }
    $data->delete();
    return redirect()->route('food.view')->with('success','Food deleted successfully!');
  }
}
