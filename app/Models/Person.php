<?php

namespace App\Models;


/**
 * Class Person
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $primary_phone
 * @property string $secondary_phone
 * @property string $email
 * @property string $meta
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_At
 *
 * @property \Illuminate\Database\Eloquent\Collection $jobs
 *
 * @package App\Models
 */
class Person extends Eloquent
{
    public $timestamps = false;

    protected $guard_name = 'api';

    protected $fillable = [
        'first_name',
        'last_name',
        'primary_phone',
        'secondary_phone',
        'email',
        'meta',
    ];
}
