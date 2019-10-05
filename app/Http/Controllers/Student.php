<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class Student extends Controller
{
    public function index()
    {
    	return view('all_blades.student_registration');
    }

    public function registration(Request $request)
    {
    	$student=new Student;

    	$student->user_name=$request->name;;
    	$student->user_email=$request->email;;
    	$sudent->user_mobile=$request->mobile;;
    	$studnt->user_address=$request->address;;
    	$student->save();
    	echo "inserted";








    }
}
