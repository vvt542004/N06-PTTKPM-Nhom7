@foreach ($products_blogg as $product)
    <div class="blog_tin_left">
        <img src="{{asset($product -> image)}}" alt="">
        <div class="text_blog_tin_left">
            <p>{{$product -> name}}</p>
            <i class="fa-regular fa-calendar"></i>
            <font style="margin-left: 10px ;">{{$product -> created_at}}</font>
        </div>
    </div>
@endforeach         