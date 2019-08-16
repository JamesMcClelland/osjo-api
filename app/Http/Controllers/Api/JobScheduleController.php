<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\JobSchedule;
use Illuminate\Http\Request;

class JobScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $jobschedule = JobSchedule::latest()->paginate(25);

        return $jobschedule;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $jobschedule = JobSchedule::create($request->all());

        return response()->json($jobschedule, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jobschedule = JobSchedule::findOrFail($id);

        return $jobschedule;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $jobschedule = JobSchedule::findOrFail($id);
        $jobschedule->update($request->all());

        return response()->json($jobschedule, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        JobSchedule::destroy($id);

        return response()->json(null, 204);
    }
}
