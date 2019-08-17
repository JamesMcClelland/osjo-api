<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 17 Aug 2019 13:26:37 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CustomerPerson
 * 
 * @property int $id
 * @property int $customer_id
 * @property int $person_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $jobs
 *
 * @package App\Models
 */
class CustomerPerson extends Eloquent
{
	protected $casts = [
		'customer_id' => 'int',
		'person_id' => 'int'
	];

	protected $fillable = [
		'customer_id',
		'person_id'
	];

	public function jobs()
	{
		return $this->hasMany(\App\Models\Job::class);
	}

    public function person()
    {
        return $this->belongsTo(\App\Models\Person::class);
    }
}
