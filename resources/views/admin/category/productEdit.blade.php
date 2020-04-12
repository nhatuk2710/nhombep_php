@extends('admin.layout')
@section('listsales')
    <div id="page-wrapper" class="col-lg-6">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                    <h4 class="page-title">Product new</h4></div>
                <div class="col-lg-7 col-sm-6 col-md-6 col-xs-12">
                    <a href="{{url("admin/category/created")}}"class="btn btn-danger
                    pull-right m-l-20 waves-effect waves-light">Add to cart</a>
                    <ol class="breadcrumb">
                        <a href="{{url('admin/category/')}}">Dashboard</a>
                    </ol>
                </div>
                <form action="{{url("admin/category/productUpdate",['id'=>$product->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group has-success">
                        <label for="tt-name" class="control-label"><p>list product</p></label>
                        <p>product name</p>
                        <input id="tt-name" name="product_name" type="text" value="{{$product->product_name}}"
                               class="form-control tt-name @if($errors->has("product_name"))is-invalid @endif">
                        <p>product price</p>
                        <input id="tt-name" name="price" type="text" value="{{$product->price}}"
                               class="form-control tt-name @if($errors->has("price"))is-invalid @endif">
                        <p>product quantity</p>
                        <input id="tt-name" name="quantity" type="text" value="{{$product->quantity}}"
                               class="form-control tt-name @if($errors->has("quantity"))is-invalid @endif">
                        <p>product desc</p>
                        <input id="tt-name" name="product_desc" type="text" value="{{$product->product_desc}}"
                               class="form-control tt-name @if($errors->has("product_desc"))is-invalid @endif">
                        <p>product thumbnail</p>
                        <input id="tt-name" name="thumbnail" type="text" value="{{$product->thumbnail}}"
                               class="form-control tt-name @if($errors->has("thumbnail"))is-invalid @endif">
                        <p>product gallery</p>
                        <input id="tt-name" name="gallery" type="text" value="{{$product->gallery}}"
                               class="form-control tt-name @if($errors->has("gallery"))is-invalid @endif">
                        <p>product image</p>
                        <input id="tt-name" name="image" type="file" value="{{$product->image}}"
                               class="form-control tt-name @if($errors->has("image"))is-invalid @endif">
                        <p>Brand ID</p>
                        <input id="tt-name" name="brand_id" type="text" value="{{$product->brand_id}}"
                               class="form-control tt-name @if($errors->has("brand_id"))is-invalid @endif">
                        <p>Category ID</p>
                        <input id="tt-name" name="category_id" type="text" value="{{$product->category_id}}"
                               class="form-control tt-name @if($errors->has("category_id"))is-invalid @endif">
                        <span class="help-block field-validation-valid"></span>
                        @if($errors->has("product_name") ||("product_desc") ||("thumbnail") ||("gallery") ||("price")
                                            ||("quantity") ||("brand_id") ||("category_id") ||("image"))
                            <p style="color:red">{{$errors->first("product_name")}}</p>
                            <p style="color:red">{{$errors->first("product_desc")}}</p>
                            <p style="color:red">{{$errors->first("thumbnail")}}</p>
                            <p style="color:red">{{$errors->first("gallery")}}</p>
                            <p style="color:red">{{$errors->first("price")}}</p>
                            <p style="color:red">{{$errors->first("quantity")}}</p>
                            <p style="color:red">{{$errors->first("brand_id")}}</p>
                            <p style="color:red">{{$errors->first("category_id")}}</p>
                            <p style="color:red">{{$errors->first("image")}}</p>
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


