<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class all_test extends Controller
{
    public function index()
    {
    	return view("all_blades.testview");
    }
}
