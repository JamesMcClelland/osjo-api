<?php

namespace App\Policies;

use App\Models\CustomerAddress;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CustomerAddressPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any customerAddresss.
     *
     * @param User $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('view customer_address');
    }

    /**
     * Determine whether the user can view the customerAddress.
     *
     * @param User $user
     * @param CustomerAddress $customerAddress
     * @return mixed
     */
    public function view(User $user, CustomerAddress $customerAddress)
    {
        return $user->hasPermissionTo('view customer_address');
    }

    /**
     * Determine whether the user can create customerAddresss.
     *
     * @param User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create customer_address');
    }

    /**
     * Determine whether the user can update the customerAddress.
     *
     * @param User $user
     * @param CustomerAddress $customerAddress
     * @return mixed
     */
    public function update(User $user, CustomerAddress $customerAddress)
    {
        return $user->hasPermissionTo('edit customer_address');
    }

    /**
     * Determine whether the user can delete the customerAddress.
     *
     * @param User $user
     * @param CustomerAddress $customerAddress
     * @return mixed
     */
    public function delete(User $user, CustomerAddress $customerAddress)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the customerAddress.
     *
     * @param User $user
     * @param CustomerAddress $customerAddress
     * @return mixed
     */
    public function restore(User $user, CustomerAddress $customerAddress)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the customerAddress.
     *
     * @param User $user
     * @param CustomerAddress $customerAddress
     * @return mixed
     */
    public function forceDelete(User $user, CustomerAddress $customerAddress)
    {
        return false;
    }
}
