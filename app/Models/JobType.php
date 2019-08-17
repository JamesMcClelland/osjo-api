<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 17 Aug 2019 13:26:37 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class JobType
 * 
 * @property int $id
 * @property string $type
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_At
 * 
 * @property \Illuminate\Database\Eloquent\Collection $jobs
 *
 * @package App\Models
 */
class JobType extends Eloquent
{
	public $timestamps = false;

    protected $guard_name = 'api';


	protected $fillable = [
		'type',
	];

	public function jobs()
	{
		return $this->hasMany(\App\Models\Job::class);
	}
}
