<?php

namespace App\Http\Controllers;

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
        $data = $request->validate([
            'name' => 'required|string',
            'type_id' => 'required',
            'unit_id' => 'required',
            'sell_price' => 'required',
            'stock' => '',
        ]);
        $code = array('code' => $this->items_code($data['type_id']));
        $insert = array_merge($code, $data);

        Commodity::create($insert);

        return response()->json([
            'message' => "Data Barang Berhasil Ditambahkan"
        ]);
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
        $commodity->unit_id = $request->unit_id;
        $commodity->sell_price = $request->sell_price;
        // $commodity->stock = $request->stock;
        if ($commodity->type_id != $request->type_id) {
            $commodity->code = $this->items_code($request->type_id);
        }
        $commodity->type_id = $request->type_id;

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

    // SECTION INFO & DATA

    public function items_code($type_id)
    {
        $res = "";
        $type = CommodityType::find($type_id);
        $item = Commodity::where('type_id', $type_id)->withTrashed();
        $count = $item->count() + 1;
        $res = strval($type->code . sprintf("%02d", $count));

        return $res;
    }

    public function datatable(Request $request)
    {
        $result = Commodity::with('commodityType', 'commodityUnit');
        // $result->orderBy('id', 'ASC');

        if ($request->search) {
            $result->where('code', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('name', 'LIKE', '%' . $request->search . '%')
                    ->orderBy('name', 'ASC');
        };


        return $result->paginate($request->length);
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
                'label' => $resource->desc,
            ];
            array_push($response, $data);
        };

        return $response;
    }
}
