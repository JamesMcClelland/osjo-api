<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $companies = Company::latest()->paginate(25);

        return $companies;
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
        
        $company = Company::create($request->all());

        return response()->json($company, 201);
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
        $company = Company::findOrFail($id);

        return $company;
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
        
        $company = Company::findOrFail($id);
        $company->update($request->all());

        return response()->json($company, 200);
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
        Company::destroy($id);

        return response()->json(null, 204);
    }
}
