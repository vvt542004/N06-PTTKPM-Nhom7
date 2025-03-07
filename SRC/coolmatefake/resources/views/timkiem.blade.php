@extends('main')
@section('content')

<div class="menu">
    <ul>
        <li><a href="/">Trang chủ</a></li>
        <li><a href="">Danh mục</a></li>
        <li><a href="">Tất cả sản phẩm</a></li>
    </ul>
</div>

<div class="body">
    <div class="lam-container-body-left">
        <div class="body-left">
            <p>DANH MỤC</p>
            <div class="menu-product">
                <ul>
                    <li><a href="">Nội thất phòng khách</a></li>
                    <li><a href="">Nội thất phòng ngủ</a></li>
                    <li><a href="">Nội thất văn phòng</a></li>
                    <li><a href="">Nội thất phòng bếp</a></li>
                    <li><a href="">Đồ trang trí</a></li>
                </ul>
            </div>
            @include('parts.slideshow-container')
        </div>
    </div>
    <div class="body-right" id="searchResults">
        <!-- Kết quả tìm kiếm sẽ được tải ở đây qua AJAX -->
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#searchInput').on('keyup', function() {
            let query = $(this).val();
            
            if(query.length > 2) { 
                $.ajax({
                    url: '{{ route('search.products') }}',
                    type: 'GET',
                    data: {query: query},
                    success: function(data) {
                        $('#searchResults').html(data); 
                    }
                });
            } else {
                $('#searchResults').html(''); 
            }
        });
    });
</script>


<script src="{{asset('frontend/js/Lam-SanPham.js')}}"></script>
<link rel="stylesheet" href="{{asset('frontend/css/BTL.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/SanPham.css')}}">
@endsection