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

Route::get('/', function () {
    return view('welcome');
});
 Route::get('Hello',function(){
 	return " Hello world";
 });
 Route::get('Demo',function(){
 	echo "Demo";
 });
 Route::get('Hoten/{ten}',function($ten){
echo "ten ban la : ".$ten;
 })->where(['ten'=>'[a-zA-Z]+']);
 route::get('Demo/{date}',function($date){
 	echo "hom nay la ngay : ".$date;
 })->where(['date'=>'[0-9]+']);

 //Dinh danh cho route
 Route::get('Route1',['as'=>'MyRoute',function(){
 	echo "hello guy";
 }
]);
 Route::get('goiten',function(){
 	return redirect()->Route('MyRoute');
 });
 Route::get('Route2',function(){
 	echo "route2";
 })->name('MyRoute2');
Route::get('goiten2',function(){
	echo redirect()->Route('MyRoute2');
 });

Route::group(['prefix'=>'MyGroup'],function(){
Route::get('User1',function(){
	echo "User1";
});
Route::get('User2',function(){
	echo "User2";
});
Route::get('User3',function(){
	echo "User3";
});

});

//goi controller

Route::get('goicontroller','MyController@hello');

Route::get('Thamso/{ten}','MyController@test');

//URL

Route::get('MyRequest','MyController@GetURL');

//Gui nhan du lieu

Route::get('getForm',function(){
	return view('postForm');
});

Route::post('postForm',['as'=>'postForm','uses'=>'MyController@postForm']);

//Cookie

Route::get('setCookie','MyController@setCookie');
Route::get('getCookie','MyController@getCookie');

//upload file

Route::get('UploadFile',function(){
	return view('postFile');
});

Route::get('postFile',['as'=>'postFile','uses'=>'MyController@postFile']);


Route::get('myView','MyController@myView');