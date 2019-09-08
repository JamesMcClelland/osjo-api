<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\CustomerAddress;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * @group Customer address management
 * Logic that determines how customers are linked to addresses
 * @package App\Http\Controllers\Api
 */
class CustomerAddressController extends Controller
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
        $posts = CustomerAddress::latest()->paginate(25);

        return $posts;
    }

    /**
     * Store a customer address
     *
     * @param Request $request
     *
     * @return Response
     * @throws AuthorizationException
     * @authenticated
     * @bodyParam customer_id int required The customer to link together
     * @bodyParam address_id int required The address to link together
     */
    public function store(Request $request)
    {
        $this->authorize('create');
        $post = CustomerAddress::create($request->all());

        return response()->json($post, 201);
    }

    /**
     * Display a customer address
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
        $post = CustomerAddress::findOrFail($id);

        return $post;
    }

    /**
     * Update a customer address
     *
     * @param Request $request
     * @param int $id
     *
     * @return Response
     * @throws AuthorizationException
     * @authenticated
     * @bodyParam customer_id int The customer to link together
     * @bodyParam address_id int The address to link together
     */
    public function update(Request $request, $id)
    {
        $this->authorize('edit');
        $post = CustomerAddress::findOrFail($id);
        $post->update($request->all());

        return response()->json($post, 200);
    }

    /**
     * Soft delete a customer address
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
        CustomerAddress::destroy($id);

        return response()->json(null, 204);
    }
}
