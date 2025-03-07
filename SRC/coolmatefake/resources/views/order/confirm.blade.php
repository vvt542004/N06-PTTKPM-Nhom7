@extends('main')
@section('content')
<section class="order-confirm p-to-top" style="margin-left: 100px;">
        <div class="order-text">
            <p>Xác nhận đơn hàng: <span style="font-weight: bold;">{{ $customer_name }}</span></p>
        </div>

        <div class="order-row-flex">
            <div class="order-confirm-content">
                <p>Đơn hàng của bạn đã được gửi <span style="font-weight: bold;">Thành công</span>! <br>
                <span style="font-size: small;">Vui lòng check <a href="/order/success"><span style="font-style: italic;"><b>Email</b></span></a> xác nhận đơn hàng </span></p>
                <button>Tiếp tục mua hàng </button>
            
        </div>

    </section>





        <div class="text" style="margin-left: 100px; color: #B99349;" >
            <p><b>Sản phẩm nổi bật </b></p>

        </div>

       
    <div class="conten">
    @include('parts.conten_right')
     </div>

     <div class="conten">
     @include('parts.conten_right1')
       
     </div>

     <div class="xemthem">
        <div class="them">
            <a href="">XEM THÊM</a>
        </div>
    </div>

     <div class="block_home">
     @foreach ($products_orderend as $product)
        <img src="{{asset($product -> image)}}" alt="">
     @endforeach 
     </div>
<link rel="stylesheet" href="{{asset('frontend/css/orderconfirm.css')}}">
<script src="{{asset('frontend/js/orderconfrim.js')}}"></script>
@endsection