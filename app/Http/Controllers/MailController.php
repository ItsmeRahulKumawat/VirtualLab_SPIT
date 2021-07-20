<?php

namespace App\Http\Controllers;

use App\Mail\FeedbackMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    // public function store (Request $request)
    // {
    //     $name = $request->Name;
    //     $email = $request->Email;
    //     $feed->comment=$request->comment;
    //     $comment->save();
        
    //     return back();

    // }
    // public function sendEmail()
    // {
    //     $details = [
    //         'title'=>'Mail From Virtual Lab SPIT.',
    //         'body'=>'Hello from Virtual Lab.'
    //     ];

    //     Mail::to("virtuallabfeed@gmail.com")->send(new FeedbackMail($details));
    //     return "Email Sent";
    // }
}
