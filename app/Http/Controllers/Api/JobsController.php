<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Job;
use Carbon\Carbon;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * @group Job management
 * Jobs are the generic idea of tasks or actions that need to be taken
 * by an individual, these are assigned to workers who then complete/edit/cancel
 * that job.
 * @package App\Http\Controllers\Api
 */
class JobsController extends Controller
{
    /**
     * Display all jobs
     *
     * @param Request $request
     * @return Response
     * @throws AuthorizationException
     * @authenticated
     */
    public function index(Request $request)
    {
        $this->authorize('viewAny');
        $jobs = Job::latest()->paginate(25);

        return $jobs;
    }

    /**
     * Store a new job
     *
     * @param Request $request
     *
     * @return Response
     * @throws AuthorizationException
     * @authenticated
     * @bodyParam customer_id int required The customer that the job is for
     * @bodyParam customer_person_id int required The person that is going to be communicated with for this job
     * @bodyParam customer_address_id int required The address that the job will take place
     * @bodyParam job_type_id int required The type of the job, see job types for options
     * @bodyParam due_date Carbon required The date that the job is due
     * @bodyParam completed_at Carbon The date that the job was competed (if in past)
     * @bodyParam title string required The simple title for the job
     * @bodyParam description string The outline of what the job requirements are
     */
    public function store(Request $request)
    {
        $this->authorize('create');
        $job = Job::create($request->all());

        return response()->json($job, 201);
    }

    /**
     * Display a job
     *
     * @param int $id
     *
     * @return Response
     * @throws AuthorizationException
     * @authenticated
     */
    public function show($id)
    {
        $job = Job::findOrFail($id);
        $this->authorize('view', $job);

        return $job;
    }

    /**
     * Update a job
     *
     * @param Request $request
     * @param int $id
     *
     * @return Response
     * @throws AuthorizationException
     * @authenticated
     * @bodyParam customer_id int The customer that the job is for
     * @bodyParam customer_person_id int The person that is going to be communicated with for this job
     * @bodyParam customer_address_id int The address that the job will take place
     * @bodyParam job_type_id int The type of the job, see job types for options
     * @bodyParam due_date Carbon The date that the job is due
     * @bodyParam completed_at Carbon The date that the job was competed (if in past)
     * @bodyParam title string The simple title for the job
     * @bodyParam description string The outline of what the job requirements are
     */
    public function update(Request $request, $id)
    {
        $job = Job::findOrFail($id);
        $this->authorize('update', $job);
        $job->update($request->all());

        return response()->json($job, 200);
    }

    /**
     * Soft delete a job
     *
     * @param int $id
     *
     * @return Response
     * @throws AuthorizationException
     * @authenticated
     */
    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        $this->authorize('delete', $job);
        Job::destroy($id);

        return response()->json(null, 204);
    }
}
