<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\mailer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class mailercon extends Controller
{
    public function send(){
        {
            Mail::to("hafiz.bukhari@hotmail.com")->send(new mailer());
            // $user = new User();
            // $user->name = Str::uuid();
            // $user->save();
        }
    }
}
