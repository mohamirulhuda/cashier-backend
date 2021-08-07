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

class TransactionController extends Controller
{
    //

    public function transaction_code($code = "", $date = "", $count = 0)
    {
        $result = strval($code . date("ymd", strtotime($date)) . sprintf("%03d", $count));
        return $result;
    }

    public function save_transaction($transaction_code, $data = [])
    {
        Transaction::create([
            'code' => $transaction_code,
            'transaction_type_id' => 1,
            'date' => $data['date'],
            'user_id' => $data['user'],
            'note' => 'Test'
        ]);
    }

    public function save_detail_transactions($transaction_code, $data = [])
    {
        $details = $data;
        $data_detail = [];

        foreach ($details as $detail) {
            $dummy = [
                'transaction_code' => $transaction_code,
                'commodity_id' => $detail["id"],
                'first_stock' => $detail["limit"],
                'in' => 0,
                'out' => $detail["count"],
                'last_stock' => $detail["limit"] - $detail["count"],
                'note' => "Sold",
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
            'name' => 'required',
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

        $this->save_transaction($transaction_code, $data);
        $this->save_detail_transactions($transaction_code, $data["checkoutCart"]);
        $this->update_stock_item($data["checkoutCart"]);

        return response()->json([
            'message' => "Berhasil"
        ]);
    }

    // SECTION DATA & INFO

    public function datatable(Request $request)
    {
        return TransactionSale::with('transaction', 'customer', 'transaction.user')->orderBy($request->column, $request->sortType)
            ->paginate($request->length);
    }

    public function sale_count()
    {
        return TransactionSale::count();
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
}
