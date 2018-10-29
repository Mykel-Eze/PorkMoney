<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
	protected $guarded = [];

	public function subscribers()
	{
		return $this->hasMany(Subscriptions::class);
	}
}
