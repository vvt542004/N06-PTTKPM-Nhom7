<!DOCTYPE html>
<html lang="en">
<head>
    @include('parts.head')
</head>
<body>
    <!--header-->
   @include('parts.header')
   @include('parts.menu')
   

<div class="slider">
    <div class="list-slider">
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">

        <div class="slide first">
        @foreach ($products_slidefirst as $product)
            
            <a href=""><img src="{{asset($product -> image)}}" alt=""></a> 
        @endforeach     
        </div>
        @foreach ($products_slide as $product)
        <div class="slide">
            <a href=""><img src="{{asset(asset($product -> image))}}" alt=""></a>    
        </div>
        @endforeach  
       
  

        <div class="navigation-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
    </div>
</div>

    <div class="navigation-manual">
        <label for="radio1" class="manual1-btn"></label>
        <label for="radio2" class="manual1-btn"></label>
        <label for="radio3" class="manual1-btn"></label>
    </div>
</div>
    <div class="container">
        <div class="content">
          <div class="whathot">
            <p>WHAT HOT</p>
            <p><b>SẢN PHẨM NỔI BẬT</b></p>
          </div>
        </div>
    </div>

    <div class="conten">
    @include('parts.conten_right')
     </div>

     <div class="conten">
     @include('parts.conten_right1')
        
     </div>

     <div class="xemthem">
        <div class="them">
            <a href="">XEM THÊM</a>
        </div>
     </div>
<!--CHinh sua index -->
<div class="Baner-new">
    <div class="Baner-new-conten">
        <div class="Baner-left">
            <h2>Bộ sưu tập </h2>
            <h1>Giường cấp thông minh </h1>
            <button><h2 style="margin-top: 2%;">Khám phá ngay </h2></button>

        </div>
        <div class="Baner-right">
            <div class="Baner-right-one">
            @foreach ($products_banner1 as $product)
                <img src="{{asset($product -> image)}}" alt="">
            @endforeach

            </div>
            <div class="Baner-right-two">
            @foreach ($products_banner2 as $product)
                <img src="{{asset($product -> image)}}" alt="">
            @endforeach

            </div>
            
            
        </div>
       

    </div>
</div>
    

     <div class="container">
        <div class="content">
          <div class="whathot">
            <p><b>SẢN PHẨM MỚI</b></p>
          </div>
        </div>
    </div>

    <div class="conten">
    @include('parts.conten_right2')
       
     </div>
    
     <div class="conten">
     @include('parts.conten_right3')
        
     </div>

     <div class="xemthem">
        <div class="them">
            <a href="">XEM THÊM</a>
        </div>
     </div>

     <div class="block_home">
        @foreach ($products_end as $product)
        <img src="{{asset($product -> image)}}" alt="">
        @endforeach 
    
     </div>

    @include('parts.footer')
    <link rel="stylesheet" href="{{asset('frontend/css/BTL.css')}}">

</body>
</html>