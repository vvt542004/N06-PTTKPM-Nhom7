@foreach ($products_tt as $product)
<div class="body-right-item">
    <a class="lam-body-right-item-link" href="">
        <div class="body-right-item-img">
            <div class="image-wrapper">
                <img src="{{ asset($product->image) }}" class="image1" alt="Image 1">
                <img src="{{ asset($product->image) }}" class="image2" alt="Image 2">
            </div>
        </div>
        <p class="sanpham">{{ $product->name }}</p>
        <p class="gia">{{ $product->price }}<u>đ</u></p>
    </a>

    <form action="{{ url('/cart/add') }}" method="POST">
        @csrf
        <input type="hidden" name="product_id" value="{{ $product->id }}">
        <div class="lam-icon-container">
            <div class="lam-icon">
            <a href="/giohang"><i class="fa-solid fa-cart-shopping"></i></a>
                
            </div>
            <div class="lam-icon">
            <button type="submit"><i class="fa-solid fa-plus"></i></button>
                
            </div>
            <div class="lam-icon">
                <a href=""><i class="fa-solid fa-eye"></i></a>
            </div>
        </div>
    </form>
</div>
@endforeach
