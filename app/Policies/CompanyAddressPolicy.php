<?php

namespace App\Policies;

use App\Models\CompanyAddress;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CompanyAddressPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any company addresses.
     *
     * @param User $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('view company_address');
    }

    /**
     * Determine whether the user can view the company address.
     *
     * @param User $user
     * @param CompanyAddress $companyAddress
     * @return mixed
     */
    public function view(User $user, CompanyAddress $companyAddress)
    {
        return $user->hasPermissionTo('view company_address');
    }

    /**
     * Determine whether the user can create company address.
     *
     * @param User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create company_address');
    }

    /**
     * Determine whether the user can update the company address.
     *
     * @param User $user
     * @param CompanyAddress $companyAddress
     * @return mixed
     */
    public function update(User $user, CompanyAddress $companyAddress)
    {
        return $user->hasPermissionTo('edit company_address');
    }

    /**
     * Determine whether the user can delete the company address.
     *
     * @param User $user
     * @param CompanyAddress $companyAddress
     * @return mixed
     */
    public function delete(User $user, CompanyAddress $companyAddress)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the companyAddress.
     *
     * @param User $user
     * @param CompanyAddress $companyAddress
     * @return mixed
     */
    public function restore(User $user, CompanyAddress $companyAddress)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the companyAddress.
     *
     * @param User $user
     * @param CompanyAddress $companyAddress
     * @return mixed
     */
    public function forceDelete(User $user, CompanyAddress $companyAddress)
    {
        return false;
    }
}
