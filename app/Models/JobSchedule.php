<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 17 Aug 2019 13:26:37 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class JobSchedule
 * 
 * @property int $id
 * @property int $job_id
 * @property int $user_id
 * @property \Carbon\Carbon $scheduled_time
 * @property int $job_length
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Job $job
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class JobSchedule extends Eloquent
{
	protected $table = 'job_schedule';

    protected $guard_name = 'api';

    protected $casts = [
		'job_id' => 'int',
		'user_id' => 'int',
		'job_length' => 'int'
	];

	protected $dates = [
		'scheduled_time'
	];

	protected $fillable = [
		'job_id',
		'user_id',
		'scheduled_time',
		'job_length'
	];

	public function job()
	{
		return $this->belongsTo(\App\Models\Job::class);
	}

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class);
	}
}
