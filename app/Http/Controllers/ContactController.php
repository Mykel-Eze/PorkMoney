<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;

class ContactController extends Controller
{

public function sendMail(ContactRequest $request)
{
    Mail::to('inquiry@porkmoney.com')->send(new ContactMail($request));
    return back()->with('status','Message sent successfully.');
}






	
   /* public function sendMail(Request $request)
    {

			$this->validate($request,[  
    		'name' => 'required|min:3',
    		'email' =>'required|email',
    		'message' => 'required|min:5'
    		]);
    		$emaildata  = array(
    		'name' => $request->name,
    		'email' => $request->email,
    		'bodyMessage'=> $request->message,
    		);
    		Mail::send('internal.contactmail', $emaildata, function($messages) use($emaildata){
    		$messages->from($emaildata['email']);
    		$messages->to('inquiry@porkmoney.com');
    		$messages->subject($emaildata['name']);
    			});
    		return redirect()->back();
    }*/
}
