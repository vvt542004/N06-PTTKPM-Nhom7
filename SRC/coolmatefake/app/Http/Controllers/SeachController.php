<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\DB;
class SeachController extends Controller
{
    public function show_timkiem()
    {
        $products_sp = product::where('category', 'sanpham1')->take(9)->orderBy('id')->get();
        $products_sp_container = product::where('category', 'container')->take(4)->orderBy('id')->get();
        $products_logo = product::where('category', 'logo')->take(1)->orderBy('id')->get();

        return view('timkiem', compact('products_sp', 'products_sp_container', 'products_logo'));
    }

    public function search_products(Request $request)
{
    $query = $request->input('query');
    
    $products = product::where('name', 'LIKE', "%{$query}%")
                     ->orWhere('category', 'LIKE', "%{$query}%")
                     ->paginate(8);

    // Lấy các sản phẩm giống như trong show_timkiem
    $products_sp = product::where('category', 'sanpham1')->take(9)->orderBy('id')->get();
    $products_sp_container = product::where('category', 'container')->take(4)->orderBy('id')->get();
    $products_logo = product::where('category', 'logo')->take(1)->orderBy('id')->get();

    if ($request->ajax()) {
        // Chỉ trả về kết quả tìm kiếm (products) cho AJAX
        return view('parts.product_search_results', compact('products'))->render();
    }

    // Trả về view đầy đủ với tất cả các biến
    return view('timkiem', compact('products', 'products_sp', 'products_sp_container', 'products_logo'));
}
}
