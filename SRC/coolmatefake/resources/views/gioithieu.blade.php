@extends('main')
@section('content')
<div class="menu">
        <ul>
            <li><a href="/">TRANG CHỦ</a></li>
            <li><a href="/gioithieu">GIỚI THIỆU</a></li>
        </ul>
</div>
<div class="container">
    <h3>GIỚI THIỆU</h3>
    <pre  style="border-bottom: 1px solid #ebebeb ;"></pre>
    <P>
        <br>
        Chào mừng bạn đến với trang web bán hàng đồ nội thất của chúng tôi! Tại đây, chúng tôi tự hào mang đến 
        cho bạn những sản phẩm nội thất chất lượng cao, đa dạng về mẫu mã và phong cách. Dù bạn đang tìm kiếm một 
        chiếc ghế sofa êm ái, bàn ăn sang trọng, giường ngủ tiện nghi hay bất kỳ món đồ nội thất nào khác, trang web 
        của chúng tôi đều có thể đáp ứng nhu cầu của bạn. Chúng tôi cam kết cung cấp dịch vụ chăm sóc khách hàng tận 
        tâm, hỗ trợ bạn từ khâu lựa chọn sản phẩm đến giao hàng và lắp đặt tận nơi. Hãy khám phá và trải nghiệm mua sắm 
        nội thất tuyệt vời tại trang web của chúng tôi ngay hôm nay !
    </P>
</div>

<link rel="stylesheet" href="{{asset('frontend/css/gioithieu.css')}}">
@endsection