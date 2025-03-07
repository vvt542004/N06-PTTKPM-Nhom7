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
                @foreach ($products_blogg1 as $product)
                    <img src="{{asset($product -> image)}}" alt="">
                    @endforeach 
                    <div class="text_blog_tin">
                        <h2>Bếp nhỏ gọn gàng với các cách sắp xếp tiện ích sau</h2>
                        <i class="fa-regular fa-calendar"></i>
                        <font style="margin-left: 10px ;">12/06/2024</font>
                        <i class="fa-regular fa-newspaper" style="margin-left: 40px ;"></i>
                        <font style="margin-left: 10px ;">Tin tức</font>
                        <br><br>
                        Một căn bếp diện tích nhỏ hẹp sẽ gây khó khăn trong việc sắp xếp đồ đạc và sử dụng.
                        Tuy nhiên nếu biết 11 cách sắp xếp dưới đây thì căn bếp nhỏ sẽ không còn nỗi phiền muộn...
                        <br><br>
                        <a href="/xemtiep/1" class="button">Xem tiếp</a>
                    </div>
                </div>
                <div class="blog_tin">
                @foreach ($products_blogg2 as $product)
                    <img src="{{asset($product -> image)}}" alt="">
                    @endforeach 
                    <div class="text_blog_tin">
                        <h2>Phòng ngủ cho tín đồ của sắc hoa Lavender</h2>
                        <i class="fa-regular fa-calendar"></i>
                        <font style="margin-left: 10px ;">11/06/2024</font>
                        <i class="fa-regular fa-newspaper" style="margin-left: 40px ;"></i>
                        <font style="margin-left: 10px ;">Tin tức</font>
                        <br><br>
                        Sắc tím nhẹ nhàng của loài hoa Lavender không biết đã đốn đổ biết bao trái tim và
                        giờ đây nó còn giúp cho không gian phòng ngủ thêm phần lôi cuốn.Có thể nói phòng ngủ chính là
                        không gian...
                        <br><br>
                        <a href="/xemtiep/2" class="button">Xem tiếp</a>
                    </div>
                </div>
                <div class="blog_tin">
                @foreach ($products_blogg3 as $product)
                    <img src="{{asset($product -> image)}}" alt="">
                    @endforeach 
                    <div class="text_blog_tin">
                        <h2>Sự thật về tính năng vượt trội của bếp từ</h2>
                        <i class="fa-regular fa-calendar"></i>
                        <font style="margin-left: 10px ;">10/06/2024</font>
                        <i class="fa-regular fa-newspaper" style="margin-left: 40px ;"></i>
                        <font style="margin-left: 10px ;">Tin tức</font>
                        <br><br>
                        Có thể bạn đã từng nghe mô tả về những tính năng hiện đại và cực kỳ tiện lợi của bếp từ.
                        Nhưng những thông tin đấy có bao nhiêu % là sự thật? Thực chất bếp từ có chức...
                        <br><br>
                        <a href="/xemtiep/3" class="button">Xem tiếp</a>
                    </div>
                </div>
                <div class="blog_tin">
                @foreach ($products_blogg4 as $product)
                    <img src="{{asset($product -> image)}}" alt="">
                    @endforeach 
                    <div class="text_blog_tin">
                        <h2>Các kinh nghiệm dọn dẹp, sắp xếp đồ trong nhà</h2>
                        <i class="fa-regular fa-calendar"></i>
                        <font style="margin-left: 10px ;">09/06/2024</font>
                        <i class="fa-regular fa-newspaper" style="margin-left: 40px ;"></i>
                        <font style="margin-left: 10px ;">Tin tức</font>
                        <br><br>
                        Nhiều lúc bạn đã đầu tư công sức để dọn dẹp, sắp xếp đồ đạc nhưng ngôi nhà vẫn không gọn gàng,
                        đẹp mắt?
                        Nguyên nhân có thể do bạn đã mắc 10 sai lầm nghiêm trọng dưới đây!Không phải...
                        <br><br>
                        <a href="/xemtiep/4" class="button">Xem tiếp</a>
                    </div>
                </div>
                <div class="trang">
                    <a href="/blog/1" class="page-link prev"> &lt; TRANG TRƯỚC </a>
                    <div class="trang1">
                        <center>
                            <a href="/blog/1" class="page-link">1</a>
                            <a href="/blog/2" class="page-link">2</a>
                            <a href="/blog/3" class="page-link">3</a>
                        </center>
                    </div>
                    <a href="/blog/2" class="page-link next"> TRANG SAU &gt; </a>
                </div>
            </div>
      
           
        </div>
        <link rel="stylesheet" href="{{asset('frontend/css/blog.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/BTL.css')}}">
        
@endsection