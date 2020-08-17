<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Restaurant;
class RestaurantController extends Controller
{
  public function view()
  {
    $data['allData'] = Restaurant::all();
    return view('backend.gallery.restaurant.view-restaurant', $data);
  }

  public function add()
  {
    return view('backend.gallery.restaurant.add-restaurant');
  }

  public function store(Request $request)
  {
    $this->validate($request,[
      'image' => 'required',
    ]);

    $data = new Restaurant();
    $data->created_by = Auth::user()->id;
    if($request->file('image')){
      $file = $request->file('image');
      $filename = date('YmdHi').$file->getClientOriginalName();
      $file->move(public_path('upload'), $filename);
      $data['image']=$filename;
    }
    $data->save();
    return redirect()->route('restaurant.view')->with('success','Restaurant added successfully!');
  }

  public function edit($id)
  {
    $editData = Restaurant::find($id);
    return view('backend.gallery.restaurant.edit-restaurant',compact('editData'));
  }

  public function update(Request $request, $id)
  {

    $data = Restaurant::find($id);
    $data->updated_by = Auth::user()->id;
    if($request->file('image')){
      @unlink(public_path('upload'.$data->image));
      $file = $request->file('image');
      $filename = date('YmdHi').$file->getClientOriginalName();
      $file->move(public_path('upload'), $filename);
      $data['image']=$filename;
    }
    $data->save();
    return redirect()->route('restaurant.view')->with('success','Restaurant updated successfully!');
  }

  public function delete($id)
  {
    $data = Restaurant::find($id);
    if(file_exists('public/upload/' .$data->image) AND ! empty($data->image)){
      unlink('public/upload/' .$data->image);
    }
    $data->delete();
    return redirect()->route('restaurant.view')->with('success','Restaurant deleted successfully!');
  }
}
