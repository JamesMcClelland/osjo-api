<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\CompanyAddress;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * @group Company address management
 * Logic that determines how companies are linked to addresses
 * @package App\Http\Controllers\Api
 */
class CompanyAddressController extends Controller
{
    /**
     * Display all addresses
     *
     * @return Response
     * @throws AuthorizationException
     * @authenticated
     */
    public function index(Request $request)
    {
        $this->authorize('viewAny');
        $posts = CompanyAddress::latest()->paginate(25);

        return $posts;
    }

    /**
     * Store a new company address
     *
     * @param Request $request
     *
     * @return Response
     * @throws AuthorizationException
     * @authenticated
     * @bodyParam company_id int required The company to link together
     * @bodyParam address_id int required The address to link together
     */
    public function store(Request $request)
    {
        $this->authorize('create');
        $post = CompanyAddress::create($request->all());

        return response()->json($post, 201);
    }

    /**
     * Display a company address
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
        $post = CompanyAddress::findOrFail($id);

        return $post;
    }

    /**
     * Update a company address
     *
     * @param Request $request
     * @param int $id
     *
     * @return Response
     * @throws AuthorizationException
     * @authenticated
     * @bodyParam company_id int The company to link together
     * @bodyParam address_id int The address to link together
     */
    public function update(Request $request, $id)
    {
        $this->authorize('edit');
        $post = CompanyAddress::findOrFail($id);
        $post->update($request->all());

        return response()->json($post, 200);
    }

    /**
     * Soft delete a company address
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
        CompanyAddress::destroy($id);

        return response()->json(null, 204);
    }
}
