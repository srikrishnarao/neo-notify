<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryProductsCheckController extends Controller
{
    public function index()
    {
        return view('inventory.inventory-products-check.index');
    }
}
