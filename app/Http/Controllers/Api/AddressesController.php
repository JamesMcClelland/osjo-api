<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Address;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * @group Address management
 * Addresses are used across multiple different models, they just contain where a company/person/user is located
 * @package App\Http\Controllers\Api
 */
class AddressesController extends Controller
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
        $addresses = Address::latest()->paginate(25);

        return $addresses;
    }

    /**
     * Store a new address
     *
     * @param Request $request
     *
     * @return Response
     * @throws AuthorizationException
     * @authenticated
     * @bodyParam organisation_name string The organisation or company name on the address
     * @bodyParam line_1 string required First line of address
     * @bodyParam line_2 string Second line of address
     * @bodyParam town string Town or city
     * @bodyParam county string County or district
     * @bodyParam postcode string required Valid UK postcode
     */
    public function store(Request $request)
    {
        $this->authorize('create');
        $address = Address::create($request->all());

        return response()->json($address, 201);
    }

    /**
     * Display an address
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
        $address = Address::findOrFail($id);

        return $address;
    }

    /**
     * Update an address
     *
     * @param Request $request
     * @param int $id
     *
     * @return Response
     * @throws AuthorizationException
     * @authenticated
     * @bodyParam organisation_name string The organisation or company name on the address
     * @bodyParam line_1 string First line of address
     * @bodyParam line_2 string Second line of address
     * @bodyParam town string Town or city
     * @bodyParam county string County or district
     * @bodyParam postcode string Valid UK postcode
     */
    public function update(Request $request, $id)
    {
        $this->authorize('edit');
        $address = Address::findOrFail($id);
        $address->update($request->all());

        return response()->json($address, 200);
    }

    /**
     * Soft delete an address
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
        Address::destroy($id);

        return response()->json(null, 204);
    }
}
