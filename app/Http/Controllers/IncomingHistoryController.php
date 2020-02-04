<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncomingHistoryController extends Controller
{
    public function index()
    {
        return view('inventory.incoming-history.index');
    }
}
