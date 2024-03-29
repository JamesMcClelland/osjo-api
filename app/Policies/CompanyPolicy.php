<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Company;
use Illuminate\Auth\Access\HandlesAuthorization;

class CompanyPolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view any companies.
     *
     * @param User $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('view company');
    }

    /**
     * Determine whether the user can view the company.
     *
     * @param User $user
     * @param Company $company
     * @return mixed
     */
    public function view(User $user, Company $company)
    {
        return $user->hasPermissionTo('view company');
    }

    /**
     * Determine whether the user can create companies.
     *
     * @param User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create company');
    }

    /**
     * Determine whether the user can update the company.
     *
     * @param User $user
     * @param Company $company
     * @return mixed
     */
    public function update(User $user, Company $company)
    {
        return $user->hasPermissionTo('edit company');
    }

    /**
     * Determine whether the user can delete the company.
     *
     * @param User $user
     * @param Company $company
     * @return mixed
     */
    public function delete(User $user, Company $company)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the company.
     *
     * @param User $user
     * @param Company $company
     * @return mixed
     */
    public function restore(User $user, Company $company)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the company.
     *
     * @param User $user
     * @param Company $company
     * @return mixed
     */
    public function forceDelete(User $user, Company $company)
    {
        return false;
    }
}
