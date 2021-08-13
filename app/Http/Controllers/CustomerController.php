<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Customer::paginate(10);
    }

    public function customer_dropdown()
    {
        $resources =  Customer::all();
        $response = [];

        foreach ($resources as $resource) {
            $data = [
                'id' => $resource->id,
                'value' => $resource->id,
                'label' => explode(" ", $resource->name,)[0],
            ];
            array_push($response, $data);
        };

        return $response;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:customers',
        ]);

        $data = [
            'name' => $request->name,
            'address' => $request->address,
            'contact_1' => $request->contact1,
            'contact_2' => $request->contact2
        ];

        Customer::create($data);

        return response()->json([
            'message' => "Data Pelanggan Berhasil Ditambahkan"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return $customer;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $customer->name = $request->name;
        $customer->address = $request->address;
        $customer->contact_1 = $request->contact1;
        $customer->contact_2 = $request->contact2;
        $customer->save();

        return response()->json([
            'message' => "Data Pelanggan Berhasil Diedit"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return response()->json([
            'message' => "Data pelanggan berhasil dihapus"
        ]);
    }

    public function dataTable(Request $request)
    {
        return Customer::orderBy('id', 'ASC')
            ->paginate($request->length);
    }

    public function total_data()
    {
        return Customer::count();
    }
}
