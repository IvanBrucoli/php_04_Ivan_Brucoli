<?php

namespace App\Http\Controllers;

use App\Mail\AdminContactMail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Stmt\TryCatch;

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
        
        try {
            Mail::to($mail)->send(new ContactMail());
            Mail::to('admin@Worldcar.it')->send(new AdminContactMail($name, $mail, $message));
            return redirect()->route('homepage')->with('successMail','Hai inviato la tua poesia, guarda la tua casella postale');
        }
        catch (\Exception $e) {
            return redirect()->back()->with('errorMail', "C'è stato un errore,risprova più tardi");
        }
        
        
        
        
        
    }}