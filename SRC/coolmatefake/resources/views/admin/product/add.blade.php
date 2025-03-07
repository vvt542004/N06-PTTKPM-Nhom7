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
<form action="/admin/product/add" method="post" enctype="multipart/form-data">
<div class="admin-all-content-main-content-prouct-add">
    <div class="admin-all-content-main-content-prouct-add-left">
        <div class="admin-all-content-main-content-prouct-add-input">
        <input type="text" value="{{ old('name') }}" name="name" placeholder="Tên sản phẩm">

                           
        </div>
            <div class="admin-all-content-main-content-prouct-add-input">
            <input type="text" value="{{ old('price') }}" name="price" placeholder="Giá bán ">
                <!-- <input type="text" placeholder="Mã giảm giá"> -->
                                
            </div>

            <!-- <textarea name="" placeholder="Đặc điểm nôi nổi bật" id=""></textarea>
            <textarea name="" placeholder="Mô tả sản phẩm" id=""></textarea> -->
            <button type="submit" class="main-btn">Thêm sản phẩm</button>
        </div> 

    <div class="admin-all-content-main-content-prouct-add-right">
        <!-- <div class="admin-all-content-main-content-prouct-add-right-image">
                <label for="file">Ảnh sản phẩm </label>
                    <input id="file" type="file" >
                    <input type="hidden" name="image" id="input-file-img-hiden">
                    <div class="image-show" id="input-file-img" >

                    </div>
        </div> -->
        <div class="admin-all-content-main-content-prouct-add-right-image">
            <label for="files">Ảnh sản phẩm </label>
                <input id="files" type="file" multiple>       
                    <div class="image-show" id="input-file-imgs">

                    </div>
        </div>

    </div>

                        
</div>
@csrf
</form>


                

<script src="{{asset('backend/js/product_ajax.js')}}"></script>
@endsection



