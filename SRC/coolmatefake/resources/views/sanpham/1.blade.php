@extends('main')
@section('content')
<form action ="/cart/add" method= "post">
<div class="menu">
        <ul>
            <li><a href="/">Trang chủ</a></li>
            <li><a href="">Danh mục</a></li>
            <li><a href="">Tất cả sản phẩm</a></li>
        </ul>
</div>

<div class="body">
    <div class="lam-container-body-left">
        <div class="body-left">
            <p>DANH MỤC</p>
            <div class="menu-product">
                <ul>
                    <li><a href="">Nội thất phòng khách</a></li>
                    <li><a href="">Nội thất phòng ngủ</a></li>
                    <li><a href="">Nội thất văn phòng</a></li>
                    <li><a href="">Nội thất phòng bếp</a></li>
                    <li><a href="">Đồ trang trí</a></li>
                </ul>
            </div>
            @include('parts.slideshow-container')
        </div>
    </div>
    <div class="body-right">
        <div class="body-right-logo">
            <p>TẤT CẢ SẢN PHẨM</p>
            <div class="sapxep">
                <p>Sắp xếp theo:</p>
                <select name="xapxep" id="">
                    <option value="">Giá: Tăng dần</option>
                    <option value="">Giá: Giảm dần</option>
                    <option value="">Tên: A-Z</option>
                    <option value="">Tên: Z-A</option>
                    <option value="">Cũ nhất</option>
                    <option value="">Mới nhất</option>
                    <option value="">Bán chạy nhất</option>
                </select>
            </div>
        </div>
        <div class="product">
            <script src="{{asset('frontend/js/Lam-SanPham.js')}}"></script>
            @include('parts.body-right-item')  

            <div class="lam-trang">
                <p class="lam-SanPham-next">
                    <a href=""></a>
                </p>

                <div class="lam-SanPham-trang">
                    <p class="lam-trang1">1</p>
                    <a href="/sanpham/2">2</a>
                    <a href="/sanpham/3">3</a>
                </div>
                
                <p class="lam-SanPham-next">
                    <a href="/sanpham/2">Trang sau <i class="fa-solid fa-arrow-right"></i></a>
                </p>
            </div>
        </div>
    </div>
</div>
@csrf
</form>

    

<script src="{{asset('frontend/js/Lam-SanPham.js')}}"></script>
<link rel="stylesheet" href="{{asset('frontend/css/BTL.css')}}">

<link rel="stylesheet" href="{{asset('frontend/css/SanPham.css')}}">
@endsection