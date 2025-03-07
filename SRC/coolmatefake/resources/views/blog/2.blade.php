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
                @foreach ($products_blogg5 as $product)
                    <img src="{{asset($product -> image)}}" alt="">
                @endforeach 
                    <div class="text_blog_tin">
                        <h2>Chọn nội thất đẹp chỉ qua 4 bước đơn giản</h2>
                        <i class="fa-regular fa-calendar"></i><font style="margin-left: 10px ;">08/06/2024</font>
                        <i class="fa-regular fa-newspaper" style="margin-left: 40px ;"></i><font style="margin-left: 10px ;">Tin tức</font>
                        <br><br>
                        Lựa chọn nội thất đóng vai trò quan trọng trong việc hoàn thiện ngôi nhà để nâng cao chất lượng sống của các thành viên trong gia đình. 
                        Chúng không chỉ để trang trí mà còn phục vụ trực tiếp...
                        <br><br>
                        <a href="/xemtiep/1" class="button">Xem tiếp</a>
                    </div>
                </div>
                <div class="blog_tin">
                @foreach ($products_blogg6 as $product)
                    <img src="{{asset($product -> image)}}" alt="">
                    @endforeach 
                    <div class="text_blog_tin">
                        <h2>Những mẫu phòng khách vừa xanh vừa đẹp</h2>
                        <i class="fa-regular fa-calendar"></i><font style="margin-left: 10px ;">07/06/2024</font>
                        <i class="fa-regular fa-newspaper" style="margin-left: 40px ;"></i><font style="margin-left: 10px ;">Tin tức</font>
                        <br><br>
                        Cây cảnh là một lựa chọn không bao giờ vắng mặt trong danh sách những thứ cần mua cho căn phòng khách thân thiện, 
                        tràn đầy sức sống.Một sự thật hiển nhiên rằng cây xanh, cây cảnh luôn có sức...
                        <br><br>
                        <a href="/xemtiep/2" class="button">Xem tiếp</a>
                    </div>
                </div>
                <div class="blog_tin">
                @foreach ($products_blogg7 as $product)
                    <img src="{{asset($product -> image)}}" alt="">
                    @endforeach 
                    <div class="text_blog_tin">
                        <h2>Phòng ngủ đen trắng lựa chọn hàng đầu của giới trẻ</h2>
                        <i class="fa-regular fa-calendar"></i><font style="margin-left: 10px ;">06/06/2024</font>
                        <i class="fa-regular fa-newspaper" style="margin-left: 40px ;"></i><font style="margin-left: 10px ;">Tin tức</font>
                        <br><br>
                        Đơn giản nhưng hiện đại, mang đến cảm giác thoải mái khi dùng 
                        đó chính là lý do khiến kiểu phòng ngủ đen trắng lại được lòng các bạn trẻ đến vậy.Sự tối giản và thanh lịch của 2 gam...
                        <br><br>
                        <a href="/xemtiep/3" class="button">Xem tiếp</a>
                    </div>
                </div>
                <div class="blog_tin">
                @foreach ($products_blogg8 as $product)
                    <img src="{{asset($product -> image)}}" alt="">
                    @endforeach 
                    <div class="text_blog_tin">
                        <h2>Những khu vườn thẳng đứng tiết kiệm không gian</h2>
                        <i class="fa-regular fa-calendar"></i><font style="margin-left: 10px ;">05/06/2024</font>
                        <i class="fa-regular fa-newspaper" style="margin-left: 40px ;"></i><font style="margin-left: 10px ;">Tin tức</font>
                        <br><br>
                        Dưới đây là bộ sưu tập những ý tưởng sáng tạo để bạn tham khảo 
                        và thiết kế cho mình một khu vườn thẳng đứng thật ấn tượng.Sở hữu một khu vườn mini trong nhà đã là điều tuyệt vời,...
                        <br><br>
                        <a href="/xemtiep/4" class="button">Xem tiếp</a>
                    </div>
                </div>
                <div class="trang">
                    <a href="/blog/1" class="page-link prev" > &lt; TRANG TRƯỚC </a>
                    <div class="trang1">
                        <center>
                            <a href="/blog/1" class="page-link">1</a>
                            <a href="/blog/2" class="page-link">2</a>
                            <a href="/blog/3" class="page-link">3</a>
                        </center>
                    </div>
                    <a href="/blog/3" class="page-link next" > TRANG SAU &gt; </a>
                </div>
            </div>
        </div>
        <link rel="stylesheet" href="{{asset('frontend/css/blog.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/BTL.css')}}">
@endsection