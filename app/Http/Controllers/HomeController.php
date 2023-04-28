<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        return view('main.Layout');
    }

    public function message(Request $request) {
        $formFields = $request->validate([
            'email' => 'required',
            'message' => 'required',
        ]);

        Message::create($formFields);
        return redirect('/')->with('message', 'Thank you for your message. I\'ll be in touch shortly!');
    }

}
