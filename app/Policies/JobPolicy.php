<?php

namespace App\Policies;

use App\Models\Job;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class JobPolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view any jobs.
     *
     * @param User $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('view job');
    }

    /**
     * Determine whether the user can view the job.
     *
     * @param User $user
     * @param Job $job
     * @return mixed
     */
    public function view(User $user, Job $job)
    {
        return $user->hasPermissionTo('view job') ||
            (
                $user->hasPermissionTo('view own job') &&
                $user->id === $job->worker_id
            );
    }

    /**
     * Determine whether the user can create jobs.
     *
     * @param User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create job');
    }

    /**
     * Determine whether the user can update the job.
     *
     * @param User $user
     * @param Job $job
     * @return mixed
     */
    public function update(User $user, Job $job)
    {
        return $user->hasPermissionTo('edit job')  ||
            (
                $user->hasPermissionTo('edit own job') &&
                $user->id === $job->worker_id
            );
    }

    /**
     * Determine whether the user can delete the job.
     *
     * @param User $user
     * @param Job $job
     * @return mixed
     */
    public function delete(User $user, Job $job)
    {
        return $user->hasPermissionTo('delete job');
    }

    /**
     * Determine whether the user can restore the job.
     *
     * @param User $user
     * @param Job $job
     * @return mixed
     */
    public function restore(User $user, Job $job)
    {
        return $user->hasPermissionTo('edit job');
    }

    /**
     * Determine whether the user can permanently delete the job.
     *
     * @param User $user
     * @param Job $job
     * @return mixed
     */
    public function forceDelete(User $user, Job $job)
    {
        return false;
    }
}
