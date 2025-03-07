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
        <h2>Các kinh nghiệm dọn dẹp, sắp xếp đồ trong nhà</h2>
        <i class="fa-regular fa-calendar"></i><font style="margin-left: 10px ;">09/06/2024</font>
        <i class="fa-regular fa-newspaper" style="margin-left: 40px ;"></i><font style="margin-left: 10px ;">Tin tức</font>
        <p>
            Nhiều lúc bạn đã đầu tư công sức để dọn dẹp, sắp xếp đồ đạc nhưng ngôi nhà vẫn không gọn gàng, đẹp mắt? Nguyên 
            nhân có thể do bạn đã mắc 10 sai lầm nghiêm trọng dưới đây!<br><br>
            Không phải cứ cất hết đồ vào 1 chỗ là nhà cửa sẽ gọn đẹp đâu nhé vì còn cần có con mắt tinh tế và chút gu thẩm mỹ. 
            Đấy là lý do vì sao mà đôi khi bạn đã rất đầu tư cho nhà cửa nhưng vẫn thấy sao nhà mình không đẹp như nhà hàng xóm hay 
            như trên tạp chí. Đừng lo, chúng tôi sẽ chỉ ra những sai lầm của bạn khi sắp xếp đồ và tất nhiên sẽ bật mí cho bạn cả 
            cách để khắc phục.
        </p><br><br>
        @foreach ($products_xemtiep4 as $product)
        <img src="{{asset($product -> image)}}" alt=""><br>
        <p>
        {{$product -> name}}
        </p><br><br>
        @endforeach  
    
        
    </div>
</div>
<link rel="stylesheet" href="{{asset('frontend/css/xemtiep.css')}}">
@endsection