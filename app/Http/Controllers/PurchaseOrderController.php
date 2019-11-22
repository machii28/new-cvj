<?php

namespace App\Http\Controllers;

use App\Supplier;
use App\PurchaseOrder;
use App\PurchaseOrderItem;
use Illuminate\Http\Request;
use App\Http\Requests\PurchaseOrder\AddRequest;

class PurchaseOrderController extends Controller
{
    public function index()
    {
        $purchaseOrders = PurchaseOrder::with(['items'])->get();
        $suppliers = Supplier::select(['supplier_id', 'name'])->get();

        return view('orders.index', compact('purchaseOrders', 'suppliers'));
    }

    public function store(AddRequest $request)
    {
        dd($request->validated());

        $purchaseOrder = new PurchaseOrder($request->validated());
        $purchaseOrder->supplier()->associate($request->supplier_id);
        $purchaseOrder->save();
        
        foreach($request->get('items', []) as $item) {
            $item = new PurchaseOrderItem([
                'item' => $item->item,
                'rate' => $item->rate,
                'quantity' => $item->quantity
            ]);

            $item->purchaseOrder()->associate($purchaseOrder);
            $item->save();
        }

        return response()->json($purchaseOrder);
    }
}
