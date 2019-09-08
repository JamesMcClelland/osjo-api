<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\JobSchedule;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * @group Job schedule management
 * The job schedule contains information about when a job is
 * going to be done, and who it is going to be done by.
 * @package App\Http\Controllers\Api
 */
class JobScheduleController extends Controller
{
    /**
     * Display all job schedule elements
     *
     * @return Response
     * @throws AuthorizationException
     * @authenticated
     */
    public function index(Request $request)
    {
        $this->authorize('viewAny');
        $jobschedule = JobSchedule::latest()->paginate(25);

        return $jobschedule;
    }

    /**
     * Store a new job schedule element
     *
     * @param Request $request
     *
     * @return Response
     * @throws AuthorizationException
     * @authenticated
     * @bodyParam job_id int required The job to schedule
     * @bodyParam user_id int required The person who you want to assign the job to
     * @bodyParam scheduled_time \Carbon\Carbon required The date when the job should take place
     * @bodyParam job_length int The length of the job in minutes
     */
    public function store(Request $request)
    {
        $this->authorize('create');
        $jobschedule = JobSchedule::create($request->all());

        return response()->json($jobschedule, 201);
    }

    /**
     * Show a job schedule element
     *
     * @param int $id
     *
     * @return Response
     * @throws AuthorizationException
     * @authenticated
     */
    public function show($id)
    {
        $jobschedule = JobSchedule::findOrFail($id);
        $this->authorize('view', $jobschedule);

        return $jobschedule;
    }

    /**
     * Update a job schedule element
     *
     * @param Request $request
     * @param int $id
     *
     * @return Response
     * @throws AuthorizationException
     * @authenticated
     * @bodyParam job_id int The job to schedule
     * @bodyParam user_id int The person who you want to assign the job to
     * @bodyParam scheduled_time \Carbon\Carbon The date when the job should take place
     * @bodyParam job_length int The length of the job in minutes
     */
    public function update(Request $request, $id)
    {
        $jobschedule = JobSchedule::findOrFail($id);
        $this->authorize('edit', $jobschedule);

        $jobschedule->update($request->all());

        return response()->json($jobschedule, 200);
    }

    /**
     * soft delete a job schedule element
     *
     * @param int $id
     *
     * @return Response
     * @throws AuthorizationException
     * @authenticated
     */
    public function destroy($id)
    {
        $jobschedule = JobSchedule::findOrFail($id);
        $this->authorize('delete', $jobschedule);

        JobSchedule::destroy($id);

        return response()->json(null, 204);
    }
}
