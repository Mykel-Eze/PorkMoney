<?php

namespace App\Http\Controllers;

use App\VerificationToken;
use Illuminate\Http\Request;
use App\Mail\SetPassword;
use Mail;

class VerificationTokenController extends Controller
{
    public function verify(VerificationToken $token)
    {
        $user = $token->user;
        if($user->save()){
            $token->delete();
            return redirect('add-password')->with(compact('user'));
        }
        abort(400, 'The credentials you supplied are incorrect');
    }

    public function send(Request $request)
    {
        //dd($request->all());
        
        $token = new VerificationToken;
        $token->token = bin2hex(random_bytes(32));
        $token->user_id = $request->get('user_id');
        $token->save();
        if($token->save())
        {
           // Mail::to($token->user)->send(new SetPassword($token));
            if($request->get('pay_method') == "offline"){
                SubscriptionsController::activateAccount($request);
            }
            return response()->json(["message"=>"It sent"],201);
        }
        return back();
    }
}
