<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PDF;
use DB;
use App\Customer;
class CustomerController extends Controller
{
  public function export_pdf()
  {
    // Fetch all customers from database
    //$data = Customer::get();
	
	$data = DB::table('customers')

    // Send data to the view using loadView function of PDF facade
    $pdf = PDF::loadView('pdf.customers', $data);
    // If you want to store the generated pdf to the server then you can use the store function
    //$pdf->save(storage_path().'_filename.pdf');
    // Finally, you can download the file using download function
   // return $pdf->download('customers.pdf');
  }
}