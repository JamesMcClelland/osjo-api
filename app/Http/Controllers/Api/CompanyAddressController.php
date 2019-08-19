<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\CompanyAddress;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CompanyAddressController extends Controller
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
        $posts = CompanyAddress::latest()->paginate(25);

        return $posts;
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
        $post = CompanyAddress::create($request->all());

        return response()->json($post, 201);
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
        $this->authorize('view');
        $post = CompanyAddress::findOrFail($id);

        return $post;
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
        $this->authorize('edit');
        $post = CompanyAddress::findOrFail($id);
        $post->update($request->all());

        return response()->json($post, 200);
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
        $this->authorize('delete');
        CompanyAddress::destroy($id);

        return response()->json(null, 204);
    }
}
