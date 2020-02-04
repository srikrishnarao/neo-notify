<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OutgoingController extends Controller
{
    public function index()
    {
        return view('inventory.outgoing.index');
    }
}
