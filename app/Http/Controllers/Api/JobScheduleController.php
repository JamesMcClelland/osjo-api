<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\JobSchedule;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class JobScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     * @throws AuthorizationException
     */
    public function index(Request $request)
    {
        $this->authorize('viewAny');
        $jobschedule = JobSchedule::latest()->paginate(25);

        return $jobschedule;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return Response
     * @throws AuthorizationException
     */
    public function store(Request $request)
    {
        $this->authorize('create');
        $jobschedule = JobSchedule::create($request->all());

        return response()->json($jobschedule, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return Response
     * @throws AuthorizationException
     */
    public function show($id)
    {
        $jobschedule = JobSchedule::findOrFail($id);
        $this->authorize('view', $jobschedule);

        return $jobschedule;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     *
     * @return Response
     * @throws AuthorizationException
     */
    public function update(Request $request, $id)
    {
        $jobschedule = JobSchedule::findOrFail($id);
        $this->authorize('edit', $jobschedule);

        $jobschedule->update($request->all());

        return response()->json($jobschedule, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return Response
     * @throws AuthorizationException
     */
    public function destroy($id)
    {
        $jobschedule = JobSchedule::findOrFail($id);
        $this->authorize('delete', $jobschedule);

        JobSchedule::destroy($id);

        return response()->json(null, 204);
    }
}
