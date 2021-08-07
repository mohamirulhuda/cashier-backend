<?php

namespace App\Http\Controllers;

use App\Http\Resources\Dropdown\CommodityTypeResource;
use App\Models\Commodity\{
    Commodity,
    CommodityType,
    CommodityUnit
};
use Illuminate\Http\Request;

class CommodityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Commodity::withoutTrashed()
            ->with('commodityType', 'commodityUnit')
            ->get();
        // return CommodityType::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commodity  $commodity
     * @return \Illuminate\Http\Response
     */
    public function show(Commodity $commodity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Commodity  $commodity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commodity $commodity)
    {
        $commodity->name = $request->name;
        $commodity->type_id = $request->category;
        $commodity->sell_price = $request->price;
        // $commodity->stock = 10;
        $commodity->save();

        return response()->json([
            'message' => "Data Barang Berhasil Diedit"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commodity  $commodity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commodity $commodity)
    {
        $commodity->delete();
        return response()->json([
            'message' => 'Data barang berhasil dihapus'
        ]);
    }

    public function datatable(Request $request)
    {
        $result = Commodity::with('commodityType', 'commodityUnit');

        if ($request->search) {
            $result->where('code', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('name', 'LIKE', '%' . $request->search . '%');
        };

        $result->orderBy($request->column, $request->sortType);

        return $result->paginate($request->length);
        // return Commodity::with('commodityType', 'commodityUnit')
        //     ->orderBy($request->column, $request->sortType)
        //     ->paginate($request->length);
    }

    public function type()
    {
        $resources =  CommodityType::all();
        $response = [];

        foreach ($resources as $resource) {
            $data = [
                'id' => $resource->id,
                'value' => $resource->id,
                'label' => $resource->name,
            ];
            array_push($response, $data);
        };

        return $response;
    }

    public function unit()
    {
        $resources =  CommodityUnit::all();
        $response = [];

        foreach ($resources as $resource) {
            $data = [
                'id' => $resource->id,
                'value' => $resource->id,
                'label' => $resource->name,
            ];
            array_push($response, $data);
        };

        return $response;
    }
}
