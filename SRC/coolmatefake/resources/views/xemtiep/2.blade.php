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
        <h2>PHÒNG NGỦ CHO TÍN ĐỒ CỦA SẮC HOA LAVENDER</h2>
        <i class="fa-regular fa-calendar"></i><font style="margin-left: 10px ;">11/06/2024</font>
        <i class="fa-regular fa-newspaper" style="margin-left: 40px ;"></i><font style="margin-left: 10px ;">Tin tức</font>
        <p>
            Sắc tím nhẹ nhàng của loài hoa Lavender không biết đã đốn đổ biết bao trái tim và giờ đây nó còn giúp cho 
            không gian phòng ngủ thêm phần lôi cuốn. <br><br>
            Có thể nói phòng ngủ chính là không gian ghi đậm cá tính, sở thích của mỗi chủ nhân nhất. Người thích phong cách nhẹ 
            nhàng, nữ thích, người lại thích sự xa hoa, sang trọng. Và dù với phong cách yêu thích nào đi nữa thì bạn đều có quyền 
            quyết định cho không gian riêng tư của bản thân.  <br><br>
            Với mỗi tín đồ của sắc hoa Lavender, không gì có thể tuyệt hơn là được lựa chọn sắc tím yêu thích cho không gian này. 
            Thường thì, sắc tím nhạt luôn mang đến cảm giác thư thái, dễ chịu vậy nên đây cũng là một gam màu nổi bật trong danh sách 
            những gam màu ý tưởng dành cho phòng ngủ.
        </p><br><br>
        @foreach ($products_xemtiep2 as $product)
        <img src="{{asset($product -> image)}}" alt=""><br>
        <p>
        {{$product -> name}}
        </p><br><br>
        @endforeach  
        
      
        
    </div>
</div>
<link rel="stylesheet" href="{{asset('frontend/css/xemtiep.css')}}">
@endsection