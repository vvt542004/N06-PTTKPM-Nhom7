<?php
use App\Http\Controllers\Admin\uploadController;
use App\Http\Controllers\Admin\productController;
use App\Http\Controllers\Admin\orderController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SeachController;
use App\Http\Controllers\MyorderController;
use Illuminate\Support\Facades\Route;

//Login
Route::get('/login', [LoginController::class, 'show_login'])->name('login');
Route::post('/check_login', [LoginController::class, 'check_login']);

// Nhóm route yêu cầu đăng nhập
Route::middleware('auth')->group(function () {
    // Trang admin
    Route::get('/admin', function () {
        return view('admin.home');
    })->name('admin');

    // Trang user
    Route::get('/home', [FrontendController::class, 'index']) ->name('user');; // Tạo view này sau
    
});
// frontend
Route::get('/', function () {
    return view('login');
});

//product
Route::post('/admin/product/add', [productController::class, 'insert_product']);
Route::get('/admin/product/create', [productController::class, 'add_product']);
Route::get('/admin/product/list', [productController::class, 'list_product']);

Route::get('/admin/product/delete',[productController::class, 'delete_product']);
Route::get('/admin/product/edit/{id}',[productController::class, 'edit_product']);
Route::post('/admin/product/edit/{id}',[productController::class, 'update_product']);

//order_product
Route::get('/admin/order/list', [orderController::class, 'list_order'])->name('order.list');
Route::get('/admin/order/detail/{order_detail}',[orderController::class, 'detail_order']);
Route::delete('/admin/order/delete/{id}', [orderController::class, 'delete_order'])->name('order.delete');



Route::get('/admin/product_edit', function () {
    return view('admin.order_product_edit');
});
//upload
// Route::post('/upload',[uploadController::class, 'uploadImage']);

Route::post('/uploads',[uploadController::class, 'uploadImages']);



//sanpham
Route::get('/sanpham/1', [FrontendController::class, 'show_sp']);
Route::get('/sanpham/2', [FrontendController::class, 'show_sp1']);
Route::get('/sanpham/3', [FrontendController::class, 'show_sp2']);

// Route::get('/sanpham/1', function() {return view('sanpham.1');});
// Route::get('/sanpham/2', function() {return view('sanpham.2');});
// Route::get('/sanpham/3', function() {return view('sanpham.3');});
//blog
Route::get('/blog/1', [FrontendController::class, 'show_blog']);
Route::get('/blog/2', [FrontendController::class, 'show_blog1']);
Route::get('/blog/3', [FrontendController::class, 'show_blog2']);
// Route::get('/blog/1', function() {return view('blog.1');});
// Route::get('/blog/2', function() {return view('blog.2');});
// Route::get('/blog/3', function() {return view('blog.3');});
//gioithieu'
Route::get('/gioithieu', [FrontendController::class, 'show_gioithieu']);
// Route::get('/gioithieu', function() {return view('gioithieu');});
//lienhe
Route::get('/lienhe', [FrontendController::class, 'show_lienhe']);
// Route::get('/lienhe', function() {return view('lienhe');});
//danhmucsanpham
Route::get('/noithat/phongkhach', [FrontendController::class, 'show_phongkhach']);
Route::get('/noithat/phongbep', [FrontendController::class, 'show_phongbep']);
Route::get('/noithat/phongngu', [FrontendController::class, 'show_phongngu']);
Route::get('/noithat/vanphong', [FrontendController::class, 'show_vanphong']);
Route::get('/noithat/trangtri', [FrontendController::class, 'show_trangtri']);
// Route::get('/noithat/phongbep', function() {return view('noithat.phongbep');});
// Route::get('/noithat/phongkhach', function() {return view('noithat.phongkhach');});
// Route::get('/noithat/phongngu', function() {return view('noithat.phongngu');});
// Route::get('/noithat/trangtri', function() {return view('noithat.trangtri');});
// Route::get('/noithat/vanphong', function() {return view('noithat.vanphong');});

// giohang
// Route::get('/giohang', function() {return view('giohang');});
Route::get('/giohang', [FrontendController::class, 'show_giohang']);
Route::post('/cart/add', [FrontendController::class, 'add_cart']);
Route::post('/cart/remove', [FrontendController::class, 'remove_cart']);
Route::post('/cart/send', [FrontendController::class, 'send_cart']);




//order
Route::get('/order/confirm', [FrontendController::class, 'confirm']);
Route::get('/order/success', [FrontendController::class, 'success']);


// Route::get('/order/success', function() {return view('order.success');});
// Route::get('/order/confirm', function() {return view('order.confirm');});

//continue
Route::get('/xemtiep/1', [FrontendController::class, 'show_xemtiep1']);
Route::get('/xemtiep/2', [FrontendController::class, 'show_xemtiep2']);
Route::get('/xemtiep/3', [FrontendController::class, 'show_xemtiep3']);
Route::get('/xemtiep/4', [FrontendController::class, 'show_xemtiep4']);
// Route::get('/xemtiep/1', function() {return view('xemtiep.1');});
// Route::get('/xemtiep/2', function() {return view('xemtiep.2');});
// Route::get('/xemtiep/3', function() {return view('xemtiep.3');});
// Route::get('/xemtiep/4', function() {return view('xemtiep.4');});

//Dangki,nhap
Route::get('/dangky', function() {return view('dangki');});
// Route::get('/login', function() {return view('login');});

//timkiem

Route::get('/timkiem', [SeachController::class, 'show_timkiem'])->name('search.show');
Route::get('/search', [SeachController::class, 'search_products'])->name('search.products');
// don hang cua my 


Route::get('/ordermy', [MyorderController::class, 'myorder']);
