@extends('main')
@section('content')
<div class="menu">
        <ul>
            <li><a href="/">TRANG CHỦ</a></li>
            <li><a href="">BLOG - TIN TỨC</a></li>
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
                <h2>TIN TỨC</h2>
                <div class="blog_tin">
                @foreach ($products_blogg8 as $product)
                    <img src="{{asset($product -> image)}}" alt="">
                    @endforeach 
                    <div class="text_blog_tin">
                        <h2>Gỗ công nghiệp - Chất liệu sử dụng trong căn bếp</h2>
                        <i class="fa-regular fa-calendar"></i>
                        <font style="margin-left: 10px ;">12/06/2024</font>
                        <i class="fa-regular fa-newspaper" style="margin-left: 40px ;"></i>
                        <font style="margin-left: 10px ;">Tin tức</font>
                        <br><br>
                        Với chất liệu gỗ công nghiệp, giờ đây bạn đã có thể dễ dàng sở hữu trong gia đình mình
                        những căn bếp ấm cúng với vẻ ngoài hiện đại, đầy thu hút.Trong các chất liệu quen thuộc, có
                        lẽ...
                        <br><br>
                        <a href="/xemtiep/2" class="button">Xem tiếp</a>
                    </div>
                </div>
                <div class="blog_tin">
                @foreach ($products_blogg9 as $product)
                    <img src="{{asset($product -> image)}}" alt="">
                    @endforeach 
                    <div class="text_blog_tin">
                        <h2>Bài viết mẫu</h2>
                        <i class="fa-regular fa-calendar"></i>
                        <font style="margin-left: 10px ;">11/06/2024</font>
                        <i class="fa-regular fa-newspaper" style="margin-left: 40px ;"></i>
                        <font style="margin-left: 10px ;">Tin tức</font>
                        <br><br>
                        Đây là trang blog của cửa hàng. Bạn có thể dùng blog để
                        quảng bá sản phẩm mới, chia sẻ trải nghiệm của khách hàng, các mẹo mua hàng hoặc bất kì điều gì
                        bạn muốn chia sẻ.Làm thế nào...
                        <br><br>
                        <a href="/xemtiep/2" class="button">Xem tiếp</a>
                    </div>
                </div>
                <div style="width: 100%; height: 420px;"></div>
                <div class="trang">
                    <a href="/blog/2" class="page-link prev"> &lt; TRANG TRƯỚC </a>
                    <div class="trang1">
                        <center>
                            <a href="/blog/1" class="page-link">1</a>
                            <a href="/blog/2" class="page-link">2</a>
                            <a href="/blog/3" class="page-link">3</a>
                        </center>
                    </div>
                    <a href="/blog/3" class="page-link next"> TRANG SAU &gt; </a>
                </div>
            </div>
        </div>
        <link rel="stylesheet" href="{{asset('frontend/css/blog.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/BTL.css')}}">
@endsection