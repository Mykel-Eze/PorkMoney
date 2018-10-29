<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\ContractForm;
use App\User;
class ContractFormController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('contracted');
    }


    public function showForm()
    {
    	return view('internal.form');
    }

    public function storeform(Request $request)

    	{
    		$this->validate($request,[
            'firstname'=>'required|max:255',
            'lastname'=>'required|max:255',
            'email'=>'required|string|email|max:255|unique:contractforms',
            'phone'=>'required|min:9|unique:contractforms',
            'marital_status'=>'required',
            'gender'=>'required',
            'r_address'=>'required|max:255',
            'dob'=>'required',
            'firstname1'=>'required|max:255',
            'lastname1'=>'required|max:255',
            'gender1'=>'required',
            'relationship'=> 'required|max:255',
            'r_address1'=>'required|max:255',
            'phone1'=>'required|min:9',
            'account_num'=>'required|min:9',
            'account_name'=>'required|max:255',
            'bank_name'=>'required|max:255',
                        ]);
       // ContractForm::create($request->all());
    		$user = User::find($request->get('user_id'));
    		$fromInput = new ContractForm;
    		$fromInput->firstname = $request->firstname;
    		$fromInput->lastname = $request->lastname;
    		$fromInput->email = $request->email;
    		$fromInput->phone = $request->phone;
    		$fromInput->marital_status = $request->marital_status;
    		$fromInput->gender = $request->gender;
    		$fromInput->r_address = $request->r_address;
    		$fromInput->dob = $request->dob;
    		$fromInput->firstname1 = $request->firstname1;
    		$fromInput->lastname1 = $request->lastname1;
    		$fromInput->gender1 = $request->gender1;
    		$fromInput->relationship = $request->relationship;
    		$fromInput->r_address1 = $request->r_address1;
    		$fromInput->phone1 = $request->phone1;
    		$fromInput->account_num = $request->account_num;
    		$fromInput->account_name = $request->account_name;
    		$fromInput->bank_name = $request->bank_name;
    		$fromInput->user_id = $request->user_id;
    		$fromInput->save();
    		if ($fromInput->save()) {
    			$user->iscontracted = true;
    			$user->save();
    		}

        return redirect()->route('showpaymode');
    	}


    	public function activateContract(Request $request)
    	{

    		//dd($request->all());
    		$user = User::find($request->get('user_id'));
    		$user->iscontracted = 1;
    		$user->save();
    		return back();
    		//$user = User::where('id', $request->get('user_id'))->first();
    		//$user = User::find($request->get('user_id'));
    		//$user->iscontracted = true;
    		//$user->save();
    		//return response()->json([
            //'message'   => 'Congrats! User Contracted'
       // ]);
    	}

    	public function showPaymentMode()
    	{
    		return view('internal.pay-mode');
    	}

        public function showContractedForm()
        {
            $contracted = ContractForm::get()->all();
            return view('internal.contract-data', compact('contracted'));
        }
}
