<?php
//This is not require smtp setting. becouse "from" is define it mailer page.

namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;
 
class MailController extends Controller
{
    public function send()
    {
        $objDemo = new \stdClass();
        $objDemo->demo_one = 'Demo One Value';
        $objDemo->demo_two = 'Demo Two Value';
        $objDemo->sender = 'shahabalam3628@gmail.com';
        $objDemo->receiver = 'shahabalam78@gmail.com';
 
        Mail::to("shahabalam78@gmail.com")->send(new DemoEmail($objDemo));
    }
}