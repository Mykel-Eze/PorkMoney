<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Subscriptions extends Model
{
	protected $fillable = ['units','plan_id','user_id','reference'];

	protected $appends = ['percent_complete','current_value','returns'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    protected function getPercentCompleteAttribute()
    {
    	$value = 0;
    	$plan = $this->plan;
    	$duration = $this->created_at->diffInDays($this->created_at->copy()->addMonths(11));
    	$daysLeft = Carbon::today()->diffInDays($this->created_at->startOfDay()->addMonths(11),false);
    	$daysLeft = $daysLeft>0? $daysLeft : 0;
    	$value = ($duration-$daysLeft)/$duration * 100;
    	return floor($value * 100)/100;
    }

    protected function getCurrentValueAttribute()
    {
    	$value = 0;
    	$percent_complete = $this->percent_complete;
    	$plan = $this->plan;
    	$planValue = $plan->cost * $this->units;
    	$planReturns = ($plan->cost*$plan->return/100) * $this->units;
    	if($percent_complete == 100){
    		$value = $planValue + $planReturns;
    	}
    	elseif($percent_complete == 0){
    		$value = $planValue;
    	}
    	else{
    		$value = $planValue + ($planReturns*$percent_complete/100);
    	}
    	return $value;
    }

    protected function getReturnsAttribute()
    {
    	$value = 0;
    	$plan = $this->plan;
    	$value = ($plan->cost + ($plan->cost*$plan->return/100)) * $this->units;
    	return $value;
    }


     
}
