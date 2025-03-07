<div class="slideshow-container">
    @foreach ($products_sp_container as $product)
    <img src="{{asset($product -> image)}}" class="slides" alt="Image 1">
    @endforeach 
    <!-- <img src="{{asset('frontend/anh/giamgia2.png')}}" class="slides" alt="Image 2">
    <img src="{{asset('frontend/anh/giamgia3.png')}}" class="slides" alt="Image 3">
    <img src="{{asset('frontend/anh/giamgia4.png')}}" class="slides" alt="Image 4"> -->
    <!-- <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
    <a class="next" onclick="changeSlide(1)">&#10095;</a> -->
</div>