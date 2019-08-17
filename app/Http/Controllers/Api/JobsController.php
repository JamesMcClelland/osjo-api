<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $jobs = Job::latest()->paginate(25);

        return $jobs;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        $job = Job::create($request->all());

        return response()->json($job, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $job = Job::findOrFail($id);

        return $job;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     *
     * @return Response
     */
    public function update(Request $request, $id)
    {
        
        $job = Job::findOrFail($id);
        $job->update($request->all());

        return response()->json($job, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        Job::destroy($id);

        return response()->json(null, 204);
    }
}
