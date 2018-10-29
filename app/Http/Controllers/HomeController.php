<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriptions;
use App\User;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



        $data = User::where('plan','!=',null)->get();
        
        //$array = [1,2,3,4,5,6,7,8];
       //$datas = Subscriptions::whereIn('plan_id',$array)->get()->count();

      /* $data = DB::table('users')->where('plan' , '!=', null)
        ->join('subscriptions', 'users.id', '=', 'subscriptions.user_id')
        ->get();*/
        $sumadmin = User::select('id')->where([['is_admin','=','1'], ['is_activated','=','1'],])->get()->count();
        $subuser = Subscriptions::select('user_id')->distinct()->get()->count();
        $subsum = $subuser - $sumadmin;

       $pmn1sum = Subscriptions::where('plan_id',1)->get()->count();
       $pmn2sum = Subscriptions::where('plan_id',2)->get()->count();
       $pmn3sum = Subscriptions::where('plan_id',3)->get()->count();
       $pmn4sum = Subscriptions::where('plan_id',4)->get()->count();
       $pmg1 = Subscriptions::where('plan_id',5)->get()->count();
       //subtracted because the admins each has the above plans which should not be counted
       $pmg1sum = $pmg1 - 1 ;
       $pmg2 = Subscriptions::where('plan_id',6)->get()->count();
       $pmg2sum = $pmg2 - 1;
       $pmg3 = Subscriptions::where('plan_id',7)->get()->count();
       $pmg3sum = $pmg3 - 1;
       $pmg4sum = Subscriptions::where('plan_id',8)->get()->count();
       //below calculates total sum of money realized in naira and dollar
       $totalNg = ($pmn1sum * 250000) + ($pmn2sum * 500000) + ($pmn3sum *1000000 ) + ($pmn4sum * 5000000);
       $totalGh = ($pmg1sum * 2000) + ($pmg2sum * 5000) + ($pmg3sum *10000 ) + ($pmg4sum * 50000);
        return view('internal.data', [
            'title' => "PorkMoney - Sign Ups",
            'data' => $data,
            'subsum' => $subsum,
            'pmn1sum' => $pmn1sum,
            'pmn2sum' => $pmn2sum,
            'pmn3sum' => $pmn3sum,
            'pmn4sum' => $pmn4sum,
            'pmg1sum' => $pmg1sum,
            'pmg2sum' => $pmg2sum,
            'pmg3sum' => $pmg3sum,
            'pmg4sum' => $pmg4sum,
            'totalNg' => $totalNg,
            'totalGh' =>$totalGh,
        ]);
    }

    public function addPlan()
    {
        $data = \App\User::where('plan','!=',null)->get();

        return view('internal.add-plan', [
            'title' => "PorkMoney - Sign Ups",
            'users' => $data
        ]);
    }

public function destroy(Request $request)
{
  //dd($request->all());
  User::find($request->user_id)->delete();
  //User::where('id', '=', '$request->user_id')->delete();
  //return $request->all();
}

}
