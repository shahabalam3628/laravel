<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FirstRequest;
use App\Student;
use DB;
use Validator; 

class student_controller extends Controller
{
    

public function forloop_demo()
{
  return view('blade_files.forloop_demo');
}
public function ifelse_demo() 
{
  return view('blade_files.if_else_demo',['data'=>2]);
} 
 
public function echo_data()
{
   $data='shahab';
  return view('blade_files.echo_demo',['data'=>$data]);
}
public function header_footer()
{
  //load child page,header and footer load automatic becouse this page extends master page.
  return view('blade_files.header_footer_demo');
}

 public function pagination_demo()
 {
     $users = DB::table('tbl_color')->paginate(10); 
     return view('blade_files.pagination_demo')->with(['data'=>$users]);
 }



  public function validation1(Request $request)
  {

    return view('blade_files.validation_first'); 
  }
  public function validation2()
  {
    echo "dsdsdsdd"; 
  }
  public function validation3()
  {
    echo "dsdsdsdd"; 
  }








  public function all_working_list()
  {
     return view('blade_files.working_list');
  }


  public function delete_student($number)
   {
        echo "Delete id ".$number;
   }
   public function update_student($number)
   {
        echo $number;
   }



   public function select_students(Request $request)
   {
    
        $select=DB::table('students')->get();
        return view('student_view_list')->with(['select'=>$select]);
   }


    public function index()
    {
    	return view('blade_files.student_view');
    }

    public function submit(Request $request)
    {
    	$obj=new Student;
    	 $obj->user_name=$request->name;
    	 $obj->user_email=$request->email;
    	 $obj->user_mobile=$request->mobile;
    	 $obj->user_address=$request->address;

    	 if($obj->save())
    	 {
    	 	return redirect('/')->with('message', 'IT WORKS!');;
    	 }else
    	 {
    	 	echo "Not Inserted";
    	 }
    }





}
