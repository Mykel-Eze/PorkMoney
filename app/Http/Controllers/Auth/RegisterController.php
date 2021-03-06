<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Mail\RegNigeria;
use App\Mail\RegGhana;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
  /*  protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }*/

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
  /*  protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }*/

   /* protected function addPassword(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'user_id' => 'required',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $validator->validate();

        $user = User::find($data['user_id']);
        $user->password = Hash::make($data['password']);
        if($user->save()){
            return redirect('/')->withInfo('Password Updated. Login Now');
        }
    }*/

    protected function join(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|unique:users',
            'plan' => 'required|string',
            'password' => 'required|string|min:6|confirmed',
        ]);
        if($validator->fails()){
            return response()->json(['status' => 400,'error' => $validator->errors()]);
        }
        if($validator->validate()){
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'plan' => $data['plan'],
                'password' => Hash::make($data['password']),
            ]);

            $ngPlans = collect(['PMN1','PMN2','PMN3','PMN4']);

            if($ngPlans->contains($user->plan)){
                \Mail::to($user)->queue(new RegNigeria($user));
            }
            else {
                \Mail::to($user)->queue(new RegGhana($user));
            }
            return redirect('/')->response()->json(['status' => 201,'message' => 'Successful']);
            //return response()->json(['status' => 201,'message' => 'Successful']);
        }
    }
}
