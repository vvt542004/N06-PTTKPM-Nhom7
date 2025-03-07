<header>
        <div class="vinh-logo">
        @foreach ($products_logo as $product)
            <a href="/home"><img src="{{asset($product -> image)}}" alt=""></a>
        @endforeach
        </div>

        <nav class="vinh-navbar">
            <div class="vinh-thongtin">
                <a href=""><i class="fa-solid fa-phone"></i>1900.636.099</a>
                <a href="" id="dki">Hỗ trợ </a>
                <a href="/" id="dnhap">Đăng nhập</a>    
                    <div class="vinh-sale">
                        <span>Miễn phí vận chuyển <span class="vinh-sale1">ĐƠN HÀNG TRÊN 900K</span></span>
                    </div>
            </div>

            <div class="vinh-shop">
                <a href="">
                    <i class="fa-solid fa-bag-shopping"></i>
                </a>
                <div class="show_shop">
                    <a href="/giohang">Giỏ hàng</a>
                    <a href="/ordermy">Đơn hàng</a>
                </div>
            </div>
           
        </nav>
    </header>