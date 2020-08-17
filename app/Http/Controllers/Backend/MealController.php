<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Meal;
class MealController extends Controller
{
  public function view()
  {
    $data['allData'] = Meal::all();
    return view('backend.menu.meal.view-meal', $data);
  }

  public function add()
  {
    return view('backend.menu.meal.add-meal');
  }

  public function store(Request $request)
  {
    $this->validate($request,[
      'title' => 'required',
      'price' => 'required',
      'description' => 'required',
      'image' => 'required',
    ]);

    $data = new Meal();
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
    return redirect()->route('meals.view')->with('success','Meal added successfully!');
  }

  public function edit($id)
  {
    $editData = Meal::find($id);
    return view('backend.menu.meal.edit-meal',compact('editData'));
  }

  public function update(Request $request, $id)
  {
    $this->validate($request,[
      'title' => 'required',
      'price' => 'required',
      'description' => 'required',
    ]);
    $data = Meal::find($id);
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
    return redirect()->route('meals.view')->with('success','Meal updated successfully!');
  }

  public function delete($id)
  {
    $data = Meal::find($id);
    if(file_exists('public/upload/' .$data->image) AND ! empty($data->image)){
      unlink('public/upload/' .$data->image);
    }
    $data->delete();
    return redirect()->route('meals.view')->with('success','Meal deleted successfully!');
  }
}
