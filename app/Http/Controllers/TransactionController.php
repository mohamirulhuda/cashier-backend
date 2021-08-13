<?php

namespace App\Http\Controllers;

use App\Models\Commodity\Commodity;
use App\Models\Transaction\{
    Transaction,
    TransactionDetail,
    TransactionSale
};
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TransactionController extends Controller
{
    //

    public function transaction_code($code = "", $date = "", $count = 0)
    {
        $result = strval($code . date("ymd", strtotime($date)) . sprintf("%03d", $count));
        return $result;
    }

    public function save_transaction($transaction_code, $type = 1, $data = [])
    {
        $date = Carbon::now('Asia/Jakarta');
        Transaction::create([
            'code' => $transaction_code,
            'transaction_type_id' => $type,
            'date' => $data['date'] ?? $date->format('YYMMDD'),
            'user_id' => $data['user'],
            'note' => $data["note"] ?? ""
        ]);
    }

    public function save_detail_transactions($transaction_code, $data = [])
    {
        $details = $data;
        $data_detail = [];

        foreach ($details as $detail) {

            switch (substr($transaction_code, 0, 2)) {
                case 'TJ':
                    $status = 'out';
                    $type = "Sold";
                    $lastStock = ($detail["limit"] ?? $detail["stock"]) - $detail["count"];
                    break;
                case 'TR':
                    $status = 'in';
                    $type = "Restock";
                    $lastStock = ($detail["limit"] ?? $detail["stock"]) + $detail["count"];
                    break;
                case 'SO':
                    $type = "Stock Opname";
                    if ($detail["stock"] < $detail["newStock"]) {
                        $status = "in";
                        $detail["count"] = $detail["in"];
                    } else {
                        $status = "out";
                        $detail["count"] = $detail["out"];
                    }
                    $lastStock = $detail["newStock"];
                    break;
                default:
                    return 0;
                    break;
            }

            $dummy = [
                'transaction_code' => $transaction_code,
                'commodity_id' => $detail["id"],
                'first_stock' => $detail["limit"] ?? $detail["stock"],
                'in' => $status == "in" ? $detail["count"] : 0,
                'out' => $status == "out" ? $detail["count"] : 0,
                'last_stock' => $lastStock,
                'note' => $type,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
            array_push($data_detail, $dummy);
        };

        TransactionDetail::insert($data_detail);
    }

    public function update_stock_item($data = [])
    {
        foreach ($data as $item) {
            Commodity::where('id', $item["id"])
                ->update([
                    'stock' => $item["limit"] - $item["count"]
                ]);
        };
    }

    public function checkout(Request $request)
    {

        $data = $request->validate([
            'user' => 'required',
            'name' => '',
            'isMember' => 'required',
            'discount' => 'required|integer',
            'date' => 'required',
            'cash' => 'required|integer',
            'checkoutCart' => 'required',
            'cost' => 'required|integer',
        ]);

        $make_date = date("ymd", strtotime($data["date"]));
        $countTrans = TransactionSale::where('transaction_code', "LIKE", "%TJ-" . $make_date . "%")
            ->count() + 1;

        $transaction_code = $this->transaction_code("TJ-", $data["date"], $countTrans);

        TransactionSale::create([
            'transaction_code' => $transaction_code,
            'customer_id' => $data["isMember"] ? $data["name"] : null,
            'non_customer' => !$data["isMember"] ? $data["name"] : null,
            'cost' => $data["cost"],
            'discount' => $data["discount"],
            'debt' => $data["cost"] - $data["cash"] < 0 && $data["cost"] - $data["cash"],
            'cash' => $data["cash"],
        ]);

        $this->save_transaction($transaction_code,1,  $data);
        $this->save_detail_transactions($transaction_code, $data["checkoutCart"]);
        $this->update_stock_item($data["checkoutCart"]);

        return response()->json([
            'message' => "Transaksi Berhasil"
        ]);
    }

    public function item_restock(Request $request,  $id)
    {
        $count = Transaction::where('date', Carbon::now()->format('Y-m-d'))
            ->where('transaction_type_id', 2)
            ->count() + 1;
        $transaction_code = $this->transaction_code("TR-", Carbon::now('Asia/Jakarta')->format("Y-m-d"), $count);

        $commodity = Commodity::find($id);
        $commodity->stock = $request["data"]["stock"] + $request["stock"];
        $commodity->save();

        $data = $request["data"];
        $data["count"] = $request["stock"];
        $this->save_transaction($transaction_code, 2, $data);
        $this->save_detail_transactions($transaction_code, [$data]);
    }

    public function stock_opname(Request $request)
    {
        $data = $request->validate([
            'id' => 'required',
            'code' => 'required',
            'stock' => 'required',
            'in' => 'required',
            'out' => 'required',
            'newStock' => 'required',
            'updated' => 'required'
        ]);
        $storage = Storage::disk('local');
        $get_data = json_decode($storage->get('stock_opname.json'), true);
        $duplicate = array_search($data["id"], array_column($get_data, 'id'));
        $new_data = [];

        if (!$storage->exists('stock_opname.json')) {
            Storage::disk('local')->put('stock_opname.json', json_encode([$data]));
        } else {
            if ($duplicate) {
                $get_data[$duplicate] = $data;
                $new_data = $get_data;
            } else {
                $new_data = array_merge($get_data, [$data]);
            }
            Storage::disk('local')->put('stock_opname.json', json_encode($new_data));
        };

        return response()->json($new_data);
    }

    public function opname_temp()
    {
        $storage = Storage::disk('local');
        $data = [];

        if ($storage->exists('stock_opname.json')) {
            $data = json_decode($storage->get('stock_opname.json'));
        } else {
            $data = [
                "message" => "Not Found"
            ];
        }

        return response()->json($data);
    }

    public function opname_save(Request $request)
    {
        $count = Transaction::where('date', Carbon::now()->format('Y-m-d'))
            ->where('transaction_type_id', 3)
            ->count() + 1;
        $storage = Storage::disk('local');
        $get_opname_data = [];
        $message = [
            "message" => "Stock Opname Success!!"
        ];
        $request_send = $request;
        $date = Carbon::now('Asia/Jakarta');

        $transaction_code = $this->transaction_code("SO-", $date->format("Y-m-d"), $count);

        if ($storage->exists('stock_opname.json')) {
            $get_opname_data = json_decode($storage->get('stock_opname.json'), true);
            
            foreach ($get_opname_data as $data) {
                $item = Commodity::find($data["id"]);

                $item->stock = $data["newStock"];
                $item->save();
            }

            $request_send["date"] = $date->format("Y-m-d");
            $this->save_transaction($transaction_code, 3, $request_send);
            $this->save_detail_transactions($transaction_code, $get_opname_data);
            $storage->put('stock_opname.json', json_encode([]));
        } else {
            $message = [
                "message" => "Not Found"
            ];
        }


        return response()->json($message);
    }

    // SECTION DATA & INFO

    public function datatable(Request $request)
    {
        return TransactionSale::with('transaction', 'customer', 'transaction.user')->orderBy('id', 'DESC')
            ->paginate($request->length);
    }

    public function sale_count()
    {
        return Transaction::where('date', Carbon::now()->format("Y-m-d"))->count();
    }

    public function item_sold()
    {
        return TransactionDetail::where('transaction_code', 'LIKE', '%TJ-' . Carbon::today()->isoFormat('YYMMDD') . '%')
            ->sum('out');
    }

    public function best_seller()
    {
        return TransactionDetail::with('commodity:id,name')
            ->selectRaw('commodity_id, transaction_code, SUM(transaction_details.out) as total_sold')
            ->groupBy('commodity_id')
            ->having('transaction_code', 'LIKE', '%TJ-' . Carbon::today()->isoFormat('YYMMDD') . '%')
            ->orderByDesc('total_sold')
            ->limit(5)
            ->get();
    }

    public function graph()
    {
        $now = Carbon::now();
        $weekStartDate = $now::now()->add('-1', 'week')->format('Y-m-d');

        $res = DB::table('transactions')
            ->whereBetween('date', [$weekStartDate, $now])
            ->join('transaction_details', 'transactions.code', '=', 'transaction_details.transaction_code')
            ->select(
                'code',
                'out',
                'date',
                DB::raw('COUNT(transaction_details.out) as Terjual'),
                DB::raw('COUNT(DISTINCT transactions.code) as Transaksi'),
            )
            ->groupBy('date')
            ->get();

        return $res;
    }

    public function sales_report(Request $request)
    {
        $res = DB::table('transactions')
            ->join('transaction_details', 'transactions.code', '=', 'transaction_details.transaction_code')
            ->join('transaction_sales', 'transactions.code', '=', 'transaction_sales.transaction_code')
            ->select(
                'date',
                DB::raw('SUM(DISTINCT transaction_sales.cost - transaction_sales.discount) as income'),
                DB::raw('COUNT(transaction_details.out) as items_sold'),
                DB::raw('COUNT(DISTINCT transactions.code) as total_transaction'),
            )
            ->groupBy('date')
            ->paginate(10);

        return $res;
    }
}
