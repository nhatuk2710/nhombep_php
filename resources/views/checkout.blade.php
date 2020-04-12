<!DOCTYPE html>
<html lang="en">

<head>
   @includeIf('css-script.head')
</head>

<body>


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
                                                <a class="dropdown-item" href="cart.html">Cart</a>
                                                <a class="dropdown-item" href="checkout.blade.php">Checkout</a>
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

    <!-- ****** Checkout Area Start ****** -->
    <form type="checkout-form" action="{{url("/checkout")}}" method="POST">
        @csrf
    <div class="checkout_area section_padding_100">
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-6">
                    <div class="checkout_details_area mt-50 clearfix">

                        <div class="cart-page-heading">
                            <h5>Billing Address</h5>
                            <p>Enter your cupone code</p>
                        </div>

                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="first_name">Customer name<span>*</span></label>
                                    <input type="text" name="customer_name" class="form-control" id="first_name" value="" required>
                                </div>

                                <div class="col-12 mb-3">
                                    <label for="shipping_add">Address <span>*</span></label>
                                    <input type="text" name="shipping_add" class="form-control mb-3" id="street_address" value="" required>
                                </div>

                                <div class="col-12 mb-3">
                                    <label for="phone_number">Phone No <span>*</span></label>
                                    <input type="number" name="telephone" class="form-control" id="phone_number" min="0" value="" required>
                                </div>

                                <div class="col-12">
                                    <div class="custom-control custom-checkbox d-block mb-2">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                                        <label class="custom-control-label" for="customCheck1">Terms and conitions</label>
                                    </div>
                                    <div class="custom-control custom-checkbox d-block mb-2">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2" required>
                                        <label class="custom-control-label" for="customCheck2">Create an accout</label>
                                    </div>
                                    <div class="custom-control custom-checkbox d-block">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3" required>
                                        <label class="custom-control-label" for="customCheck3">Subscribe to our newsletter</label>
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5 ml-lg-auto">
                    <div class="order-details-confirmation">
                        <div class="cart-page-heading">
                            <h5>Your Order</h5>
                            <p>The Details</p>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @php $grand_total = 0; @endphp
                                    @foreach($cart as $k)

                                    <th><p>{{$k->product_name}}</p></th>
                                    <th><p>{{$k->price}}</p></th>
                                    <th class="text-center"><p>{{$k->cart_qty}}</p></th>
                                </tr>
                                @php $grand_total+=($k->price*$k->cart_qty) @endphp
                                    @endforeach
                            </tbody>
                        </table>
                        <ul class="order-details-form mb-4">
                            <div class="container">
                                <li><span>Total</span><h3>${{number_format($grand_total,2)}}</h3></li>
                            </div>
                        </ul>

                        <div id="accordion" role="tablist" class="mb-4">
                            <div class="card">
                                <div class="card-header" role="tab" id="headingOne">
                                    <div class="custom-control custom-checkbox d-block mb-2">
                                        <input type="checkbox" name="payment_method" value="paypal" class="custom-control-input" id="payment1">
                                        <label class="custom-control-label" for="payment1">Paypal</label>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingTwo">
                                    <div class="custom-control custom-checkbox d-block mb-2">
                                        <input type="checkbox" name="payment_method" value="delivery" class="custom-control-input" id="payment2">
                                        <label class="custom-control-label" for="payment2">Cash on Delivery</label>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingThree">
                                    <div class="custom-control custom-checkbox d-block mb-2">
                                        <input type="checkbox" name="payment_method" value="credit_card" class="custom-control-input" id="payment3">
                                        <label class="custom-control-label" for="payment3">Credit Card</label>
                                    </div>
                                </div>

                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingFour">
                                    <div class="custom-control custom-checkbox d-block mb-2">
                                        <input type="checkbox" name="payment_method" value="bank_tranfer" class="custom-control-input" id="payment4">
                                        <label class="custom-control-label" for="payment4">Direct Bank Transfer</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" href="{{url("/checkout-success")}}" class="btn karl-checkout-btn">Place Order</button>

                    </div>

                </div>

            </div>
        </div>

    </div>

    </form>

    <!-- ****** Checkout Area End ****** -->

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
