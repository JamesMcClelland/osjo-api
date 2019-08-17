<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 17 Aug 2019 13:26:37 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CustomerAddress
 * 
 * @property int $id
 * @property int $customer_id
 * @property int $address_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Address $address
 * @property \App\Models\Customer $customer
 * @property \Illuminate\Database\Eloquent\Collection $jobs
 *
 * @package App\Models
 */
class CustomerAddress extends Eloquent
{
	protected $casts = [
		'customer_id' => 'int',
		'address_id' => 'int'
	];

	protected $fillable = [
		'customer_id',
		'address_id'
	];

	public function address()
	{
		return $this->belongsTo(\App\Models\Address::class);
	}

	public function customer()
	{
		return $this->belongsTo(\App\Models\Customer::class);
	}

	public function jobs()
	{
		return $this->hasMany(\App\Models\Job::class);
	}
}
