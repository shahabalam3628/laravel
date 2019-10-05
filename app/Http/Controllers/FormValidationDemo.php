<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestRequest;
use Illuminate\Http\Request;

class FormValidationDemo extends Controller
{
    
    public function index()
     { 
        return view('blade_files.formValidationDemo');
     }
	 
	 public function formData(TestRequest $request)   
	 {
		echo "aasassa";
     }

}
