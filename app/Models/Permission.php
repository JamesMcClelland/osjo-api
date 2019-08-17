<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 17 Aug 2019 13:26:37 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Permission
 * 
 * @property int $id
 * @property string $type
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $created_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $companies
 * @property \Illuminate\Database\Eloquent\Collection $users
 *
 * @package App\Models
 */
class Permission extends Eloquent
{
	protected $fillable = [
		'type'
	];

	public function companies()
	{
		return $this->belongsToMany(\App\Models\Company::class, 'user_company_permissions')
					->withPivot('id', 'user_id', 'deleted_at')
					->withTimestamps();
	}

	public function users()
	{
		return $this->belongsToMany(\App\Models\User::class, 'user_company_permissions')
					->withPivot('id', 'company_id', 'deleted_at')
					->withTimestamps();
	}
}
