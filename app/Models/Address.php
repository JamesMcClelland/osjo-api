<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 17 Aug 2019 13:26:37 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Address
 * 
 * @property int $id
 * @property string $organisation_name
 * @property string $line_1
 * @property string $line_2
 * @property string $town
 * @property string $county
 * @property string $postcode
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $companies
 * @property \Illuminate\Database\Eloquent\Collection $customers
 * @property \Illuminate\Database\Eloquent\Collection $users
 *
 * @package App\Models
 */
class Address extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $guard_name = 'api';

    protected $fillable = [
		'organisation_name',
		'line_1',
		'line_2',
		'town',
		'county',
		'postcode'
	];

	public function companies()
	{
		return $this->belongsToMany(\App\Models\Company::class, 'company_addresses')
					->withPivot('id')
					->withTimestamps();
	}

	public function customers()
	{
		return $this->belongsToMany(\App\Models\Customer::class, 'customer_addresses')
					->withPivot('id')
					->withTimestamps();
	}

	public function users()
	{
		return $this->belongsToMany(\App\Models\User::class, 'user_addresses')
					->withPivot('id')
					->withTimestamps();
	}
}
