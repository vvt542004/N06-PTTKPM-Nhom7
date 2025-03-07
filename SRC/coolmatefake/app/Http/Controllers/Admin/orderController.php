<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\order;
use App\Models\product;

class orderController extends Controller
{
    public function list_order(){
        $orders = order::all();
        return view('admin.order.list',[
            'title' => 'Danh sách đơn hàng',
            'orders' =>  $orders
            
        ]);

    }
    public function detail_order(Request $request){
        $order_detail = json_decode($request -> order_detail,true);
        $product_id = $order_detail;
        $products = product::whereIn('id', $product_id) -> get();     
        return view('admin.order.detail',[
            'title' => 'Chi tiết đơn hàng',
            'products' => $products

        ]);

    } 
    
    public function delete_order($id)
{
    $order = Order::find($id);
    if (!$order) {
        return redirect()->route('order.list')->with('error', 'Đơn hàng không tồn tại.');
    }

    $order->delete();
    return redirect()->route('order.list')->with('success', 'Đơn hàng đã được xóa thành công.');
}    




}
