<?php
namespace App\Exports;
 
use App\ProductsExport;
use Maatwebsite\Excel\Concerns\FromCollection;
 
class SiswaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ProductsExport::all();
    }
}