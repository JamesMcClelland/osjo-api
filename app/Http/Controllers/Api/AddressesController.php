<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AddressesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $addresses = Address::latest()->paginate(25);

        return $addresses;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        $address = Address::create($request->all());

        return response()->json($address, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $address = Address::findOrFail($id);

        return $address;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     *
     * @return Response
     */
    public function update(Request $request, $id)
    {
        
        $address = Address::findOrFail($id);
        $address->update($request->all());

        return response()->json($address, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        Address::destroy($id);

        return response()->json(null, 204);
    }
}
