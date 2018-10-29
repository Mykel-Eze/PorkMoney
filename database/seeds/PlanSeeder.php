<?php

use Illuminate\Database\Seeder;
use App\Plan;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plans = [
        	[
        		'name' 	=> 'PMN1',
        		'code' 	=> 'ng1',
        		'cost' 	=> 250000,
        		'return'=> 20
        	],
        	[
        		'name' 	=> 'PMN2',
        		'code' 	=> 'ng2',
        		'cost' 	=> 500000,
        		'return'=> 25
        	],
        	[
        		'name' 	=> 'PMN3',
        		'code' 	=> 'ng3',
        		'cost' 	=> 1000000,
        		'return'=> 30
        	],
        	[
        		'name' 	=> 'PMN4',
        		'code' 	=> 'ng4',
        		'cost' 	=> 5000000,
        		'return'=> 35
        	],
        	[

        		'name' 	=> 'PMG1',
        		'code' 	=> 'gh1',
        		'cost' 	=> 2000,
        		'return'=> 20
        	],
        	[

        		'name' 	=> 'PMG2',
        		'code' 	=> 'gh2',
        		'cost' 	=> 5000,
        		'return'=> 25
        	],
        	[

        		'name' 	=> 'PMG3',
        		'code' 	=> 'gh3',
        		'cost' 	=> 10000,
        		'return'=> 30
        	],
        	[

        		'name' 	=> 'PMG4',
        		'code' 	=> 'gh4',
        		'cost' 	=> 50000,
        		'return'=> 35
        	]
        ];

        foreach ($plans as $plan) {
        	Plan::create($plan);
        }
    }
}
