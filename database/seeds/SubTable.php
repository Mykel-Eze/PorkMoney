<?php

use Illuminate\Database\Seeder;
use App\Subscriptions;

class SubTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<4;$i++){
        	Subscriptions::create([
        		'units' 	=> $i,
        		'plan_id'	=> $i,
        		'user_id' 	=> 1
        	]);
        }
    }
}
