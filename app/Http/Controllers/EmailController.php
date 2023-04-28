<?php

namespace App\Http\Controllers;

use App\Mail\emailMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
   public function sendEmail($email,$password){
     
    Mail::to($email)->send(new emailMailable($password,$email));
    return back()->with('success', 'Email Send Successfully!');
   }
}
