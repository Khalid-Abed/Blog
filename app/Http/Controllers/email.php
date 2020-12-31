<?php

namespace App\Http\Controllers;

use App\Mail\mail10;
use App\Mail\sendgmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class email extends Controller
{
    function showform(){
        return view('emailForm');
    }
    function sendmail(){
        $details=[
            'title'=>'Acceptable To Nw Job',
            'body'=>'Congratulation ! '
        ];
        Mail::to('khalidabeed24@gmail.com')->send(new sendgmail($details));
    }

}
