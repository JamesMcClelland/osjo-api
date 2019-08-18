<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view any models.
     *
     * @param User $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('view lower user');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param User $user
     * @param User $model
     * @return mixed
     */
    public function view(User $user, User $model)
    {
        return
            (
                $user->hasPermissionTo('view lower user') &&
                $model->access_level < $user->access_level
            )
                ||
            (
                $user->hasPermissionTo('view own user') &&
                $user->id === $model->id
            );
    }

    /**
     * Determine whether the user can create models.
     *
     * @param User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return
            $user->hasPermissionTo('create lower user');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param User $user
     * @param User $model
     * @return mixed
     */
    public function update(User $user, User $model)
    {
        return (
            $user->hasPermissionTo('edit lower user') &&
            $model->access_level < $user->access_level
        ) || (
            $user->hasPermissionTo('edit own user') &&
            $user->id === $model->id
        )
            ;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param User $model
     * @return mixed
     */
    public function delete(User $user, User $model)
    {
        return
            $user->hasPermissionTo('edit lower user') &&
            $model->access_level < $user->access_level;
    }

    /**
     * Determine whether the user can disable the user.
     *
     * @param User $user
     * @param User $model
     * @return mixed
     */
    public function disable(User $user, User $model)
    {
        return
            $user->hasPermissionTo('disable lower user') &&
            $model->access_level < $user->access_level;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param User $user
     * @param User $model
     * @return mixed
     */
    public function restore(User $user, User $model)
    {
        return
            $user->hasPermissionTo('edit lower user') &&
            $model->access_level < $user->access_level;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param User $user
     * @param User $model
     * @return mixed
     */
    public function forceDelete(User $user, User $model)
    {
        return false;
    }
}
