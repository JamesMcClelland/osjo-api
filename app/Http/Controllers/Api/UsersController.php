<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return Response
     * @throws AuthorizationException
     */
    public function index(Request $request)
    {
        $this->authorize('viewAny');
        $users = User::where('access_level', '<', Auth::user()->access_level)->latest()->paginate(25);

        return $users;
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

        if ($request->access_level && $request->access_level >= Auth::user()->access_level) {
            return response()->json(['error' => 'Unauthorized - You cannot create users of the same access level or higher'], 401);
        }

        $user = User::create($request->all());

        return response()->json($user, 201);
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
        $user = User::findOrFail($id);
        $this->authorize('view', $user);

        return $user;
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
        $user = User::findOrFail($id);
        $this->authorize('update', $user);
        $user->update($request->all());

        return response()->json($user, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return Response
     * @throws AuthorizationException
     */
    public function disable($id)
    {
        $user = User::findOrFail($id);
        $this->authorize('disable', $user);
        User::destroy($id);

        return response()->json(null, 204);
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
        $user = User::findOrFail($id);
        $this->authorize('delete', $user);
        User::destroy($id);

        return response()->json(null, 204);
    }
}
