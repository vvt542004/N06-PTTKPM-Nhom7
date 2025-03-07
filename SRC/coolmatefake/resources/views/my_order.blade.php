@extends('main')
@section('content')
<section class="Tuan-order-my ">
    <div class="order-my-text">
        <h1 style="color: #f7bf4e;"><u>Đơn Hàng</u></h1>
    </div>
    <div class="order-my-conten">
            <div class="car-conten-left-detail">
                <table>
                    <thead>
                        <tr>
                            <th>name</th>
                            <th>Địa chỉ </th>
                            <th>Phương thức thanh toán  </th>
                            <th>Ngày đặt hàng  </th>
                            <th>Trạng thái</th>
                            <th>Thao tác </th>
                        </tr>
                    </thead>
                    <tbody>
                    @php $total = 0; @endphp
                    @foreach($orders as $order)
                   
                        <tr>
                            <td><p>{{$order -> name }}</p></td>
                            <td><p>{{$order -> address}},{{$order -> city}},{{$order -> district}},{{$order -> ward}}</p></td>
                            <td><p>Thanh toán bằng tiền mặt </p> </td>
                            <td><p>{{$order -> created_at}}</p></td>
                            <td><p>Đã xác nhận </p></td>
                            <td><p>Hủy </p></td>

                        </tr>
                        @endforeach
                     

                    </tbody>
                </table>
                <br>
            </div>
        </div>
<button><a href="/sanpham/1" style="font-style: italic;" > Tiếp tục mua hàng </a> </button>
</section>
@endsection                        
            

<link rel="stylesheet" href="{{asset('frontend/css/BTL.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/ordermy.css')}}">
