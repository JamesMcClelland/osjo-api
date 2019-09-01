<?php

namespace App\Hateoas;

use App\Models\Job;
use GDebrauwer\Hateoas\Traits\CreatesLinks;

class JobHateoas
{
    use CreatesLinks;

    /**
     * Get the HATEOAS link to view the job.
     *
     * @param \App\Models\Job $job
     *
     * @return null|\GDebrauwer\Hateoas\Link
     */
    public function self(Job $job)
    {
        return $this->link('jobs.show', ['job' => $job]);
    }
}
