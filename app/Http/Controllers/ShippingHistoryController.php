<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShippingHistoryController extends Controller
{
    public function index()
    {
        return view('shipping-history.index');
    }
}
