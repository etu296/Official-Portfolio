<?php

namespace App\Http\Controllers\database;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactStore(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required',
          ]);
         Contact::create([
           'name'=>$request->name,
           'email'=>$request->email,
           'subject'=>$request->subject,
            'message'=>$request->message,
            ]);
            // dd($request->all());

          return redirect()->back()->with('msg' ,'Your message has been sent. Thank you!');
    }
}
