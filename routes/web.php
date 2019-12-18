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
//Home Controller

Route::get('/', function () {
    return view('home.index');
});
Route::get('/about', "HomeController@about");
Route::get('/services', "HomeController@services");
Route::get('/faq', "HomeController@faq");
Route::get('/shop', "HomeController@shop");
Route::get('/pagination/fetch_data', "HomeController@fetch_data");
Route::get('/project', "HomeController@project");
Route::get('/shop/{id}', "HomeController@shopcategory");
Route::get('/project/{id}', "HomeController@projectcategory");
Route::get('/product_detail/{id}', "HomeController@productdetail");
Route::get('/project_detail/{id}', "HomeController@projectdetail");
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/assignproject', "HomeController@assignproject");
Route::get('/feedback', "HomeController@feedback");
Route::post('/feedbackpost', "HomeController@feedbackpost");

//Booking Controller

Route::get('/booking/{id}/form', "BookingsController@form");
Route::post('/booking', "BookingsController@booking");
Route::get('/booking/index', "BookingsController@index");
Route::get('/booking/new', "BookingsController@new");
Route::get('/booking/confirmed', "BookingsController@confirmed");
Route::get('/booking/process', "BookingsController@inprocess");
Route::get('/booking/rejected', "BookingsController@rejected");
Route::get('/booking/completed', "BookingsController@completed");
Route::get('/booking/edit/{id}', "BookingsController@edit");
Route::put('/booking/update/{id}', "BookingsController@update");

//Shopping Controller

Route::get('/cart', "ShoppingController@cart");
Route::get('/increase/{id}', "ShoppingController@getIncreaseByOne");
Route::get('/reduce/{id}', "ShoppingController@getReduceByOne");
Route::get('/remove/{id}', "ShoppingController@getRemoveItem");
Route::get('/checkout', "ShoppingController@checkout");
Route::post('/checkout', "ShoppingController@postcheckout");
Route::get('/shopping_cart/{id}', "ShoppingController@addtocart");

//Contact Controller

Route::get('/contact', "ContactsController@contact");
Route::get('/contact/index', "ContactsController@index");
Route::post('/postcontact', "ContactsController@postcontact");
Route::post('/send', "ContactsController@sendemail");

//Order Controller

Route::get('/order/index', "OrdersController@index");
Route::get('/order/detail/{id}', "OrdersController@detail");
Route::get('/order/new', "OrdersController@new");
Route::get('/order/confirmed', "OrdersController@confirmed");
Route::get('/order/process', "OrdersController@inprocess");
Route::get('/order/rejected', "OrdersController@rejected");
Route::get('/order/completed', "OrdersController@completed");
Route::get('/order/edit/{id}', "OrdersController@edit");
Route::put('/order/update/{id}', "OrdersController@update");
Route::get('/orders', "OrdersController@order");


//Team Controller

Route::get('/teams', "TeamsController@index");
Route::get('/teams/create', "TeamsController@create");
Route::post('/teams', "TeamsController@store");
Route::post('/teams/add', "TeamsController@addemployee");
Route::get('/teams/{id}/edit', "TeamsController@edit");
Route::put('/teams/{id}', "TeamsController@update");
Route::put('/teams/{id}/update', "TeamsController@updateemployee");
Route::get('/teams/{id}', "TeamsController@show");
Route::delete('/teams/{id}', "TeamsController@delete");
Route::delete('/teams/{id}/destroy', "TeamsController@deleteemployee");
Route::get('/teams/{id}/details', "TeamsController@detail");
Route::get('/selectemp/getemployeesdata', "TeamsController@getemployees");

//Profile Controller

Route::get('/profile', "ProfilesController@index");
Route::put('/profile/{id}/name', "ProfilesController@name");
Route::put('/profile/{id}/contact', "ProfilesController@contact");
Route::put('/profile/{id}/email', "ProfilesController@email");
Route::put('/profile/{id}/password', "ProfilesController@password");



//Authentication

Auth::routes();

//Resource Controllers

Route::resource('/producttype','ProductTypeController');
Route::resource('/products','ProductsController');
Route::resource('/projecttypes','ProjectTypesController');
Route::resource('/projects','ProjectsController');
Route::resource('/employees','EmployeesController');
Route::resource('/assignprojects','AssignProjectsController');
