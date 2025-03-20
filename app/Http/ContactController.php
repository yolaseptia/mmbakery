<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name'    => 'required',
            'email'   => 'required|email',
            'message' => 'required'
        ]);

        Mail::raw($request->message, function ($msg) use ($request) {
            $msg->to('info@mmbakery.com')
                ->subject('Pesan dari ' . $request->name)
                ->replyTo($request->email);
        });

        return back()->with('success', 'Pesan berhasil dikirim!');
    }
}
