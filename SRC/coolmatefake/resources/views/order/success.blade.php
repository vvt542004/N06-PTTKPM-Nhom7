@extends('main')
@section('content')
<section class="order-confirm p-to-top" style="margin-left: 100px;">
        <div class="order-text">
            <p>Xác nhận đơn hàng: <span style="font-weight: bold;">{{ $customer_name }} </span></p>
        </div>
        <div class="order-row-flex">
            <div class="order-confirm-content">
                <p>Đơn hàng của bạn đã được xác nhận <span style="font-weight: bold;">Thành công</span>! <br>
                    <span style="font-size: small;">Chúng tôi sẽ <span style="font-style: italic;">Giao hàng </span>
                        trong thời gian sớm nhất </span>
                </p>
                <a href="/sanpham/1"><button>Tiếp tục mua hàng </button></a>
            </div>

        </div>

    </section>
    <div class="text" style="margin-left: 100px; color: #B99349;">
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
<script src="{{asset('frontend/js/orderconfrim.js')}}"></script>
<link rel="stylesheet" href="{{asset('frontend/css/orderconfirm.css')}}">
@endsection