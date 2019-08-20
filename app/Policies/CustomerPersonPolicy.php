<?php

namespace App\Policies;

use App\Models\User;
use App\Models\CustomerPerson;
use Illuminate\Auth\Access\HandlesAuthorization;

class CustomerPersonPolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view any customer people.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('view customer_person');
    }

    /**
     * Determine whether the user can view the customer person.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CustomerPerson  $customerPerson
     * @return mixed
     */
    public function view(User $user, CustomerPerson $customerPerson)
    {
        return $user->hasPermissionTo('view customer_person');
    }

    /**
     * Determine whether the user can create customer people.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create customer_person');
    }

    /**
     * Determine whether the user can update the customer person.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CustomerPerson  $customerPerson
     * @return mixed
     */
    public function update(User $user, CustomerPerson $customerPerson)
    {
        return $user->hasPermissionTo('edit customer_person');
    }

    /**
     * Determine whether the user can delete the customer person.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CustomerPerson  $customerPerson
     * @return mixed
     */
    public function delete(User $user, CustomerPerson $customerPerson)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the customer person.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CustomerPerson  $customerPerson
     * @return mixed
     */
    public function restore(User $user, CustomerPerson $customerPerson)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the customer person.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CustomerPerson  $customerPerson
     * @return mixed
     */
    public function forceDelete(User $user, CustomerPerson $customerPerson)
    {
        return false;
    }
}
