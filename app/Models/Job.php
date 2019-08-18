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
 * Class Job
 * 
 * @property int $id
 * @property int $customer_id
 * @property int $customer_person_id
 * @property int $customer_address_id
 * @property int $job_type_id
 * @property int $worker_id
 * @property Carbon $due_date
 * @property Carbon $completed_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $deleted_at
 * @property string $title
 * @property string $description
 * 
 * @property CustomerAddress $customer_address
 * @property Customer $customer
 * @property CustomerPerson $customer_person
 * @property JobType $job_type
 * @property Collection $job_schedules
 *
 * @package App\Models
 */
class Job extends Eloquent
{
	use SoftDeletes;

    protected $guard_name = 'api';

    protected $casts = [
		'customer_id' => 'int',
		'worker_id' => 'int',
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
		return $this->belongsTo(CustomerAddress::class);
	}

	public function customer()
	{
		return $this->belongsTo(Customer::class);
	}

	public function customer_person()
	{
		return $this->belongsTo(CustomerPerson::class);
	}

	public function job_type()
	{
		return $this->belongsTo(JobType::class);
	}

	public function job_schedules()
	{
		return $this->hasMany(JobSchedule::class);
	}
}
