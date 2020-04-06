@extends('listlayout.product')
@section('detail')
<div class="col-12 col-md-6">
    <div class="single_product_thumb">
        <div id="product_details_slider" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
                <li class="active" data-target="#product_details_slider" data-slide-to="0" href={{asset("img/product-img/product-9.jpg")}}>
                </li>
                <li data-target="#product_details_slider" data-slide-to="1" href="img/product-img/product-2.jpg">
                </li>
                <li data-target="#product_details_slider" data-slide-to="2" href="img/product-img/product-3.jpg">
                </li>
                <li data-target="#product_details_slider" data-slide-to="3" href="img/product-img/product-4.jpg">
                </li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a class="gallery_img" href={{asset("img/product-img/product-9.jpg")}}>
                        <img class="d-block w-100" src={{asset("img/product-img/product-9.jpg")}} >
                    </a>
                </div>
                <div class="carousel-item">
                    <a class="gallery_img" href={{asset("img/product-img/product-2.jpg")}}>
                        <img class="d-block w-100" src={{asset("img/product-img/product-2.jpg")}}>
                    </a>
                </div>
                <div class="carousel-item">
                    <a class="gallery_img" href={{asset("img/product-img/product-3.jpg")}}>
                        <img class="d-block w-100" src={{asset("img/product-img/product-3.jpg")}}>
                    </a>
                </div>
                <div class="carousel-item">
                    <a class="gallery_img" href={{asset("img/product-img/product-4.jpg")}}>
                        <img class="d-block w-100" src={{asset("img/product-img/product-4.jpg")}}>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-12 col-md-6">
    <div class="single_product_desc">

        <h4 class="title"><a href="#">{{$product->product_name}}</a></h4>

        <h4 class="price">{{$product->price}}</h4>

        <p class="available">Available: <span class="text-muted">In Stock</span></p>

        <div class="single_product_ratings mb-15">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
        </div>

        <div class="widget size mb-50">
            <h6 class="widget-title">Size</h6>
            <div class="widget-desc">
                <ul>
                    <li><a href="#">32</a></li>
                    <li><a href="#">34</a></li>
                    <li><a href="#">36</a></li>
                    <li><a href="#">38</a></li>
                    <li><a href="#">40</a></li>
                    <li><a href="#">42</a></li>
                </ul>
            </div>
        </div>

        <!-- Add to Cart Form -->
        <form class="" method="post">
            <div class="quantity">
{{--                                    <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value;--}}
{{--                                    if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>--}}
{{--                    <input type="text" class="qty-text" id="qty" step="1" min="1" max="12" name="quantity" value="{{$product->quantity}}">--}}
{{--                <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value;--}}
{{--                                    if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>--}}
            </div>
            @if(!Auth::check())
            <a href="#" class="btn cart-submit d-block btn-danger">Add to cart</a>
                @else
                <a href="{{url("shopping/{$product->id}")}}" class="btn cart-submit d-block btn-danger">Add to cart</a>
                @endif
        </form>

        <div id="accordion" role="tablist">
            <div class="card">
                <div class="card-header" role="tab" id="headingOne">
                    <h6 class="mb-0">
                        <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Information</a>
                    </h6>
                </div>

                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus
                            sagittis auctor gravida. Integ er
                            bibendum sodales arcu id te mpus. Ut consectetur lacus.</p>
                        <p>Approx length 66cm/26" (Based on a UK size 8 sample) Mixed fibres</p>
                        <p>The Model wears a UK size 8/ EU size 36/ US size 4 and her height is 5'8"</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" role="tab" id="headingTwo">
                    <h6 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Cart Details</a>
                    </h6>
                </div>
                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quis in veritatis officia inventore, tempore provident dignissimos nemo, nulla quaerat. Quibusdam non, eos, voluptatem reprehenderit hic nam! Laboriosam, sapiente! Praesentium.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia magnam laborum eaque.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" role="tab" id="headingThree">
                    <h6 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">shipping &amp; Returns</a>
                    </h6>
                </div>
                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse quo sint repudiandae suscipit ab soluta delectus voluptate, vero vitae, tempore maxime rerum iste dolorem mollitia perferendis distinctio. Quibusdam laboriosam rerum distinctio. Repudiandae fugit odit, sequi id!</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae qui maxime consequatur laudantium temporibus ad et. A optio inventore deleniti ipsa.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
    @endsection
@section('relative')
    <div class="row">
        <div class="col-12">
            <div class="section_heading text-center">
                <h2>related Products</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="you_make_like_slider owl-carousel">
                @foreach($category_product as $c)
                <!-- Single gallery Item -->
                <div class="single_gallery_item">
                    <!-- Product Image -->
                    <div class="product-img">
                        <img src={{asset("img/product-img/product-1.jpg")}} alt="">
                        <div class="product-quicview">
                            <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                        </div>
                    </div>
                    <!-- Product Description -->
                    <div class="product-description text-center">
                        <h3 class="product-price">{{$c->price}} VND</h3>
                        <p>{{$c->product_name}}</p>
                        <!-- Add to Cart -->
                        <a href="{{url("/product/{$c->id}")}}" class="btn add-to-cart-btn">view product detail</a>
                    </div>
                </div>
                @endforeach
                <!-- Single gallery Item -->
            </div>
        </div>
    </div>

    <script src={{asset("js/jquery/jquery-2.2.4.min.js")}}></script>
    <!-- Popper js -->
    <script src={{asset("js/popper.min.js")}}></script>
    <!-- Bootstrap js -->
    <script src={{asset("js/bootstrap.min.js")}}></script>
    <!-- Plugins js -->
    <script src={{asset("js/plugins.js")}}></script>
    <!-- Active js -->
    <script src={{asset("js/active.js")}}></script>

@endsection
