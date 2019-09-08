<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

/**
 * @group User management
 * Users are defined as the people who are using the system, the primary types of user are:
 * worker, admin, company admin, super admin
 * @package App\Http\Controllers\Api
 */
class UsersController extends Controller
{
    /**
     * Display all users
     *
     * @param Request $request
     * @return Response
     * @throws AuthorizationException
     * @authenticated
     */
    public function index(Request $request)
    {
        $this->authorize('viewAny');
        $users = User::where('access_level', '<', Auth::user()->access_level)->latest()->paginate(25);

        return $users;
    }

    /**
     * Store a new user
     *
     * @param Request $request
     *
     * @return Response
     * @throws AuthorizationException
     * @authenticated
     * @bodyParam email string required The email address for the user
     * @bodyParam first_name string required The users first name
     * @bodyParam last_name string required The users last name
     * @bodyParam password string The password for the user
     * @bodyParam disabled boolean If the user is disabled or not
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
     * Display a user
     *
     * @param int $id
     *
     * @return Response
     * @throws AuthorizationException
     * @authenticated
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        $this->authorize('view', $user);

        return $user;
    }

    /**
     * Update a user
     *
     * @param Request $request
     * @param int $id
     *
     * @return Response
     * @throws AuthorizationException
     * @authenticated
     * @bodyParam email string The email address for the user
     * @bodyParam first_name string The users first name
     * @bodyParam last_name string The users last name
     * @bodyParam password string The password for the user
     * @bodyParam disabled boolean If the user is disabled or not
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $this->authorize('update', $user);
        $user->update($request->all());

        return response()->json($user, 200);
    }

    /**
     * Disable a user
     *
     * @param int $id
     *
     * @return Response
     * @throws AuthorizationException
     * @authenticated
     */
    public function disable($id)
    {
        $user = User::findOrFail($id);
        $this->authorize('disable', $user);
        User::destroy($id);

        return response()->json(null, 204);
    }

    /**
     * Soft delete a user
     *
     * @param int $id
     *
     * @return Response
     * @throws AuthorizationException
     * @authenticated
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $this->authorize('delete', $user);
        User::destroy($id);

        return response()->json(null, 204);
    }
}
