<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::select(['supplier_id', 'name'])->get();

        return view('supplier.index', compact('suppliers'));
    }

    public function show(Supplier $supplier)
    {
        $supplier = Supplier::with('contacts')->where('supplier_id', $supplier->supplier_id)->first();

        return response()->json($supplier->toArray());
    }
}
