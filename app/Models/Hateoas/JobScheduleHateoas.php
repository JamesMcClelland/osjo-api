<?php

namespace App\Hateoas;

use App\Models\JobSchedule;
use GDebrauwer\Hateoas\Traits\CreatesLinks;

class JobScheduleHateoas
{
    use CreatesLinks;

    /**
     * Get the HATEOAS link to view the job schedule.
     *
     * @param \App\Models\JobSchedule $jobSchedule
     *
     * @return null|\GDebrauwer\Hateoas\Link
     */
    public function self(JobSchedule $jobSchedule)
    {
        return $this->link('job-schedule.show', ['job_schedule' => $jobSchedule]);
    }
}
