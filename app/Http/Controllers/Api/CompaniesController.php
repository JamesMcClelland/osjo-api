<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Company;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * @group Company management
 * Companies are entities that mean more than one company (or department)
 * can be managed with the same system, TODO
 * @package App\Http\Controllers\Api
 */
class CompaniesController extends Controller
{
    /**
     * Display all companies
     *
     * @return Response
     * @throws AuthorizationException
     * @authenticated
     */
    public function index(Request $request)
    {
        $this->authorize('viewAny');
        $companies = Company::latest()->paginate(25);

        return $companies;
    }

    /**
     * Store a new company
     *
     * @param Request $request
     *
     * @return Response
     * @throws AuthorizationException
     * @authenticated
     * @bodyParam name string required The company or business name
     * @bodyParam size integer The amount of employees at the company
     */
    public function store(Request $request)
    {
        $this->authorize('create');
        $company = Company::create($request->all());

        return response()->json($company, 201);
    }

    /**
     * Display a company
     *
     * @param int $id
     *
     * @return Response
     * @throws AuthorizationException
     * @authenticated
     */
    public function show($id)
    {
        $this->authorize('view');
        $company = Company::findOrFail($id);

        return $company;
    }

    /**
     * Update a company
     *
     * @param Request $request
     * @param int $id
     * @bodyParam name string The company or business name
     * @bodyParam size integer The amount of employees at the company
     *
     * @return Response
     * @throws AuthorizationException
     * @authenticated
     */
    public function update(Request $request, $id)
    {
        $this->authorize('edit');
        $company = Company::findOrFail($id);
        $company->update($request->all());

        return response()->json($company, 200);
    }

    /**
     * Soft delete a company
     *
     * @param int $id
     *
     * @return Response
     * @throws AuthorizationException
     * @authenticated
     */
    public function destroy($id)
    {
        $this->authorize('delete');
        Company::destroy($id);

        return response()->json(null, 204);
    }
}
