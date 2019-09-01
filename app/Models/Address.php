<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 17 Aug 2019 13:26:37 +0000.
 */

namespace App\Models;

use Carbon\Carbon;
use Eloquent;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletes;
use Reliese\Database\Eloquent\Model;

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
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property Collection $companies
 * @property Collection $customers
 * @property Collection $users
 *
 * @package App\Models
 *
 * @mixin Eloquent
 */
class Address extends Model
{
	use SoftDeletes;

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
		return $this->belongsToMany(Company::class, 'company_addresses')
					->withPivot('id')
					->withTimestamps();
	}

	public function customers()
	{
		return $this->belongsToMany(Customer::class, 'customer_addresses')
					->withPivot('id')
					->withTimestamps();
	}

	public function users()
	{
		return $this->belongsToMany(User::class, 'user_addresses')
					->withPivot('id')
					->withTimestamps();
	}
}
