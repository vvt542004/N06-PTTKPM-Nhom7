<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\order;
use App\Notifications\EmailNotification;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Arr;
use Illuminate\Support\Str; 
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
    public function index()
    {
        $products_right = product::where('category', 'right')->take(4)->orderBy('id')->get();
        $products_right1 = product::where('category', 'right1')->take(4)->orderBy('id')->get();
        $products_right2 = product::where('category', 'right2')->take(4)->orderBy('id')->get();
        $products_right3 = product::where('category', 'right3')->take(4)->orderBy('id')->get();
        $products_logo = product::where('category', 'logo')->take(1)->orderBy('id')->get();
        $products_slidefirst = product::where('category', 'slidefirst')->take(1)->orderBy('id')->get();
        $products_slide = product::where('category', 'slide')->take(2)->orderBy('id')->get();
        $products_banner1 = product::where('category', 'banner1')->take(1)->orderBy('id')->get();
        $products_banner2 = product::where('category', 'banner2')->take(1)->orderBy('id')->get();
        $products_end = product::where('category', 'end')->take(2)->orderBy('id')->get();

        return view('home', compact(
            'products_right', 'products_right1', 'products_right2', 'products_right3',
            'products_logo', 'products_slidefirst', 'products_slide',
            'products_banner1', 'products_banner2', 'products_end'
        ));
    }

    public function confirm()
    {
        $products_right = product::where('category', 'right')->take(4)->orderBy('id')->get();
        $products_right1 = product::where('category', 'right1')->take(4)->orderBy('id')->get();
        $products_logo = product::where('category', 'logo')->take(1)->orderBy('id')->get();
        $products_orderend = product::where('category', 'orderend')->take(2)->orderBy('id')->get();
        $customer_name = session()->get('customer_name', 'Khách hàng');

        return view('order.confirm', compact(
            'products_right', 'products_right1', 'products_logo',
            'products_orderend', 'customer_name'
        ));
    }

    public function success()
    {
        $products_right = product::where('category', 'right')->take(4)->orderBy('id')->get();
        $products_right1 = product::where('category', 'right1')->take(4)->orderBy('id')->get();
        $products_logo = product::where('category', 'logo')->take(1)->orderBy('id')->get();
        $products_orderend = product::where('category', 'orderend')->take(2)->orderBy('id')->get();
        $customer_name = session()->get('customer_name', 'Khách hàng');

        return view('order.success', compact(
            'products_right', 'products_right1', 'products_logo',
            'products_orderend', 'customer_name'
        ));
    }

    // Sanpham
    public function show_sp()
    {
        $products_sp = product::where('category', 'sanpham1')->take(9)->orderBy('id')->get();
        $products_sp_container = product::where('category', 'container')->take(4)->orderBy('id')->get();
        $products_logo = product::where('category', 'logo')->take(1)->orderBy('id')->get();

        return view('sanpham.1', compact('products_sp', 'products_sp_container', 'products_logo'));
    }

    public function show_sp1()
    {
        $products_sp1 = product::where('category', 'sanpham2')->take(9)->orderBy('id')->get();
        $products_sp_container = product::where('category', 'container')->take(4)->orderBy('id')->get();
        $products_logo = product::where('category', 'logo')->take(1)->orderBy('id')->get();

        return view('sanpham.2', compact('products_sp1', 'products_sp_container', 'products_logo'));
    }

    public function show_sp2()
    {
        $products_sp2 = product::where('category', 'sanpham3')->take(6)->orderBy('id')->get();
        $products_sp_container = product::where('category', 'container')->take(4)->orderBy('id')->get();
        $products_logo = product::where('category', 'logo')->take(1)->orderBy('id')->get();

        return view('sanpham.3', compact('products_sp2', 'products_sp_container', 'products_logo'));
    }

    // Noithat
    public function show_phongkhach()
    {
        $products_pk = product::where('category', 'phongkhach')->take(9)->orderBy('id')->get();
        $products_sp_container = product::where('category', 'container')->take(4)->orderBy('id')->get();
        $products_logo = product::where('category', 'logo')->take(1)->orderBy('id')->get();

        return view('noithat.phongkhach', compact('products_pk', 'products_sp_container', 'products_logo'));
    }

    public function show_phongbep()
    {
        $products_pb = product::where('category', 'phongbep')->take(9)->orderBy('id')->get();
        $products_sp_container = product::where('category', 'container')->take(4)->orderBy('id')->get();
        $products_logo = product::where('category', 'logo')->take(1)->orderBy('id')->get();

        return view('noithat.phongbep', compact('products_pb', 'products_sp_container', 'products_logo'));
    }

    public function show_phongngu()
    {
        $products_pn = product::where('category', 'phongngu')->take(9)->orderBy('id')->get();
        $products_sp_container = product::where('category', 'container')->take(4)->orderBy('id')->get();
        $products_logo = product::where('category', 'logo')->take(1)->orderBy('id')->get();

        return view('noithat.phongngu', compact('products_pn', 'products_sp_container', 'products_logo'));
    }

    public function show_vanphong()
    {
        $products_vp = product::where('category', 'vanphong')->take(9)->orderBy('id')->get();
        $products_sp_container = product::where('category', 'container')->take(4)->orderBy('id')->get();
        $products_logo = product::where('category', 'logo')->take(1)->orderBy('id')->get();

        return view('noithat.vanphong', compact('products_vp', 'products_sp_container', 'products_logo'));
    }

    public function show_trangtri()
    {
        $products_tt = product::where('category', 'trangtri')->take(9)->orderBy('id')->get();
        $products_sp_container = product::where('category', 'container')->take(4)->orderBy('id')->get();
        $products_logo = product::where('category', 'logo')->take(1)->orderBy('id')->get();

        return view('noithat.trangtri', compact('products_tt', 'products_sp_container', 'products_logo'));
    }

    // Blog
    public function show_blog()
    {
        $products_logo = product::where('category', 'logo')->take(1)->orderBy('id')->get();
        $products_blogg = product::where('category', 'blog')->take(5)->orderBy('id')->get();
        $products_blogg1 = product::where('category', 'blog1')->take(1)->orderBy('id')->get();
        $products_blogg2 = product::where('category', 'blog2')->take(1)->orderBy('id')->get();
        $products_blogg3 = product::where('category', 'blog3')->take(1)->orderBy('id')->get();
        $products_blogg4 = product::where('category', 'blog4')->take(1)->orderBy('id')->get();

        return view('blog.1', compact(
            'products_logo', 'products_blogg', 'products_blogg1',
            'products_blogg2', 'products_blogg3', 'products_blogg4'
        ));
    }

    public function show_blog1()
    {
        $products_logo = product::where('category', 'logo')->take(1)->orderBy('id')->get();
        $products_blogg = product::where('category', 'blog')->take(5)->orderBy('id')->get();
        $products_blogg5 = product::where('category', 'blog5')->take(1)->orderBy('id')->get();
        $products_blogg6 = product::where('category', 'blog6')->take(1)->orderBy('id')->get();
        $products_blogg7 = product::where('category', 'blog7')->take(1)->orderBy('id')->get();
        $products_blogg8 = product::where('category', 'blog8')->take(1)->orderBy('id')->get();

        return view('blog.2', compact(
            'products_logo', 'products_blogg', 'products_blogg5',
            'products_blogg6', 'products_blogg7', 'products_blogg8'
        ));
    }

    public function show_blog2()
    {
        $products_logo = product::where('category', 'logo')->take(1)->orderBy('id')->get();
        $products_blogg = product::where('category', 'blog')->take(5)->orderBy('id')->get();
        $products_blogg8 = product::where('category', 'blog8')->take(1)->orderBy('id')->get();
        $products_blogg9 = product::where('category', 'blog9')->take(1)->orderBy('id')->get();

        return view('blog.3', compact(
            'products_logo', 'products_blogg', 'products_blogg8', 'products_blogg9'
        ));
    }

    // Gioithieu
    public function show_gioithieu()
    {
        $products_logo = product::where('category', 'logo')->take(1)->orderBy('id')->get();

        return view('gioithieu', compact('products_logo'));
    }

    // Lienhe
    public function show_lienhe()
    {
        $products_logo = product::where('category', 'logo')->take(1)->orderBy('id')->get();
        $products_vitri = product::where('category', 'vitri')->take(1)->orderBy('id')->get();

        return view('lienhe', compact('products_logo', 'products_vitri'));
    }

    // Xemtiep
    public function show_xemtiep1()
    {
        $products_logo = product::where('category', 'logo')->take(1)->orderBy('id')->get();
        $products_blogg = product::where('category', 'blog')->take(5)->orderBy('id')->get();
        $products_xemtiep1 = product::where('category', 'xemtiep1')->take(3)->orderBy('id')->get();

        return view('xemtiep.1', compact('products_logo', 'products_blogg', 'products_xemtiep1'));
    }

    public function show_xemtiep2()
    {
        $products_logo = product::where('category', 'logo')->take(1)->orderBy('id')->get();
        $products_blogg = product::where('category', 'blog')->take(5)->orderBy('id')->get();
        $products_xemtiep2 = product::where('category', 'xemtiep2')->take(3)->orderBy('id')->get();

        return view('xemtiep.2', compact('products_logo', 'products_blogg', 'products_xemtiep2'));
    }

    public function show_xemtiep3()
    {
        $products_logo = product::where('category', 'logo')->take(1)->orderBy('id')->get();
        $products_blogg = product::where('category', 'blog')->take(5)->orderBy('id')->get();
        $products_xemtiep3 = product::where('category', 'xemtiep3')->take(3)->orderBy('id')->get();

        return view('xemtiep.3', compact('products_logo', 'products_blogg', 'products_xemtiep3'));
    }

    public function show_xemtiep4()
    {
        $products_logo = product::where('category', 'logo')->take(1)->orderBy('id')->get();
        $products_blogg = product::where('category', 'blog')->take(5)->orderBy('id')->get();
        $products_xemtiep4 = product::where('category', 'xemtiep4')->take(3)->orderBy('id')->get();

        return view('xemtiep.4', compact('products_logo', 'products_blogg', 'products_xemtiep4'));
    }
   
// gio hang
public function show_giohang(){
    $products_logo = product::where('category', 'logo')->take(1)->orderBy('id')->get();
    $giohang = Session::get('giohang');
    $product_id = array_keys($giohang);
    $products = product::whereIn('id', $product_id) -> get();
    
    // $products = product::all();
    return view('giohang', [
        // 'products' => $products            
        'products_logo' => $products_logo,
        'products' => $products,
        

    ]);  
}
public function add_cart(Request $request) {
    $product_id = $request->product_id;
    $giohang = Session::get('giohang', []);

    if (!isset($giohang[$product_id])) {
        $product = Product::find($product_id);
        if ($product) {
            // Đảm bảo giá trị giá trong session là số
            $price = str_replace(',', '', $product->price);
            $giohang[$product_id] = [
                'id' => $product->id,
                'name' => $product->name,
                'price' => $price, 
                'image' => $product->image
            ];
        }
    }

    Session::put('giohang', $giohang);
    return redirect('/giohang')->with('success', 'Sản phẩm đã được thêm vào giỏ hàng');
}

public function remove_cart(Request $request) {
    $product_id = $request->product_id;
    $giohang = Session::get('giohang', []);

    if (isset($giohang[$product_id])) {
        unset($giohang[$product_id]);
        Session::put('giohang', $giohang);
        return redirect('/giohang')->with('success', 'Sản phẩm đã được xóa khỏi giỏ hàng');
    }

    return redirect('/giohang')->with('error', 'Không thể xóa sản phẩm khỏi giỏ hàng');
}



public function send_cart(Request $request){
    $token = Str::random(12);
    $order = new order;
    $order -> name = $request -> input('name');
    $order -> phone = $request -> input('phone');
    $order -> email = $request -> input('email');
    $order -> city = $request -> input('city');
    $order -> district = $request -> input('district');
    $order -> ward = $request -> input('ward');
    $order -> address = $request -> input('address');
    $order -> note = $request -> input('note');
    $order_detail = json_encode($request->input('product_ids'));

    $order -> order_detail = $order_detail;
    $order -> token =  $token;
    $order -> save();
    Session::flush('giohang');

    // Lưu tên khách hàng vào session
    session()->put('customer_name', $order->name);

    // Gửi mail xác nhận
    $mailifor = $order -> email;
    $nameifor = $order -> name;
    Mail::to($mailifor)->send(new TestMail($nameifor));
    Notification::send($order, new EmailNotification($order));

    return redirect('/order/success');
}


}
