<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contact;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $data = new Contact();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->subject = $request->subject;
        $data->content = $request->content;
        $data->save();
         return back()->with('success', 'Great! We have received your message and would like to thank you for writing to us.');
        // dd($data);
        try {
            Mail::to('nazmulhasan3615@gmail.com')->send(new ContactMail($data));
            return back()->with('success', 'Great! We have received your message and would like to thank you for writing to us.');

        } catch (Exception $e) {
            return back()->with('success', 'Sorry! Please try again latter');
        }
    }

}
