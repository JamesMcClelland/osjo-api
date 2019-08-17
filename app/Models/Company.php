<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 17 Aug 2019 13:26:37 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Company
 * 
 * @property int $id
 * @property string $name
 * @property int $size
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $addresses
 * @property \Illuminate\Database\Eloquent\Collection $permissions
 * @property \Illuminate\Database\Eloquent\Collection $users
 *
 * @package App\Models
 */
class Company extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $casts = [
		'size' => 'int'
	];

	protected $fillable = [
		'name',
		'size'
	];

	public function addresses()
	{
		return $this->belongsToMany(\App\Models\Address::class, 'company_addresses')
					->withPivot('id')
					->withTimestamps();
	}

	public function permissions()
	{
		return $this->belongsToMany(\App\Models\Permission::class, 'user_company_permissions')
					->withPivot('id', 'user_id', 'deleted_at')
					->withTimestamps();
	}

	public function users()
	{
		return $this->belongsToMany(\App\Models\User::class, 'user_company_permissions')
					->withPivot('id', 'permission_id', 'deleted_at')
					->withTimestamps();
	}
}
