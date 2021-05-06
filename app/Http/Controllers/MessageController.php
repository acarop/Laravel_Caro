<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store()
    {
        $message = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3'
        ]);

        // ENVIAR EL EMAIL

        Mail::to('carolinaplumez@yahoo.com.ar')->queue(new MessageReceived($message));

        return back()->with('status','Recibimos tu mensaje, te responderemos a la brevedad.');
    }
}
