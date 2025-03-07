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
        <i class="fa-regular fa-calendar"></i><font style="margin-left: 10px ;">12/06/2024</font>
        <i class="fa-regular fa-newspaper" style="margin-left: 40px ;"></i><font style="margin-left: 10px ;">Tin tức</font>
        <p>
            Một căn bếp diện tích nhỏ hẹp sẽ gây khó khăn trong việc sắp xếp đồ đạc và sử dụng. Tuy nhiên nếu biết 11 cách 
            sắp xếp dưới đây thì căn bếp nhỏ sẽ không còn nỗi phiền muộn nữa. <br><br>
            Căn bếp có lẽ là không gian chứa nhiều đồ lặt vặt nhất trong một căn nhà. Đặc biệt với những người mê nấu nướng 
            thì đồ dùng còn nhiều hơn gấp bội. Nhưng có một thực tế là không phải ai cũng có may mắn sở hữu một căn bếp rộng 
            rãi để có nơi cất giữ tất cả những dụng cụ bếp cần cho việc nội trợ. <br><br>
            Nhưng, như bạn biết đấy, các dụng cụ bếp với nhiều hình dạng và kích cỡ khác nhau vẫn cần những giải pháp lưu trữ 
            gọn gàng và tiện ích. Đừng vì những lời phản đối "mua về biết để đâu?" làm bạn nhụt chí mua sắm những dụng cụ bếp 
            tiện ích nhé! Cứ mua đi, chúng tôi sẽ chỉ cho bạn những cách lưu trữ, sắp xếp vô cùng gọn gàng cho một căn bếp nhỏ 
            mà có khi đến bản thân bạn cũng chưa từng nghĩ đến!
        </p><br><br>
        @foreach ($products_xemtiep1 as $product)
        <img src="{{asset($product -> image)}}" alt=""><br>
        <p>
        {{$product -> name}}
        </p><br><br>
        @endforeach  
        
       
       
        
    </div>
</div>
<link rel="stylesheet" href="{{asset('frontend/css/xemtiep.css')}}">
@endsection