<?php

namespace App\Http\Controllers;

use App\Http\Requests\HomeRequest;
use App\Mail\HomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;


class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function sendEmail(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ];
        // dd($data);
        Mail::to('alilatukau07@gmail,com')->send(new HomeMail($data));
        // return redirect('/')->with('success', 'Thanks for reaching out!');
        return redirect('/');
    }
}
