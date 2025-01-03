<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class ContactController extends Controller
{
    public function contact(){
        $validator = validator(request()->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $message = new Message;
        $message->name = request()->name;
        $message->email= request()->email;
        $message->message  = request()->message;
        $message->save();

        return redirect('/contact')->with('info', 'Your Message is sent.Thank You!');

    }
}
