@extends('admin.main')
@section('content')
<div class="List-choice">
    <p>Danh mục sản phẩm:</p>
    <select name="List-choice-con" id="">
        <option value="">Tất cả sản phẩm</option>
        <option value="">Nội thất phòng khách</option>
        <option value="">Nội thất phòng ngủ</option>
        <option value="">Nội thất văn phòng</option>
        <option value="">Nội thất phòng bếp</option>
        <option value="">Đồ trang trí</option>
    </select>
</div>
<form action="" method="post" enctype="multipart/form-data">
<div class="admin-all-content-main-content-prouct-add">
    <div class="admin-all-content-main-content-prouct-add-left">
        <div class="admin-all-content-main-content-prouct-add-input">
        <input type="text" value="{{ $product -> name }}" name="name" placeholder="Tên sản phẩm">

                           
        </div>
            <div class="admin-all-content-main-content-prouct-add-input">
            <input type="text" value="{{ $product -> price }}" name="price" placeholder="Giá bán ">
                <!-- <input type="text" placeholder="Mã giảm giá"> -->
                                
            </div>

            <!-- <textarea name="" placeholder="Đặc điểm nôi nổi bật" id=""></textarea>
            <textarea name="" placeholder="Mô tả sản phẩm" id=""></textarea> -->
            <button type="submit" class="main-btn">Cập nhật sản phẩm</button>
        </div> 

    <div class="admin-all-content-main-content-prouct-add-right">
        <!-- <div class="admin-all-content-main-content-prouct-add-right-image">
                <label for="file">Ảnh sản phẩm </label>
                    <input id="file" type="file" >
                    <input type="hidden" name="image" value="{{$product -> image}}" id="input-file-img-hiden">
                    <div class="image-show" id="input-file-img" >
                         <img src="{{asset($product -> image)}}" alt="">

                    </div>
        </div> -->
        <div class="admin-all-content-main-content-prouct-add-right-image">
            <label for="files">Ảnh sản phẩm </label>
                <input id="files" type="file" multiple>       
                    <div class="image-show" id="input-file-imgs">
                       
                         @php
                         $product_image = explode("*", $product -> image);

                         @endphp
                         @foreach($product_image as $product_image)
                         <img src="{{asset($product_image)}}" alt="">
                         <input type="hidden" name="image[]" value="{{$product -> image}}" id="input-file-img-hiden">
                         @endforeach

                    </div>
        </div>

    </div>

                        
</div>
@csrf
</form>


                

                    <script src="{{asset('backend/js/product_ajax.js')}}"></script>
@endsection



