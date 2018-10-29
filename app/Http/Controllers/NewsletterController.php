<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;
class NewsletterController extends Controller
{
    public function store(Request $request)
    {
    	if ( !Newsletter::isSubscribed($request->user_email) ) {
        Newsletter::subscribePending($request->user_email);
        return redirect()->back()->with('newsletterpop','Thanks for subscribing');
   	    }
   	    return redirect()->back()->with('newsletterpop','You are already subscribed');
    }
}
