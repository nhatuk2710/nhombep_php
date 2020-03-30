
@extends('listlayout.layout')
@section('product')
    @foreach($new as $n)
    <div class="col-12 col-sm-6 col-md-4 single_gallery_item women wow fadeInUpBig" data-wow-delay="0.2s">
        <!-- Product Image -->
        <div class="product-img">
            <img src={{asset("img/product-img/product-1.jpg")}} alt="">
            <div class="product-quicview">
                <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
            </div>
        </div>
        <!-- Product Description -->
        <div class="product-description text-center">
            <h4 class="product-price">{{$n->price}} VND</h4>
            <p>{{$n->product_name}}</p>
            <a href="{{url("product/{$n->id}")}}" class="add-to-cart-btn">View product detail</a>
            <!-- Add to Cart -->
            <a href="#" class="add-to-cart-btn">ADD TO CART</a>
        </div>
    </div>
    @endforeach
    @endsection
@section('footprofile')
    @endsection

