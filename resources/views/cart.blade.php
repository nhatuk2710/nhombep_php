<!DOCTYPE html>
<html lang="en">

<head>
    @includeIf('css-script.head')
</head>

<body>
<div class="catagories-side-menu">
    <!-- Close Icon -->
    <div id="sideMenuClose">
        <i class="ti-close"></i>
    </div>
    <!--  Side Nav  -->
    <div class="nav-side-menu">
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
    </div>
</div>

<div id="wrapper">

    <!-- ****** Header Area Start ****** -->
    <header class="header_area bg-img background-overlay-white" style="background-image: {{url("img/bg-img/bg-1.jpg")}};">
        <!-- Top Header Area Start -->
        <div class="top_header_area">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-end">

                    <div class="col-12 col-lg-7">
                        <div class="top_single_area d-flex align-items-center">
                            <!-- Logo Area -->
                            <div class="top_logo">
                                <a href="#"><img src={{asset("img/core-img/logo.png")}} alt=""></a>
                            </div>
                            <!-- Cart & Menu Area -->
                            <div class="header-cart-menu d-flex align-items-center ml-auto">
                                <!-- Cart Area -->
                                <div class="cart">
{{--                                    @php $cart = session("cart") @endphp--}}
{{--                                    @if(isset($cart))--}}
{{--                                    <a href="#" id="header-cart-btn" target="_blank"><span class="cart_quantity">{{count($cart)}}</span> <i class="ti-bag"></i> Your Bag $20</a>--}}
{{--                                    @endif--}}
                                        <!-- Cart List Area Start -->
                                    <ul class="cart-list">
{{--                                        @forelse($cart as $l)--}}
{{--                                        <li>--}}
{{--                                            <a href="{{url("/cart")}}" class="image"><img src={{("img/product-img/10.jpg")}}--}}
{{--                                                    class="cart-thumb" alt=""></a>--}}
{{--                                            <div class="cart-item-desc">--}}
{{--                                                <h6><a href="#">Name:{{$product->product_name}}</a></h6>--}}
{{--                                                <p>x{{$product->cart_qty}}</p>--}}
{{--                                                <span class="price"> Price: ${{$product->price}}</span>--}}
{{--                                            </div>--}}
{{--                                            <span class="dropdown-product-remove"><i class="icon-cross"></i></span>--}}
{{--                                        </li>--}}
{{--                                        @empty--}}
{{--                                            <h6>No Product</h6>--}}
{{--                                        @endforelse--}}
                                        <li class="total">
                                            <span class="pull-right">Total: $20.00</span>
                                            <a href="{{url("cart")}}" class="btn btn-sm btn-cart">Cart</a>
                                            <a href="{{url("/checkout")}}" class="btn btn-sm btn-checkout">Checkout</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="text-center">
                                    @if(!Auth::check())
                                        <div class="header-right-side-menu ml-15">
                                            <a href="#" ><i class="ti-menu" aria-hidden="true"></i></a>
                                        </div>
                                    @else
                                        <div class="header-right-side-menu testimonial-info align-items-center ml-15">
                                            <div class="">
                                                <a><img class="rounded-circle ml-15" width="70" href="#" src="{{asset(Auth::user()->avt)}}" alt="avt" type="string">
                                                    <ul class="nav-item dropdow row">
                                                        <a class="nav-link active dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="{{url("cart")}}">Yours cart</a>
                                                            <a class="dropdown-item" href="{{url("checkout")}}">Yours checkout</a>
                                                            <a class="dropdown-item" href="#">Information</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="{{url("logOut")}}">Log out</a>
                                                        </div>
                                                    </ul>
                                                </a>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Top Header Area End -->
        <div class="main_header_area">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 d-md-flex justify-content-between">
                        <!-- Header Social Area -->
                        <div class="header-social-area">
                            <a href="#"><span class="karl-level">Share</span> <i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                        <!-- Menu Area -->
                        <div class="main-menu-area">
                            <nav class="navbar navbar-expand-lg align-items-start">

                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#karl-navbar" aria-controls="karl-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"><i class="ti-menu"></i></span></button>

                                <div class="collapse navbar-collapse align-items-start collapse" id="karl-navbar">
                                    <ul class="navbar-nav animated" id="nav">
                                        <li class="nav-item active"><a class="nav-link" href="{{url("/")}}">Home</a></li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="karlDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                            <div class="dropdown-menu" aria-labelledby="karlDropdown">
                                                <a class="dropdown-item" href="{{url("/")}}">Home</a>
                                                <a class="dropdown-item" href="shop.html">Shop</a>
                                                <a class="dropdown-item" href="product-details.html">Product Details</a>
                                                <a class="dropdown-item" href="cart.blade.php">Cart</a>
                                                <a class="dropdown-item" href="checkout.html">Checkout</a>
                                            </div>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="#">Dresses</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#"><span class="karl-level">hot</span> Shoes</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!-- Help Line -->
                        <div class="help-line">
                            <a href="tel:+346573556778"><i class="ti-headphone-alt"></i> +84 327394385 </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ****** Header Area End ****** -->

    <!-- ****** Top Discount Area Start ****** -->
    <section class="top-discount-area d-md-flex align-items-center">
        <!-- Single Discount Area -->
        <div class="single-discount-area">
            <h5>Free Shipping &amp; Returns</h5>
            <h6><a href="#">BUY NOW</a></h6>
        </div>
        <!-- Single Discount Area -->
        <div class="single-discount-area">
            <h5>20% Discount for all dresses</h5>
            <h6>USE CODE: Colorlib</h6>
        </div>
        <!-- Single Discount Area -->
        <div class="single-discount-area">
            <h5>20% Discount for students</h5>
            <h6>USE CODE: Colorlib</h6>
        </div>
    </section>
    <!-- ****** Top Discount Area End ****** -->

    <!-- ****** Cart Area Start ****** -->
    <div class="cart_area section_padding_100 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cart-table clearfix">
                        <table class="table table-responsive">
                            <thead>
                            <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $grand_total = 0; @endphp
                            @forelse($cart as $p)
                                @php $grand_total+=($p->price*$p->cart_qty) @endphp
                                <tr>
                                <td class="cart_product_img d-flex align-items-center col-lg-3">
                                    <img src={{asset($p->thumbnail)}}>
                                </td>
                                    <td class="d-flex align-items pull-left"><h6>{{$p->product_name}}</h6></td>
                                <td>
                                    <div class="quantity">
                                        <p class="btn btn-danger text-center text-white">{{$p->cart_qty}}</p>
                                    </div>
                                </td>
                                    <td class="price"><span>${{$p->price}}</span></td>
                                    <td class="total_price">
                                        <span>${{number_format($grand_total,2)}}</span>
                                    </td>
                                    <td>
                                        <a href="{{url("/remove-cart/{$p->id}")}}">x</a>
                                    </td>
                            </tr>

                            @empty
                                <h6>No product</h6>
                            @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="cart-footer d-flex mt-30">
                        <div class="back-to-shop w-50">
                            <a href="{{url("/")}}">Continue shooping</a>
                        </div>
                        <div class="update-checkout w-50 text-right">
                            <a href="{{url("/clear-cart")}}">clear cart</a>
                            <a href="#">Update cart</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="coupon-code-area mt-70">
                        <div class="cart-page-heading">
                            <h5>Cupon code</h5>
                            <p>Enter your cupone code</p>
                        </div>
                        <form action="#">
                            <input type="search" name="search" placeholder="#569ab15">
                            <button type="submit">Apply</button>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="shipping-method-area mt-70">
                        <div class="cart-page-heading">
                            <h5>Shipping method</h5>
                            <p>Select the one you want</p>
                        </div>

                        <div class="custom-control custom-radio mb-30">
                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label d-flex align-items-center justify-content-between" for="customRadio1"><span>Next day delivery</span><span>$4.99</span></label>
                        </div>

                        <div class="custom-control custom-radio mb-30">
                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label d-flex align-items-center justify-content-between" for="customRadio2"><span>Standard delivery</span><span>$1.99</span></label>
                        </div>

                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label d-flex align-items-center justify-content-between" for="customRadio3"><span>Personal Pickup</span><span>Free</span></label>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="cart-total-area mt-70">
                        <div class="cart-page-heading">
                            <h5>Cart total</h5>
                            <p>Final info</p>
                        </div>

                        <ul class="cart-total-chart">
                            <li><span>Subtotal</span> <span>$59.90</span></li>
                            <li><span>Shipping</span> <span>Free</span></li>
                            <li><span><strong>Total</strong></span> <span><strong>$59.90</strong></span></li>
                        </ul>
                        <a href="{{url("/checkout")}}" class="btn karl-checkout-btn">Proceed to checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ****** Cart Area End ****** -->

    <!-- ****** Footer Area Start ****** -->
    <footer class="footer_area">
        <div class="container">
            <div class="row">
                <!-- Single Footer Area Start -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single_footer_area">
                        <div class="footer-logo">
                            <img src={{asset("img/core-img/logo.png")}} alt="">
                        </div>
                        <div class="copywrite_text d-flex align-items-center">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
                <!-- Single Footer Area Start -->
                <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                    <div class="single_footer_area">
                        <ul class="footer_widget_menu">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Single Footer Area Start -->
                <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                    <div class="single_footer_area">
                        <ul class="footer_widget_menu">
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Shipping</a></li>
                            <li><a href="#">Our Policies</a></li>
                            <li><a href="#">Afiliates</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Single Footer Area Start -->
                <div class="col-12 col-lg-5">
                    <div class="single_footer_area">
                        <div class="footer_heading mb-30">
                            <h6>Subscribe to our newsletter</h6>
                        </div>
                        <div class="subscribtion_form">
                            <form action="#" method="post">
                                <input type="email" name="mail" class="mail" placeholder="Your email here">
                                <button type="submit" class="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="line"></div>

            <!-- Footer Bottom Area Start -->
            <div class="footer_bottom_area">
                <div class="row">
                    <div class="col-12">
                        <div class="footer_social_area text-center">
                            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ****** Footer Area End ****** -->
</div>
<!-- /.wrapper end -->

<!-- jQuery (Necessary for All JavaScript Plugins) -->
@includeIf('css-script.script')

</body>

</html>
