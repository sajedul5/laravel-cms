<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Drink;
class DrinktController extends Controller
{
  public function view()
  {
    $data['allData'] = Drink::all();
    return view('backend.menu.drink.view-drink', $data);
  }

  public function add()
  {
    return view('backend.menu.drink.add-drink');
  }

  public function store(Request $request)
  {
    $this->validate($request,[
      'title' => 'required',
      'price' => 'required',
      'description' => 'required',
      'image' => 'required',
    ]);

    $data = new Drink();
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
    return redirect()->route('drink.view')->with('success','Drink added successfully!');
  }

  public function edit($id)
  {
    $editData = Drink::find($id);
    return view('backend.menu.drink.edit-drink',compact('editData'));
  }

  public function update(Request $request, $id)
  {
    $this->validate($request,[
      'title' => 'required',
      'price' => 'required',
      'description' => 'required',
    ]);
    $data = Drink::find($id);
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
    return redirect()->route('drink.view')->with('success','Drink updated successfully!');
  }

  public function delete($id)
  {
    $data = Drink::find($id);
    if(file_exists('public/upload/' .$data->image) AND ! empty($data->image)){
      unlink('public/upload/' .$data->image);
    }
    $data->delete();
    return redirect()->route('drink.view')->with('success','Drink deleted successfully!');
  }
}
