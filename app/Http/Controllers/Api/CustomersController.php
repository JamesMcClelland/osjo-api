<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $customers = Customer::latest()->paginate(25);

        return $customers;
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
        
        $customer = Customer::create($request->all());

        return response()->json($customer, 201);
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
        $customer = Customer::findOrFail($id);

        return $customer;
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
        
        $customer = Customer::findOrFail($id);
        $customer->update($request->all());

        return response()->json($customer, 200);
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
        Customer::destroy($id);

        return response()->json(null, 204);
    }
}
