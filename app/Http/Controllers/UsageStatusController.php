<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsageStatusController extends Controller
{
    public function index()
    {
        return view('payments.usage-status.index');
    }
}
