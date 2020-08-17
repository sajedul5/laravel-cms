<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Logo;
use App\Model\Slider;
use App\Model\About;
use App\Model\Breakfast;
use App\Model\Meal;
use App\Model\Snack;
use App\Model\Dessert;
use App\Model\Drink;
use App\Model\Food;
use App\Model\Restaurant;
use App\Model\Contact;
use App\Model\Blog;
use App\Model\Message;
use Mail;
class FrontendController extends Controller
{
    public function index()
    {
      $data['logo'] = Logo::first();
      $data['sliders'] = Slider::all();
      $data['about'] = About::first();
      $data['menus'] = Breakfast::all();
      $data['meals'] = Meal::all();
      $data['snacks'] = Snack::all();
      $data['desserts'] = Dessert::all();
      $data['drinks'] = Drink::all();
      $data['foods'] = Food::all();
      $data['restaurants'] = Restaurant::all();
      $data['contact'] = Contact::first();
      $data['blogs'] = Blog::orderBy('id','desc')->get();
      return view('frontend.layouts.home',$data);
    }

    public function store(Request $request)
    {
      $this->validate($request,[
        'name' => 'required',
        'email' => 'required',
        'subject' => 'required',
        'message' => 'required',
      ]);
      $data = new Message();
      $data->name = $request->name;
      $data->email = $request->email;
      $data->subject = $request->subject;
      $data->message = $request->message;
      $data->save();

      $data = array(
        'name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'message' => $request->message
      );
      Mail::send('frontend.emails.message',$data, function($msg) use($data){
        $msg->from('sajedul.idb@gmail.com','SpicyX');
        $msg->to($data['email']);
        $msg->subject('Thanks for contact us');

      });
      return redirect()->back()->with('success','Your message successfully sent');

    }
}
