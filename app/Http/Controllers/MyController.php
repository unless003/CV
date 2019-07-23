<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MyController extends Controller
{
    //
    public function hello()
    {
    	echo "hello // test controller ";
    }
    public function test($ten)
    {
    	echo "watashi wa ".$ten;
   // 	return redirect()->route('MyRoute');
    }

    public function GetURL(Request $request)
    {
    //	return $request->path();
    	//	return $request->url();
    	// if ($request->isMethod('get')) {
    	// 	echo "Phuong thuc get";
    	// }else
    	// echo "khong phai phuong thuc get";

    	if($request->is('My*'))
    		echo "có My";
    	else
    		echo "ko có My";
    }
    public function postForm(Request $request)
    {
    	echo $request->HoTen;
    }

    public function setCookie()
    {

    	$response = new Response();
    	$response->withCookie('Koha','Laravel',1);
    	echo "đã set Cookie";
    	return $response;
    }

    public function getCookie(Request $request )
    {
    	echo "Cookie của bạn là ";
    	return $request->Cookie('Koha');
    }

    public function postFile(Request $request){
    	
    }


    public function myView()
    {
    	return view('cv');
    }

}
