<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Customer;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * @group Customer management
 * Class CustomersController
 * @package App\Http\Controllers\Api
 */
class CustomersController extends Controller
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
        $posts = Company::latest()->paginate(25);

        return $posts;
    }

    /**
     * Store a new customer
     *
     * @param Request $request
     *
     * @return Response
     * @throws AuthorizationException
     * @authenticated
     * @bodyParam name string required The customers name
     */
    public function store(Request $request)
    {
        $this->authorize('create');
        $post = Company::create($request->all());

        return response()->json($post, 201);
    }

    /**
     * Display a customer
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
        $post = Company::findOrFail($id);

        return $post;
    }

    /**
     * Update a customer
     *
     * @param Request $request
     * @param int $id
     *
     * @return Response
     * @throws AuthorizationException
     * @authenticated
     * @bodyParam name string required The customers name
     */
    public function update(Request $request, $id)
    {
        $this->authorize('edit');
        $post = Company::findOrFail($id);
        $post->update($request->all());

        return response()->json($post, 200);
    }

    /**
     * Soft delete a customer
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
