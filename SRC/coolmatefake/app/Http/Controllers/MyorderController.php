<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\order;
use App\Models\product;
class MyorderController extends Controller
{
    
    public function myorder()
    {
        $orders = order::all();
        $products_logo = product::where('category', 'logo')->take(1)->orderBy('id')->get();
        return view('my_order', compact(
             'products_logo', 'orders',
            
        ));
    }
    
}
