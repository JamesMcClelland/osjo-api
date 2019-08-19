<?php

namespace App\Policies;

use App\Models\JobSchedule;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class JobSchedulePolicy
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
        return $user->hasPermissionTo('view job_schedule');
    }

    /**
     * Determine whether the user can view the job.
     *
     * @param User $user
     * @param JobSchedule $jobSchedule
     * @return mixed
     */
    public function view(User $user, JobSchedule $jobSchedule)
    {
        return $user->hasPermissionTo('view job_schedule') ||
            (
                $user->hasPermissionTo('view own job_schedule') &&
                $user->id === $jobSchedule->user_id
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
        return $user->hasPermissionTo('create job_schedule');
    }

    /**
     * Determine whether the user can update the job.
     *
     * @param User $user
     * @param JobSchedule $jobSchedule
     * @return mixed
     */
    public function update(User $user, JobSchedule $jobSchedule)
    {
        return $user->hasPermissionTo('edit job_schedule');
    }

    /**
     * Determine whether the user can delete the job.
     *
     * @param User $user
     * @param JobSchedule $jobSchedule
     * @return mixed
     */
    public function delete(User $user, JobSchedule $jobSchedule)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the job.
     *
     * @param User $user
     * @param JobSchedule $jobSchedule
     * @return mixed
     */
    public function restore(User $user, JobSchedule $jobSchedule)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the job.
     *
     * @param User $user
     * @param JobSchedule $jobSchedule
     * @return mixed
     */
    public function forceDelete(User $user, JobSchedule $jobSchedule)
    {
        return false;
    }
}
