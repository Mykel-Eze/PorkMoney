<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class PosterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('poster');
    }



    public function showNewsletterPoster()
    {
    	return view('internal.posters');
    }
}
