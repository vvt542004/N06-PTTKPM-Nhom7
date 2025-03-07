<div class="conten_right1">
@foreach ($products_right1 as $product)
            <div class="anh1">
                <a class="vinh-body-right-item-link" href="">
                    <div class="vinh-body-right-item-img">
                        <div class="vinh-image-wrapper">
                        <img src="{{asset($product -> image)}}" class="vinh-image1" alt="Image 1">
                        <img src="{{asset($product -> image)}}" class="vinh-image2" alt="Image 2">
                        </div>
                    </div>
                    <p class="vinh-sanpham">{{$product -> name}}</p>
                    <p class="vinh-gia">{{$product -> price}}<u>đ</u></p>
                </a>
                <div class="vinh-icon-container">
                    <div class="vinh-icon">
                        <a href=""><i class="fa-solid fa-cart-shopping"></i></a>
                    </div>
                    <div class="vinh-icon">
                        <a href=""><i class="fa-solid fa-plus"></i></a>
                    </div>
                    <div class="vinh-icon">
                        <a href=""><i class="fa-solid fa-eye"></i></a>
                    </div>
                </div>
            </div>

            @endforeach 
        </div>