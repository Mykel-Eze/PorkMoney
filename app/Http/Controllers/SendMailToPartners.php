<?php

namespace App\Http\Controllers;

use App\User;
use App\Mail\SendToPartners;
use App\Mail\SendToProspects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailToPartners extends Controller
{
    

    public function sendTopartners(Request $request,User $users)
    {
        $data = collect([
            'title'     => $request->get('title'),
            'msg'   => $request->get('msg'),
        
        ]);

    	//$user = User::get();
		$users = User::where('is_activated','=','1')->get()->all();
    	//$users = array_push($array, $mail->email);
    	//dd($user);
    	

        foreach($users as $user){

            Mail::to($user->email)->send(new SendToPartners($user->name, $data));
        }
    	
    	
    	return back()->with('status','Your mail has been sent to active partners');
	
    }

    public function sendToProspects(Request $request , User $users)
    {
        $data = collect([
            'title' => $request->get('title'),
            'msg' => $request->get('msg'),
            ]);
        $users = User::where('is_activated', '=', '0')->get()->all();
        foreach ($users as $user) {
            
            Mail::to($user->email)->send(new SendToProspects($user->name, $data));

        }
        return back()->with('status','Mail sent to prospective partners');
        

    }



}


//$users = User::where('is_activated','=','1')->get()->toArray();