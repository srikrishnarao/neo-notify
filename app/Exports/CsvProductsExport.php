<?php

namespace App\Exports;
  
use App\Products;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
  
class CsvProductsExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // [id] => 1
        // [store_id] => 1
        // [shop_id] => 1
        // [product_maker_id] => 1
        // [product_jan_code] => 1
        // [product_name] => product 1
        // [product_furigana] => furigina 1
        // [product_english] => english 1
        // [product_release_date] => 2020-01-18
        // [product_quantity] => 1
        // [product_category_code] => AS
        // [product_price_excluding_tax] => 0.00
        // [product_price_including_tax] => 0.00
        // [product_image] => image
        // [product_internal_part_number] => 123
        // [product_jan_in_store] => 1
        // [product_status_id] => 1
        // [created_at] => 2020-01-18 03:32:48
        // [created_by] => 1
        // [updated_at] => 2020-01-18 03:32:48
        // [updated_by] => 1
        return Products::all();
    }
    
    public function headings(): array
    {
        return [
            'Product ID',            
            'Store ID',
            'Shop ID',
            'Maker ID',
            'Product JAN code',
            'Product name',
            'Furigana (Kanji Reading)',
            'English / Roman',
            'Release date',
            'input quantity',
            'Category name',
            'Price excluding tax',
            'Tax-included price',
            'Product image',
            'Internal part number',
            'In-store JAN',
            'Status ID',
            'Created By',
            'Created At',
            'Updated By',
            'Updated At',
        ];
    }
}