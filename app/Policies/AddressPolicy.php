<?php

namespace App\Policies;

use App\Models\Address;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AddressPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any addresss.
     *
     * @param User $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('view address');
    }

    /**
     * Determine whether the user can view the address.
     *
     * @param User $user
     * @param Address $address
     * @return mixed
     */
    public function view(User $user, Address $address)
    {
        return $user->hasPermissionTo('view address');
    }

    /**
     * Determine whether the user can create addresss.
     *
     * @param User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create address');
    }

    /**
     * Determine whether the user can update the address.
     *
     * @param User $user
     * @param Address $address
     * @return mixed
     */
    public function update(User $user, Address $address)
    {
        return $user->hasPermissionTo('edit address');
    }

    /**
     * Determine whether the user can delete the address.
     *
     * @param User $user
     * @param Address $address
     * @return mixed
     */
    public function delete(User $user, Address $address)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the address.
     *
     * @param User $user
     * @param Address $address
     * @return mixed
     */
    public function restore(User $user, Address $address)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the address.
     *
     * @param User $user
     * @param Address $address
     * @return mixed
     */
    public function forceDelete(User $user, Address $address)
    {
        return false;
    }
}
