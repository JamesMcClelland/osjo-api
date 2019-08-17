<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 17 Aug 2019 13:26:37 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Job
 * 
 * @property int $id
 * @property int $customer_id
 * @property int $customer_person_id
 * @property int $customer_address_id
 * @property int $job_type_id
 * @property \Carbon\Carbon $due_date
 * @property \Carbon\Carbon $completed_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property string $title
 * @property string $description
 * 
 * @property \App\Models\CustomerAddress $customer_address
 * @property \App\Models\Customer $customer
 * @property \App\Models\CustomerPerson $customer_person
 * @property \App\Models\JobType $job_type
 * @property \Illuminate\Database\Eloquent\Collection $job_schedules
 *
 * @package App\Models
 */
class Job extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $casts = [
		'customer_id' => 'int',
		'customer_person_id' => 'int',
		'customer_address_id' => 'int',
		'job_type_id' => 'int'
	];

	protected $dates = [
		'due_date',
		'completed_at'
	];

	protected $fillable = [
		'customer_id',
		'customer_person_id',
		'customer_address_id',
		'job_type_id',
		'due_date',
		'completed_at',
		'title',
		'description'
	];

	public function customer_address()
	{
		return $this->belongsTo(\App\Models\CustomerAddress::class);
	}

	public function customer()
	{
		return $this->belongsTo(\App\Models\Customer::class);
	}

	public function customer_person()
	{
		return $this->belongsTo(\App\Models\CustomerPerson::class);
	}

	public function job_type()
	{
		return $this->belongsTo(\App\Models\JobType::class);
	}

	public function job_schedules()
	{
		return $this->hasMany(\App\Models\JobSchedule::class);
	}
}
