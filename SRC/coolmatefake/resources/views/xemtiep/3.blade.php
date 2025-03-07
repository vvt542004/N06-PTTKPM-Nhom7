@extends('main')
@section('content')
<div class="menu">
    <ul>
        <li><a href="/">TRANG CHỦ</a></li>
        <li><a href="/blog/1">BLOG - TIN TỨC</a></li>
    </ul>
</div>
<div class="body">
    <div class="body-left">
        <h2> DANH MỤC BLOG</h2>
        <div class="boder"></div>
        <br>
        <div class="menu-product">
            <ul>
                <li><a href="">NỘI THẤT PHÒNG KHÁCH</a></li>
                <li><a href="">NỘI THẤT PHÒNG NGỦ</a></li>
                <li><a href="">NỘI THẤT VĂN PHÒNG</a></li>
                <li><a href="">NỘI THẤT PHÒNG BẾP</a></li>
                <li><a href="">ĐỒ TRANG TRÍ</a></li>
            </ul>
        </div>
        <h2>BÀI VIẾT MỚI NHẤT</h2>
        <div class="boder"></div>
        @include('parts.blog_tin_left')
    </div>
    <div class="body-right">
        <h2>BẾP NHỎ GỌN GÀNG VỚI CÁC CÁCH SẮP XẾP TIỆN ÍCH SAU</h2>
        <i class="fa-regular fa-calendar"></i><font style="margin-left: 10px ;">10/06/2024</font>
        <i class="fa-regular fa-newspaper" style="margin-left: 40px ;"></i><font style="margin-left: 10px ;">Tin tức</font>
        <p>
            Có thể bạn đã từng nghe mô tả về những tính năng hiện đại và cực kỳ tiện lợi của bếp từ. Nhưng những thông tin đấy 
            có bao nhiêu % là sự thật? Thực chất bếp từ có chức năng như thế nào? 
        </p><br><br>
        
        @foreach ($products_xemtiep3 as $product)
        <img src="{{asset($product -> image)}}" alt=""><br>
        <p>
        {{$product -> name}}
        </p><br><br>
        @endforeach 
    </div>
</div>
<link rel="stylesheet" href="{{asset('frontend/css/xemtiep.css')}}">
@endsection