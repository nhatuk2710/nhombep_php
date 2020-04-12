@extends('listlayout.layout')
{{--@includeIf('css-script.head')--}}
@section('product')


<!-- Modal HTML -->
<!--Modal: Login / Register Form-->


<style>
    .prettyline {
        height: 5px;
        border-top: 0;
        /*background: #c4e17f;*/
        border-radius: 15px;
    }
    .modal-content {
        font-size: medium;
    }
    .form-control {
        font-size: medium;
    }

    .btn-danger {
        font-size: medium;
    }
</style>

<!-- Modal -->

<ul class="modal fade bs-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <br>
            <div class="bs-example bs-example-tabs">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#signin" id="signin-tab" data-toggle="tab" role="tab" aria-controls="home" aria-selected="true">Sign-In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#signup" id="signup-tab" data-toggle="tab" role="tab" aria-controls="home" aria-selected="true">Sign-Up</a>
                    </li>
                </ul>
            </div>
            <div class="modal-body">
                <div class="tab-content" id="myTabContent">
                    @if(!Auth::check())
                        <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="home-tab">
                        <form action="#" method="post" >
                            @csrf
                            <fieldset>
                                <!-- Sign In Form -->
                                <div class="control-group">
                                    <label class="control-label" for="user">User email:</label>
                                    <div class="controls">
                                        <input id="user" name="email" type="text" class="form-control" placeholder="" required value="{{old("email")}}">
                                    </div>
                                </div>
                                <!-- Password input-->
                                <div class="control-group">
                                    <label class="control-label" for="passwordinput">Password:</label>
                                    <div class="controls">
                                        <input required="" id="passwordinput" name="password" class="form-control" type="password" placeholder="">
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="control-group">
                                    <label class="control-label" for="loginButton"></label>
                                    <div class="controls">
                                        <button type="button" id="loginButton" name="Button" class="btn btn-danger">Sign In</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                        </div>
                        <script type="text/javascript">
                            $("#loginButton").bind("click",function () {
                                $.ajax({
                                    url: "{{url("postLogin")}}",
                                    method: "POST",
                                    data: {
                                        _token: $("input[name=_token]").val(),
                                        email: $("input[name=email]").val(),
                                        password: $("input[name=password]").val(),
                                    },
                                    success: function (res) {
                                        if(res.status){
                                            location.reload();
                                        }else{
                                            alert(res.message);
                                        }
                                    }
                                });
                            });
                        </script>
                    <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="profile-tab">
                        <form action="#" method="post" class="form-horizontal">
                            <fieldset>
                                <div class="control-group">
                                    <label class="control-label" for="name">User name:</label>
                                    <div class="controls">
                                        <input id="name" name="name" class="form-control" type="text" placeholder="Full Name" required="">
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="control-group">
                                    <label class="control-label" for="Email">Email:</label>
                                    <div class="controls">
                                        <input id="Email" name="email" class="form-control" type="text" placeholder="example@gmail.com" required>
                                    </div>
                                </div>
                                <!-- Password input-->
                                <div class="control-group">
                                    <label class="control-label" for="password">Password:</label>
                                    <div class="controls">
                                        <input id="password" name="password" class="form-control" type="password" placeholder="1-8 Characters"  required>
                                    </div>
                                </div>
                                <!-- Confirm Password input-->
                                <div class="control-group">
                                    <label class="control-label" for="password-confirm">Confirm Password:</label>
                                    <div class="controls">
                                        <input id="password-confirm" name="password_confirmation"  class="form-control" type="password" placeholder="1-8 Characters"  required>
                                    </div>
                                </div>
                                <!-- Multiple Radios (inline) -->
                                <!-- Button -->
                                <div class="control-group">
                                    <label class="control-label" for="confirmsignup"></label>
                                    <div class="controls">
                                        <button type="button" id="confirmsignup"  class="btn btn-danger">Sign Up</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $("#confirmsignup").bind("click",function () {
                    $.ajax({
                        url: "{{url("postSignup")}}",
                        method: "POST",
                        data: {
                            _token: $("input[name=_token]").val(),
                            name: $("input[name=name]").val(),
                            email: $("input[name=email]").val(),
                            password: $("input[name=password]").val(),
                            password_confirmation: $("input[name=password_confirmation]").val(),
                        },
                        success: function (res) {
                            if(res.status){
                                location.reload();
                            }else{
                                alert(res.message);
                            }
                        }
                    });
                });
            </script>
            @endif
            <div class="modal-footer">
                <center>
                    <button id="#" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </center>
            </div>
        </div>
    </div>
</ul>
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

