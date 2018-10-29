<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'plan','phone','password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $appends = ['country'];

    public function subscriptions()
    {
        return $this->hasMany(Subscriptions::class);
    }

    protected function getCountryAttribute()
    {
        $nigeria    = ['PMN1','PMN2','PMN3','PMN4'];

        if(in_array($this->plan, $nigeria)){
            return 'Nigeria';
        }
        return 'Ghana';
    }

    protected function getPlanAttribute($plan)
    {
        switch ($plan) {
            case 'ng1':
                $plan = "PMN1";
                break;
            case 'ng2':
                $plan = "PMN2";
                break;
            case 'ng3':
                $plan = "PMN3";
                break;
            case 'ng4':
                $plan = "PMN4";
                break;
            case 'gh1':
                $plan = "PMG1";
                break;
            case 'gh2':
                $plan = "PMG2";
                break;
            case 'gh3':
                $plan = "PMG3";
                break;
            case 'gh4':
                $plan = "PMG4";
                break;
            default:
                break;
        }
        return $plan;
    }

    public function verificationToken()
    {
        return $this->hasOne(VerificationToken::class);
    }


    protected $casts =[
    'is_admin' => 'boolean',
    ];

    public function contractForm()
    {
        return $this->hasOne('App\ContractForm');
    }

}
