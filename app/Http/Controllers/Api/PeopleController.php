<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Person;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PeopleController extends Controller
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
        $people = Person::latest()->paginate(25);

        return $people;
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
        $person = Person::create($request->all());

        return response()->json($person, 201);
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
        $person = Person::findOrFail($id);
        $this->authorize('view', $person);

        return $person;
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
        $person = Person::findOrFail($id);
        $this->authorize('update', $person);
        $person->update($request->all());

        return response()->json($person, 200);
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
        $person = Person::findOrFail($id);
        $this->authorize('delete', $person);
        Person::destroy($id);

        return response()->json(null, 204);
    }
}
