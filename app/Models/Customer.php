<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 17 Aug 2019 13:26:37 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Customer
 * 
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $addresses
 * @property \Illuminate\Database\Eloquent\Collection $jobs
 *
 * @package App\Models
 */
class Customer extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $fillable = [
		'name'
	];

	public function addresses()
	{
		return $this->belongsToMany(\App\Models\Address::class, 'customer_addresses')
					->withPivot('id')
					->withTimestamps();
	}

	public function jobs()
	{
		return $this->hasMany(\App\Models\Job::class);
	}
}
