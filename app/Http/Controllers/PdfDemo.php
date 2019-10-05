<?php
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use PDF;
  
class PdfDemo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        $data = ['title' => 'Welcome to HDTuto.com'];
        $pdf = PDF::loadView('myPDF', $data);
        return $pdf->download('details.pdf');
    }
}
