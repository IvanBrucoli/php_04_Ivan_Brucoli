<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function homepage() {
        return view ('welcome');
    }

    public function contactUs() {
        return view ('contact-us');
    }


public function contactUsSubmit(Request $request)
 {
    $name= $request->input('name');
    $mail= $request->input('email');
    $message= $request->input('message');

    Mail::to($mail)->send(new ContactMail());

    return redirect('')->route('homepage');
}

}