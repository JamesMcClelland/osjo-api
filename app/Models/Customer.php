<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 17 Aug 2019 13:26:37 +0000.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletes;
use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Customer
 * 
 * @property int $id
 * @property string $name
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property Collection $addresses
 * @property Collection $jobs
 *
 * @package App\Models
 */
class Customer extends Eloquent
{
	use SoftDeletes;

    protected $guard_name = 'api';

    protected $fillable = [
		'name'
	];

	public function addresses()
	{
		return $this->belongsToMany(Address::class, 'customer_addresses')
					->withPivot('id')
					->withTimestamps();
	}

	public function jobs()
	{
		return $this->hasMany(Job::class);
	}
}
