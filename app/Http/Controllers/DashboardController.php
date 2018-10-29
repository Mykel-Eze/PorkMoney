<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Notification;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        $firstNotification = $user->unreadNotifications()->first();
        $currency = $user->country == "Nigeria"? "&#8358;" : "&#8373;";
        
        return view('internal.dashboard', compact('user','currency','firstNotification'));
    }

    public function newsletter($id = false)
    {
        $user = Auth::user();
        $open = !$id? $user->unreadNotifications()->first() : $user->notifications()->find($id);
        
        return view('internal.newsletter', compact('user','open'));
    }

    public function readNotification($id)
    {
        $user = Auth::user();
        $user->notifications()->find($id)->markAsRead();
        
        return response()->json(['message' => "Notification has been marked as read"],201);
    }

    public function completeRegistration()
    {
        $user = Auth::user();
        $title = "PorkMoney - Complete Registration";
        return view('internal.transition', compact('user','title'));
    }

    public function sendNotification(Request $request)
    {
        $data = collect([
            'title'     => $request->get('title'),
            'msg'   => $request->get('msg'),
            'image'     => "",
        ]);
        //$users = User::all();
        $users = User::where('is_activated', '=', 1)->get()->all();

        Notification::send($users, new \App\Notifications\Newsletter($data));
        return back();
    }
}
