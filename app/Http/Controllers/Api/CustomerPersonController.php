<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\CustomerPerson;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * @group Customer person management
 * Logic that determines how customers are linked to people
 * @package App\Http\Controllers\Api
 */
class CustomerPersonController extends Controller
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
        $posts = CustomerPerson::latest()->paginate(25);

        return $posts;
    }

    /**
     * Store a new customer person
     *
     * @param Request $request
     *
     * @return Response
     * @throws AuthorizationException
     * @authenticated
     * @bodyParam customer_id int required The customer to link together
     * @bodyParam person_id int required The person to link together
     */
    public function store(Request $request)
    {
        $this->authorize('create');
        $post = CustomerPerson::create($request->all());

        return response()->json($post, 201);
    }

    /**
     * Display a customer person
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
        $post = CustomerPerson::findOrFail($id);

        return $post;
    }

    /**
     * Update a customer person
     *
     * @param Request $request
     * @param int $id
     *
     * @return Response
     * @throws AuthorizationException
     * @authenticated
     */
    public function update(Request $request, $id)
    {
        $this->authorize('edit');
        $post = CustomerPerson::findOrFail($id);
        $post->update($request->all());

        return response()->json($post, 200);
    }

    /**
     * Soft delete a customer person
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
        CustomerPerson::destroy($id);

        return response()->json(null, 204);
    }
}
