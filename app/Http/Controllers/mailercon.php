<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\mailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class mailercon extends Controller
{
    public function send(){
        {
            Mail::to("hafiz.bukhari@hotmail.com")->send(new mailer());
        }
    }
}
