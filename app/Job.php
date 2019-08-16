<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'jobs';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['customer_person_id', 'customer_address_id', 'job_type_id', 'customer_id', 'due_date', 'completed_at', 'title', 'description'];

    
}
