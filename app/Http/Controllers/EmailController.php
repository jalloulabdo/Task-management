<?php

namespace App\Http\Controllers;

use App\Mail\emailMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
   public function sendEmail(){
    Mail::to('jalloulabdO88@gmail.com')->send(new emailMailable());
   }
}
