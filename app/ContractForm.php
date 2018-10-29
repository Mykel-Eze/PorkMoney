<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class ContractForm extends Model
{
	protected $table = 'contractforms';

	protected $fillable = ['firstname','lastname','email','phone','marital_status','gender', 'r_address',
	'dob','firstname1','lastname1','gender','relationship','r_address1','phone1','account_num','account_name',
	'bank_name'];

     public function user()
    {
        return $this->belongsTo('App\ContractForm');
    }

   // protected $casts = [
    	//'dob' => 'date', 'phone'=>'integer', 'phone1'=>'integer';
    //]

     protected $contractforms = ['created_at', 'updated_at', 'dob'];
    

   // public function setDobAttribute
   //'dob' => date("H:i:s", strtotime(request('departureTime')));
     public function setDobAttribute($value)
    {
    $this->attributes['dob'] =  Carbon::parse($value);
    }

}
