@extends('admin.main')
@section('content')
<div class="admin-all-content-main-content-order-list">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Ảnh</th>
                <th>TênSP</th>
                <th>Giá </th> 
                <th>Thành tiền</th>                                  
                <th>Thao tác </th>
            </tr>

        </thead>
        <tbody>
        @php $total = 0; @endphp           
        @foreach($products as $product)
        @php
            $price = (float) str_replace(',', '', $product->price);
            $total += $price;
        @endphp
            <tr>
                <td>{{$product -> id}}</td>
                <td><img style="width: 70px;" src="{{asset($product -> image)}}" alt=""></td>
                <td> {{$product -> name}}</td>
                <td>{{ number_format($price, 0, '.', ',') }}</td>
                <td>{{ number_format($price, 0, '.', ',') }}</td>                                     
                <td>
                    <a class= "delete-class" href="">Xóa</a>
                </td>
            </tr>
            @endforeach
            <tr>
                <td style="font-weight: 700;" colspan="4">Tổng cộng</td>
                <td><strong>{{ number_format($total, 0, '.', ',') }}<sup>đ</sup></strong></td>
            </tr>
            
        </tbody>
    </table>
</div>
                       

@endsection