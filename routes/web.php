<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','Frontend\FrontendController@index');
Route::post('/message/store','Frontend\FrontendController@store')->name('message.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/view', 'Backend\UserController@view')->name('users.view');

Route::group(['middleware'=>'auth'],function(){
  Route::prefix('users')->group(function(){
    Route::get('/view', 'Backend\UserController@view')->name('users.view');
    Route::get('/add', 'Backend\UserController@add')->name('users.add');
    Route::post('/store', 'Backend\UserController@store')->name('users.store');
    Route::get('/edit/{id}', 'Backend\UserController@edit')->name('users.edit');
    Route::post('/update/{id}', 'Backend\UserController@update')->name('users.update');
    Route::get('/delete/{id}', 'Backend\UserController@delete')->name('users.delete');
  });


  Route::prefix('profiles')->group(function(){
    Route::get('/view', 'Backend\ProfileController@view')->name('profiles.view');
    Route::get('/edit', 'Backend\ProfileController@edit')->name('profiles.edit');
    Route::post('/update', 'Backend\ProfileController@update')->name('profiles.update');
    Route::get('/password/view', 'Backend\ProfileController@passwordview')->name('profiles.password.view');
    Route::post('/password/update', 'Backend\ProfileController@passwordupdate')->name('profiles.password.update');

  });


  Route::prefix('logos')->group(function(){
    Route::get('/view', 'Backend\LogoController@view')->name('logos.view');
    Route::get('/add', 'Backend\LogoController@add')->name('logos.add');
    Route::post('/store', 'Backend\LogoController@store')->name('logos.store');
    Route::get('/edit/{id}', 'Backend\LogoController@edit')->name('logos.edit');
    Route::post('/update/{id}', 'Backend\LogoController@update')->name('logos.update');
    Route::get('/delete/{id}', 'Backend\LogoController@delete')->name('logos.delete');
  });


  Route::prefix('sliders')->group(function(){
    Route::get('/view', 'Backend\SliderController@view')->name('sliders.view');
    Route::get('/add', 'Backend\SliderController@add')->name('sliders.add');
    Route::post('/store', 'Backend\SliderController@store')->name('sliders.store');
    Route::get('/edit/{id}', 'Backend\SliderController@edit')->name('sliders.edit');
    Route::post('/update/{id}', 'Backend\SliderController@update')->name('sliders.update');
    Route::get('/delete/{id}', 'Backend\SliderController@delete')->name('sliders.delete');
  });

  Route::prefix('breakfast')->group(function(){
    Route::get('/view', 'Backend\BreakfastController@view')->name('breakfast.view');
    Route::get('/add', 'Backend\BreakfastController@add')->name('breakfast.add');
    Route::post('/store', 'Backend\BreakfastController@store')->name('breakfast.store');
    Route::get('/edit/{id}', 'Backend\BreakfastController@edit')->name('breakfast.edit');
    Route::post('/update/{id}', 'Backend\BreakfastController@update')->name('breakfast.update');
    Route::get('/delete/{id}', 'Backend\BreakfastController@delete')->name('breakfast.delete');
  });

  Route::prefix('meals')->group(function(){
    Route::get('/view', 'Backend\MealController@view')->name('meals.view');
    Route::get('/add', 'Backend\MealController@add')->name('meals.add');
    Route::post('/store', 'Backend\MealController@store')->name('meals.store');
    Route::get('/edit/{id}', 'Backend\MealController@edit')->name('meals.edit');
    Route::post('/update/{id}', 'Backend\MealController@update')->name('meals.update');
    Route::get('/delete/{id}', 'Backend\MealController@delete')->name('meals.delete');
  });

  Route::prefix('snacks')->group(function(){
    Route::get('/view', 'Backend\SnackController@view')->name('snacks.view');
    Route::get('/add', 'Backend\SnackController@add')->name('snacks.add');
    Route::post('/store', 'Backend\SnackController@store')->name('snacks.store');
    Route::get('/edit/{id}', 'Backend\SnackController@edit')->name('snacks.edit');
    Route::post('/update/{id}', 'Backend\SnackController@update')->name('snacks.update');
    Route::get('/delete/{id}', 'Backend\SnackController@delete')->name('snacks.delete');
  });

  Route::prefix('dessert')->group(function(){
    Route::get('/view', 'Backend\DessertController@view')->name('dessert.view');
    Route::get('/add', 'Backend\DessertController@add')->name('dessert.add');
    Route::post('/store', 'Backend\DessertController@store')->name('dessert.store');
    Route::get('/edit/{id}', 'Backend\DessertController@edit')->name('dessert.edit');
    Route::post('/update/{id}', 'Backend\DessertController@update')->name('dessert.update');
    Route::get('/delete/{id}', 'Backend\DessertController@delete')->name('dessert.delete');
  });

  Route::prefix('drink')->group(function(){
    Route::get('/view', 'Backend\DrinktController@view')->name('drink.view');
    Route::get('/add', 'Backend\DrinktController@add')->name('drink.add');
    Route::post('/store', 'Backend\DrinktController@store')->name('drink.store');
    Route::get('/edit/{id}', 'Backend\DrinktController@edit')->name('drink.edit');
    Route::post('/update/{id}', 'Backend\DrinktController@update')->name('drink.update');
    Route::get('/delete/{id}', 'Backend\DrinktController@delete')->name('drink.delete');
  });

  Route::prefix('food')->group(function(){
    Route::get('/view', 'Backend\FoodController@view')->name('food.view');
    Route::get('/add', 'Backend\FoodController@add')->name('food.add');
    Route::post('/store', 'Backend\FoodController@store')->name('food.store');
    Route::get('/edit/{id}', 'Backend\FoodController@edit')->name('food.edit');
    Route::post('/update/{id}', 'Backend\FoodController@update')->name('food.update');
    Route::get('/delete/{id}', 'Backend\FoodController@delete')->name('food.delete');  });

  Route::prefix('restaurant')->group(function(){

    Route::get('/view', 'Backend\RestaurantController@view')->name('restaurant.view');
    Route::get('/add', 'Backend\RestaurantController@add')->name('restaurant.add');
    Route::post('/store', 'Backend\RestaurantController@store')->name('restaurant.store');
    Route::get('/edit/{id}', 'Backend\RestaurantController@edit')->name('restaurant.edit');
    Route::post('/update/{id}', 'Backend\RestaurantController@update')->name('restaurant.update');
    Route::get('/delete/{id}', 'Backend\RestaurantController@delete')->name('restaurant.delete');
  });

  Route::prefix('restaurant')->group(function(){

    Route::get('/view', 'Backend\RestaurantController@view')->name('restaurant.view');
    Route::get('/add', 'Backend\RestaurantController@add')->name('restaurant.add');
    Route::post('/store', 'Backend\RestaurantController@store')->name('restaurant.store');
    Route::get('/edit/{id}', 'Backend\RestaurantController@edit')->name('restaurant.edit');
    Route::post('/update/{id}', 'Backend\RestaurantController@update')->name('restaurant.update');
    Route::get('/delete/{id}', 'Backend\RestaurantController@delete')->name('restaurant.delete');
  });

  Route::prefix('blog')->group(function(){

    Route::get('/view', 'Backend\BlogController@view')->name('blog.view');
    Route::get('/add', 'Backend\BlogController@add')->name('blog.add');
    Route::post('/store', 'Backend\BlogController@store')->name('blog.store');
    Route::get('/edit/{id}', 'Backend\BlogController@edit')->name('blog.edit');
    Route::post('/update/{id}', 'Backend\BlogController@update')->name('blog.update');
    Route::get('/delete/{id}', 'Backend\BlogController@delete')->name('blog.delete');
  });

  Route::prefix('about')->group(function(){

    Route::get('/view', 'Backend\AboutController@view')->name('about.view');
    Route::get('/add', 'Backend\AboutController@add')->name('about.add');
    Route::post('/store', 'Backend\AboutController@store')->name('about.store');
    Route::get('/edit/{id}', 'Backend\AboutController@edit')->name('about.edit');
    Route::post('/update/{id}', 'Backend\AboutController@update')->name('about.update');
    Route::get('/delete/{id}', 'Backend\AboutController@delete')->name('about.delete');
  });

  Route::prefix('contact')->group(function(){

    Route::get('/view', 'Backend\ContactController@view')->name('contact.view');
    Route::get('/add', 'Backend\ContactController@add')->name('contact.add');
    Route::post('/store', 'Backend\ContactController@store')->name('contact.store');
    Route::get('/edit/{id}', 'Backend\ContactController@edit')->name('contact.edit');
    Route::post('/update/{id}', 'Backend\ContactController@update')->name('contact.update');
    Route::get('/delete/{id}', 'Backend\ContactController@delete')->name('contact.delete');
  });


});
