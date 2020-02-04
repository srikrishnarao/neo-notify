<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentsHistoryController extends Controller
{
    public function index()
    {
        return view('payments.payments-history.index');
    }
}
