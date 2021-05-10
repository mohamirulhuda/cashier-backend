<?php

namespace App\Http\Controllers;

use App\Models\Commodity\{
    Commodity,
    CommodityType
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
        //
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
            'message' => 'Data berhasil dihapus'
        ]);
    }

    public function dataTable(Request $request)
    {
        return Commodity::with('commodityType', 'commodityUnit')
            ->orderBy($request->column, $request->sortType)
            ->paginate($request->length);
        // return Commodity::with('commodityType', 'commodityUnit')
        //     ->orderBy('id', 'asc')
        //     ->paginate(10);
    }
}
