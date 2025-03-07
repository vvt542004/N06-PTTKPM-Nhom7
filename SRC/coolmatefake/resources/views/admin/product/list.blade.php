@extends('admin.main')
@section('content')
<div class="admin-all-content-main-content-prouct-list">
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Ảnh</th>
            <th>Tên sản phẩm</th>
            <th>Giá bán</th>
            <th>Ngày đăng</th>
            <th>Thao tác </th>
        </tr>

    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{$product -> id}}</td>
            <td><img style="width: 70px;" src="{{asset($product -> image)}}" alt=""></td>
            <td>{{$product -> name}}</td>
            <td>{{$product -> price}}</td>
            <td>{{$product -> created_at}}	</td>
            <td>
                <a href="/admin/product/edit/{{$product -> id}}" class= "edit-class" href="">Sửa</a>

                <a onclick="removeRow(product_id = {{$product -> id}},url='/admin/product/delete')" class= "delete-class" href="#">Xóa</a>
            </td>
        </tr>

        @endforeach
        

    </tbody>
</table>
<!-- Phân trang thủ công -->
<div class="custom-pagination">
        @if ($products->currentPage() > 1)
            <a href="{{ $products->url($products->currentPage() - 1) }}" class="pagination-btn">← Trước</a>
        @endif

        @for ($i = 1; $i <= $products->lastPage(); $i++)
            <a href="{{ $products->url($i) }}" class="pagination-btn {{ ($i == $products->currentPage()) ? 'active' : '' }}">{{ $i }}</a>
        @endfor

        @if ($products->currentPage() < $products->lastPage())
            <a href="{{ $products->url($products->currentPage() + 1) }}" class="pagination-btn">Sau →</a>
        @endif
</div>

  
</div>
@endsection
@section('footer')

    <script>
        function removeRow(product_id,url){
        if(confirm('Bạn chắc chắn xóa sản phẩm này không?')){
                $.ajax({
                url: url,
                data: {product_id},
                method: 'GET',
                dataType:'JSON',
                success: function (res){
                if(res.success == true){
                    location.reload();
                }
                }
            }
            )
        }
        }
    </script>
   
<style>
    .custom-pagination {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .pagination-btn {
        padding: 8px 12px;
        margin: 0 5px;
        border: 1px solid #ddd;
        text-decoration: none;
        color: #333;
        border-radius: 5px;
        transition: 0.3s;
    }

    .pagination-btn:hover {
        background-color: #007bff;
        color: white;
        border-color: #007bff;
    }

    .pagination-btn.active {
        background-color: #007bff;
        color: white;
        border-color: #007bff;
        font-weight: bold;
    }
</style>


@endsection
                    