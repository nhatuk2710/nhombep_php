@extends('admin.layout')
@section('listsales')
    <div id="page-wrapper" class="col-lg-6">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                    <h4 class="page-title">Users new</h4></div>
                <div class="col-lg-7 col-sm-6 col-md-6 col-xs-12">
                    <a href="{{url("admin/category/created")}}"class="btn btn-danger
                    pull-right m-l-20 waves-effect waves-light">Add to cart</a>
                    <ol class="breadcrumb">
                        <a href="{{url('admin/category/')}}">Dashboard</a>
                    </ol>
                </div>
                <form action="{{url("admin/category/editUserPost",['id'=>$user->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group has-success">
                        <label for="tt-name" class="control-label"><p>list users</p></label>
                        <p>Name</p>
                        <input id="tt-name" name="name" type="text" value="{{$user->name}}"
                               class="form-control tt-name @if($errors->has("name"))is-invalid @endif">
                        <p>Email</p>
                        <input id="tt-name" name="email" type="text" value="{{$user->email}}"
                               class="form-control tt-name @if($errors->has("email"))is-invalid @endif">
                        <p>Password</p>
                        <input id="tt-name" name="password" type="text" value="{{$user->password}}"
                               class="form-control tt-name @if($errors->has("password"))is-invalid @endif">
{{--                                                <p>product quantity</p>--}}
{{--                                                <input id="tt-name" name="email_verified_at" type="text" value="{{old("email_verified_at")}}"--}}
{{--                                                       class="form-control tt-name @if($errors->has("email_verified_at"))is-invalid @endif">--}}
                        <p>Role</p>
                        <input id="tt-name" name="role" type="number" value="{{$user->role}}"
                               class="form-control tt-name @if($errors->has("role"))is-invalid @endif">
                        <p>Remember_token</p>
                        <input id="tt-name" name="remember_token" type="text" value="{{$user->remember_token}}"
                               class="form-control tt-name @if($errors->has("remember_token"))is-invalid @endif">
                        <p>Avatar</p>
                        <input id="tt-name" name="avt" type="file" value="{{$user->avt}}"
                               class="form-control tt-name @if($errors->has("avt"))is-invalid @endif">
                        @if($errors->has("email") ||("password") ||("role") ||("avt") ||("name"))
                            <p style="color:red">{{$errors->first("email")}}</p>
                            <p style="color:red">{{$errors->first("password")}}</p>
                            {{--                            <p style="color:red">{{$errors->first("email_verifie_at")}}</p>--}}
                            <p style="color:red">{{$errors->first("role")}}</p>
                            {{--                            <p style="color:red">{{$errors->first("remember_token")}}</p>--}}
                            <p style="color:red">{{$errors->first("avt")}}</p>
                            <p style="color:red">{{$errors->first("name")}}</p>
                        @endif
                    </div>
                    <div>
                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                            <i class="fa fa-lock fa-lg"></i>&nbsp;
                            <span id="payment-button-amount">Update new</span>
                            <span id="payment-button-sending" style="display:none;">Sending…</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


