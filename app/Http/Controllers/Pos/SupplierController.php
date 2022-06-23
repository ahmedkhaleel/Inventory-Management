<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use App\Models\supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function SupplierAll()
    {
        $suppliers = supplier::latest()->get();
        return view('dashboard.backend.supplier.supplier_all', compact('suppliers'));
    } // end of SupplierAll
}
