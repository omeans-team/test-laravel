<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\Models\Product;
 
use App\Exports\ProductsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
 
class ProductsExportController extends Controller
{
	public function index()
	{
		$products = Product::all();
		return view('products',['products'=>$products]);
	}
 
	public function export_excel()
	{
		return Excel::download(new ProductsExport, 'products.xlsx');
	}
}