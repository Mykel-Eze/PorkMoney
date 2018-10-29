<?php

namespace App\Http\Controllers;

use App\Subscriptions;
use App\User;
use App\Plan;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;

class SubscriptionsController extends Controller
{
    public function store(Request $request)
    {   
        $subscriptions  = [];
        $user_id        = Auth::id();
        $purchases      = $request->get('purchases');
        $reference      = $request->get('reference');
        $email          = Auth::user()->email;
        array_walk($purchases, function($sub) use ($plan_id, $reference){
            $sub['plan_id']     = $plan_id;
            $sub['reference']   = $reference;
            Subscriptions::create($sub);
        }); 

        return response()->json([
            'message'       => 'Package(s) successfully added.'
        ]);
    }
    public function completeRegistration(Request $request)
    {
        $user = Auth::user();
        $plan = Plan::where('name',$request->get('plan'))->first();
        $compr = new Subscriptions;
        $compr->units = 1;
        $compr->plan_id = $plan->id;
        $compr->user_id = $user->id;
        $compr->reference = $request->get('reference');
        $compr->is_card = true;
        $compr->email = $user->email;
        $compr->save();
        if($compr->save())
        {
            $user->is_activated = true;
            //$user->is_card =1;
            $user->save();
             return response()->json([
            'message'   => 'Congrats! Registration Complete'
                 ]);
        }

    }
   /* public function completeRegistration(Request $request)
    {
        $user   = Auth::user();
        $input  = [
            'units'     => 1,
            'plan_id'   => Plan::where('name',$request->get('plan'))->first()->id,
            'user_id'   => $user->id,
            'reference' => $request->get('reference'),
            'email'   => $user->email,

        ];
        if(Subscriptions::create($input))
        {
            $user->is_activated = true;
            $user->is_card => true;
            $user->save();
        }
        return response()->json([
            'message'   => 'Congrats! Registration Complete'
        ]);
    }*/

    public static function addPlan(Request $request)
    {
        $sub            = new Subscriptions;
        $sub->units     = 1;
        $sub->plan_id   = Plan::where('name',$request->get('plan'))->first()->id;
        $sub->user_id   = $request->get('user_id');
        $sub->is_card   = false;
        
        if($sub->save())
        {
            return response()->json([
                'message'   => 'Plan added'
            ]);
        }
    }

    public static function activateAccount(Request $request)
    {
        $user           = User::where('id',$request->get('user_id'))->first();
        $sub            = new Subscriptions;
        $sub->units     = $request->get('units')? $request->get('units') : 1;
        $sub->plan_id   = Plan::where('name', $request->get('plan'))->first();
        $sub->user_id   = $user->id;
        $sub->is_card   = false;
        $sub->save();
        if($sub->save())
        {
            $user->is_activated = true;
            $user->save();
        }
        return response()->json([
            'message'   => 'Congrats! Registration Complete'
        ]);
    }


    public function active(Request $request)
    {
        //dd($request->all());
        $user = User::find($request->get('user_id'));
        $plan = Plan::where('name', '=', $request->get('data_plan'))->first();
        $newsub = new Subscriptions;
        $newsub->units = 1;
        $newsub->plan_id = $plan->id;
        $newsub->user_id = $user->id;
        $newsub->is_card = 0;
        //$newsub->email = $request->user_email;
        $newsub->email = $user->email;
        $newsub->save();
        if($newsub->save())
        {
            $user->is_activated = 1;
            $user->save();
            return back();
        }

    }

    public function getActivePartners()
    {
        $partners = User::where('is_activated','=','1')->get()->all();
        return view('internal.partners-data', compact('partners'));
    }
}
