@extends('listlayout.layout')
{{--@includeIf('css-script.head')--}}
@section('product')
{{--    @if(!Auth::check())--}}
        <!--Modal: Login / Register Form-->
{{--<form action="{{url("postLogin")}}" method="POST">--}}
        <div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog cascading-modal" role="document">
                <!--Content-->
                <div class="modal-content">

                    <!--Modal cascading tabs-->
                    <div class="modal-c-tabs">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
                                    Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
                                    Register</a>
                            </li>
                        </ul>

                        <!-- Tab panels -->
                        <div class="tab-content">
                            <!--Panel 7-->
                            <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

                                <!--Body-->
                                <div class="modal-body mb-1">
                                    <div class="md-form form-sm mb-5">
                                        <i class="fas fa-envelope prefix"></i>
                                        <input type="email" id="modalLRInput10" name="email" class="form-control form-control-sm validate">
                                        <label data-error="wrong" data-success="right" for="modalLRInput10">Your email</label>
                                    </div>

                                    <div class="md-form form-sm mb-4">
                                        <i class="fas fa-lock prefix"></i>
                                        <input type="password" id="modalLRInput11" name="password" class="form-control form-control-sm validate">
                                        <label data-error="wrong" data-success="right" for="modalLRInput11">Your password</label>
                                    </div>
{{--                                    @if(!Auth::check())--}}
                                    <div class="text-center mt-2">
                                        <button name="loginBtn" class="btn btn-info text-center">Log in <i class="fas fa-sign-in ml-1"></i></button>
                                    </div>
{{--                                        @else--}}
{{--                                        <div class="text-center mt-2">--}}
{{--                                            <button name="loginBtn" class="btn btn-info">Log in <i class="fas fa-sign-in ml-1"></i></button>--}}
{{--                                            {{Auth::user()->name}}--}}
{{--                                        </div>--}}
{{--                                    @endif--}}
                                </div>
                                <!--Footer-->
                                <div class="modal-footer">
                                    <div class="options text-center text-md-right mt-1">
                                        <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
                                        <p>Forgot <a href="#" class="blue-text">Password?</a></p>
                                    </div>
                                    <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                                </div>

                            </div>
                            <!--/.Panel 7-->

                            <!--Panel 8-->
                            <div class="tab-pane fade" id="panel8" role="tabpanel">

                                <!--Body-->
                                <div class="modal-body">
                                    <div class="md-form form-sm mb-5">
                                        <i class="fas fa-envelope prefix"></i>
                                        <input type="email" id="modalLRInput12" class="form-control form-control-sm validate">
                                        <label data-error="wrong" data-success="right" for="modalLRInput12">Your email</label>
                                    </div>

                                    <div class="md-form form-sm mb-5">
                                        <i class="fas fa-lock prefix"></i>
                                        <input type="password" id="modalLRInput13" class="form-control form-control-sm validate">
                                        <label data-error="wrong" data-success="right" for="modalLRInput13">Your password</label>
                                    </div>

                                    <div class="md-form form-sm mb-4">
                                        <i class="fas fa-lock prefix"></i>
                                        <input type="password" id="modalLRInput14" class="form-control form-control-sm validate">
                                        <label data-error="wrong" data-success="right" for="modalLRInput14">Repeat password</label>
                                    </div>

                                    <div class="text-center form-sm mt-2">
                                        <button class="btn btn-info">Sign up <i class="fas fa-sign-in ml-1"></i></button>
                                    </div>

                                </div>
                                <!--Footer-->
                                <div class="modal-footer">
                                    <div class="options text-right">
                                        <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
                                    </div>
                                    <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            <!--/.Panel 8-->
                        </div>

                    </div>
                </div>
                <!--/.Content-->
            </div>
        </div>
{{--</form>--}}
        <!--Modal: Login / Register Form-->
{{--        <script type="text/javascript">--}}
{{--            $("loginBtn").bind("click",function () {--}}
{{--               $.ajax({--}}
{{--                 url: "{{url("postLogin")}}",--}}
{{--                   method: "POST",--}}
{{--                   data: {--}}
{{--                     _token: $("input[name=token]").val(),--}}
{{--                     _email: $("input[name=email]").val(),--}}
{{--                     _password: $("input[name=password]").val(),--}}
{{--                   },--}}
{{--                   success: function (res) {--}}
{{--                        if(res.status){--}}
{{--                            location.reload();--}}
{{--                        }else{--}}
{{--                            alert(res.message);--}}
{{--                        }--}}
{{--                   }--}}
{{--               });--}}
{{--            });--}}
{{--        </script>--}}
{{--        @endif--}}
    @foreach($new as $n)
    <div class="col-12 col-sm-6 col-md-4 single_gallery_item women wow fadeInUpBig" data-wow-delay="0.2s">
        <!-- Product Image -->
        <div class="product-img">
            <img src={{asset($n-> thumbnail)}} alt="">
            <div class="product-quicview">
                <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
            </div>
        </div>
        <!-- Product Description -->
        <div class="product-description text-center">
            <h4 class="product-price">{{$n->price}} VND</h4>
            <p>{{$n->product_name}}</p>
            <a href="{{url("product/{$n->id}")}}" class="btn add-to-cart-btn">View product detail</a>
        </div>
    </div>
    @endforeach
    @endsection
@section('footprofile')
    @endsection
{{--@includeIf('css-script.script')--}}

