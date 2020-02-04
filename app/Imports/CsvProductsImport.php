<?php

namespace App\Imports;

use App\Products;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CsvProductsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        echo '<pre>';print_r($row);die;
        
        return new Products([
            'product_jan_code' =>  $row["product_jan_code"],
            'product_name' =>  $row["product_name"]
        ]);
    }
}