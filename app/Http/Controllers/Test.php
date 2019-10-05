<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MyTest;

class Test extends Controller
{
    public function index()
    {
    	return view('all_blades.testview');
    }
    public function test_insert(Request $request)
    {
       $MyTest=new MyTest;

       $MyTest->user_name=$request->name;
       $MyTest->user_email=$request->email;
       $MyTest->user_mobile=$request->mobile;
       $MyTest->user_address=$request->adaress;

       $MyTest->save();
       echo "SSSSSSSSSSSSSSSS";

    }
}
