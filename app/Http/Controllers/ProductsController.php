<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\CsvProductsExport;
use App\Imports\CsvProductsImport;
use App\Products;
use Maatwebsite\Excel\Facades\Excel;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::all();
        // display json
        // return $projects;
        return view('products.index', compact('products'));
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new CsvProductsExport, 'products.xlsx');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new CsvProductsImport,request()->file('file'));

        return back();
    }
}
