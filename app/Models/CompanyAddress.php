<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 17 Aug 2019 13:26:37 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CompanyAddress
 * 
 * @property int $id
 * @property int $company_id
 * @property int $address_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Address $address
 * @property \App\Models\Company $company
 *
 * @package App\Models
 */
class CompanyAddress extends Eloquent
{

    protected $guard_name = 'api';

    protected $casts = [
		'company_id' => 'int',
		'address_id' => 'int'
	];

	protected $fillable = [
		'company_id',
		'address_id'
	];

	public function address()
	{
		return $this->belongsTo(\App\Models\Address::class);
	}

	public function company()
	{
		return $this->belongsTo(\App\Models\Company::class);
	}
}
