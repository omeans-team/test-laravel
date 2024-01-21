<?php
namespace App\Exports;
 
use App\Export;
use Maatwebsite\Excel\Concerns\FromCollection;
 
class ProductsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ProductsExport::all();
    }
}