@extends('main')
@section('content')
<section class="Tuan-car p-to-top">
    <div class="container">
        <div class="car-text">
            <h1><u>GIỎ HÀNG </u></h1>
        </div>
        <div class="car-conten">
            <div class="car-conten-left">
                <h3>CHI TIẾT ĐƠN HÀNG </h3>
                <div class="car-conten-left-detail">
                    <table>
                        <thead>
                            <tr>
                                <th>Ảnh</th>
                                <th>Sản phẩm</th>
                                <th>Thành tiền</th>
                                <th>Thao tác </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $total = 0; @endphp
                            @foreach ($products as $product)
                                @php
                                    $price = (float) str_replace(',', '', $product->price);
                                    $total += $price;
                                @endphp
                                <tr>
                                    <td><img style="width: 70px; height: 105px;" src="{{ asset($product->image) }}" alt=""></td>
                                    <td>
                                        <p class="sanpham">{{ $product->name }}</p>
                                        <p class="gia">{{ number_format($price, 0, '.', ',') }}<u>đ</u></p>
                                    </td>
                                    <td><p>{{ number_format($price, 0, '.', ',') }}<sup>đ</sup></p></td>
                                    <td>
                                        <form action="{{ url('/cart/remove') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <button type="submit">Xóa</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="1"></td>
                                <td><strong>Tổng tiền:</strong></td>
                                <td><strong>{{ number_format($total, 0, '.', ',') }}<sup>đ</sup></strong></td>
                            </tr>
                        </tfoot>
                    </table>
                    <br>
                    <a href="/sanpham/1"><button> Tiếp tục mua hàng </button></a>
                  
                </div>
            </div>
            
            <!-- Form gửi đơn hàng nằm riêng biệt -->
            <div class="car-conten-right">
                <h3>THÔNG TIN GIAO HÀNG </h3>
                <form action="/cart/send" method="POST">
                    @csrf
                    @foreach ($products as $product)
                        <input type="hidden" name="product_ids[]" value="{{ $product->id }}">
                    @endforeach

                    <div class="car-conten-right-input-name-phone">
                        <input type="text" placeholder="Tên" name="name" id="">
                        <input type="text" placeholder="Điện thoại" name="phone" id="">
                    </div>
                    <div class="car-conten-right-input-email">
                        <input type="text" placeholder="Email" name="email" id="">
                    </div>
                    <div class="car-conten-right-select">
                        <select name="city" id="city">
                            <option value="">Tỉnh/thành</option>
                        </select>
                        <select name="district" id="district">
                            <option value="">Quận/huyện</option>
                        </select>
                        <select name="ward" id="ward">
                            <option value="">Phường/xã</option>
                        </select>
                    </div>
                    <div class="car-conten-right-input-adress">
                        <input type="text" placeholder="Địa chỉ" name="address" id="">
                    </div>
                    <div class="car-conten-right-input-note">
                        <input type="text" placeholder="Ghi chú" name="note" id="">
                    </div>
                    <button class="main-btn">Gửi đơn hàng</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@section('footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script src="{{ asset('frontend/js/apiprovince.js') }}"></script>
<script src="{{ asset('frontend/js/giohang.js') }}"></script>
<link rel="stylesheet" href="{{ asset('frontend/css/giohang.css') }}">
@endsection
