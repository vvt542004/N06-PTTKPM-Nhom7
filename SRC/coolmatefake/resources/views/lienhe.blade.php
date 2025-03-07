@extends('main')
@section('content')
<div class="menu">
    <ul>
        <li><a href="/">TRANG CHỦ</a></li>
        <li><a href="/lienhe">LIÊN HỆ</a></li>
    </ul>
</div>

<div class="container">
        <h3>LIÊN HỆ</h3>
        @foreach ($products_vitri as $product)
        <img src="{{asset($product -> image)}}" alt="">
        @endforeach
        <div class="nhan_xet">
            <h3>Viết nhận xét </h3>
            <pre  style="border-bottom: 1px solid #ebebeb ;"></pre>
            Nếu bạn có thắc mắc gì, có thể gửi yêu cầu cho chúng tôi, và chúng tôi sẽ liên lạc lại với bạn sớm nhất có thể .
            <form action="">
                <input class="ten" type="text" placeholder="Tên của bạn">
                <input class="email" type="text" placeholder="Email của bạn">
                <textarea class="binh_luan" name="" id="" placeholder="Viết bình luận"></textarea>
                <button>Gửi liên hệ</button>
            </form>
        </div>
        <div class="lien_he">
            <h3>Chúng tôi ở đây</h3>
            <pre  style="border-bottom: 1px solid #ebebeb ;"></pre>
            <font>Fashion Style</font><br><br>
            Giải pháp bán hàng toàn diện từ website đến cửa hàng <br><br><br>
            <i class="fa-solid fa-location-dot"></i> 56 Vân côi, Phường 7, Quận Tân Bình, Tp. Hồ Chí Minh <br>
            <i class="fa-regular fa-envelope"></i> hi@dvlstore.com <br>
            <i class="fa-solid fa-phone-volume"></i> 1900.636.099
        </div>  
    </div>
    <link rel="stylesheet" href="{{asset('frontend/css/lienhe.css')}}">

@endsection