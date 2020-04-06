@extends('listlayout.list')
@section('categories')
    <div class="menu-list">
        <h6>Categories</h6>
        <ul id="menu-content" class="menu-content collapse out">
            <!-- Single Item -->
            <li data-toggle="collapse" data-target="#women" class="collapsed active">
                <a href="#">Woman wear <span class="arrow"></span></a>
                <ul class="sub-menu collapse" id="women">
                    <li><a href="#">Midi Dresses</a></li>
                    <li><a href="#">Maxi Dresses</a></li>
                    <li><a href="#">Prom Dresses</a></li>
                    <li><a href="#">Little Black Dresses</a></li>
                    <li><a href="#">Mini Dresses</a></li>
                </ul>
            </li>
            <!-- Single Item -->
            <li data-toggle="collapse" data-target="#man" class="collapsed">
                <a href="#">Man Wear <span class="arrow"></span></a>
                <ul class="sub-menu collapse" id="man">
                    <li><a href="#">Man Dresses</a></li>
                    <li><a href="#">Man Black Dresses</a></li>
                    <li><a href="#">Man Mini Dresses</a></li>
                </ul>
            </li>
            <!-- Single Item -->
            <li data-toggle="collapse" data-target="#kids" class="collapsed">
                <a href="#">Children <span class="arrow"></span></a>
                <ul class="sub-menu collapse" id="kids">
                    <li><a href="#">Children Dresses</a></li>
                    <li><a href="#">Mini Dresses</a></li>
                </ul>
            </li>
            <!-- Single Item -->
            <li data-toggle="collapse" data-target="#bags" class="collapsed">
                <a href="#">Bags &amp; Purses <span class="arrow"></span></a>
                <ul class="sub-menu collapse" id="bags">
                    <li><a href="#">Bags</a></li>
                    <li><a href="#">Purses</a></li>
                </ul>
            </li>
            <!-- Single Item -->
            <li data-toggle="collapse" data-target="#eyewear" class="collapsed">
                <a href="#">Eyewear <span class="arrow"></span></a>
                <ul class="sub-menu collapse" id="eyewear">
                    <li><a href="#">Eyewear Style 1</a></li>
                    <li><a href="#">Eyewear Style 2</a></li>
                    <li><a href="#">Eyewear Style 3</a></li>
                </ul>
            </li>
            <!-- Single Item -->
            <li data-toggle="collapse" data-target="#footwear" class="collapsed">
                <a href="#">Footwear <span class="arrow"></span></a>
                <ul class="sub-menu collapse" id="footwear">
                    <li><a href="#">Footwear 1</a></li>
                    <li><a href="#">Footwear 2</a></li>
                    <li><a href="#">Footwear 3</a></li>
                </ul>
            </li>
        </ul>
    </div>

    @endsection
@section('listproduct')

    <div class="shop_grid_product_area">
        <div class="row">
            <!-- Single gallery Item -->
            @foreach($category->Product->take(9) as $l)
            <div class="col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig" data-wow-delay="0.2s">
                <!-- Product Image -->
                <div class="product-img">
                    <img src={{asset("img/product-img/product-1.jpg")}} alt="">
                    <div class="product-quicview">
                        <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                    </div>
                </div>
                <!-- Product Description -->
                <div class="product-description text-center">
                    <h4 class="product-price">{{$l->price}} VND</h4>
                    <p>{{$l->product_name}}</p>
                    <!-- Add to Cart -->
                    <a href="{{url("product/{$l->id}")}}" class="add-to-cart-btn">View product detail</a>
                </div>
            </div>
            @endforeach

            <!-- Single gallery Item -->

        </div>
    </div>

    <div class="shop_pagination_area wow fadeInUp" data-wow-delay="1.1s">
        <nav aria-label="Page navigation">
            <ul class="pagination pagination-sm">
                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                <li class="page-item"><a class="page-link" href="#">02</a></li>
                <li class="page-item"><a class="page-link" href="#">03</a></li>
            </ul>
        </nav>
    </div>

    @endsection

