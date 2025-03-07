@extends('admin.main')
@section('content')
<div class="admin-all-content-main-content-order-list">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Ghi chú</th>
                <th>Chi tiết</th>
                <th>Ngày</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>

        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{$order -> id}}</td>
                    <td>{{$order -> name}}</td>
                    <td>{{$order -> phone}}</td>
                    <td>{{$order -> email}} </td>
                    <td>{{$order -> address}},{{$order -> city}},{{$order -> district}},{{$order -> ward}}</td>
                    <td>{{$order -> note}}</td>
                    <td><a class="edit-class" href="/admin/order/detail/{{$order -> order_detail}}">Xem</a></td>
                    <td>{{$order -> created_at}}</td>
                    <td><a class="confirm-order-one" heft=""> Đã xác nhận </a></td>
                    <td>
                    <form action="{{ route('order.delete', $order->id) }}" method="POST" class="delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-class" onclick="return confirm('Bạn có chắc chắn muốn xóa đơn hàng này không?')">Xóa</button>
                    </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let deleteButtons = document.querySelectorAll(".delete-form");

        deleteButtons.forEach(form => {
            form.addEventListener("submit", function(event) {
                let confirmDelete = confirm("Bạn có chắc chắn muốn xóa đơn hàng này không?");
                if (!confirmDelete) {
                    event.preventDefault();
                }
            });
        });
    });
</script>
@endsection
