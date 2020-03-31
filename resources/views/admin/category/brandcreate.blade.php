@extends('admin.layout')
@section('listsales')
<div id="page-wrapper" class="col-lg-6">
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
            <h4 class="page-title">Brand new</h4></div>
        <div class="col-lg-7 col-sm-6 col-md-6 col-xs-12">
            <a href="{{url("admin/category/productcreate")}}" class="btn btn-danger
                    pull-right m-l-20 waves-effect waves-light">Add to cart</a>
            <ol class="breadcrumb">
                <a href="{{url('admin/category/')}}">Dashboard</a>
            </ol>
        </div>
        <form action="{{url("admin/category/brandstore")}}" method="post">
        @csrf
        <div class="form-group has-success">
            <label for="bb-name" class="control-label"><p></p></label>
            <input id="bb-name" name="brand_name" type="text" value="{{old("brand_name")}}"
            class="form-control bb-name @if($errors->has("brand_name"))is-invalid @endif">
            <span class="help-block field-validation-valid"></span>
            @if($errors->has("brand_name"))
            <p style="color:red">{{$errors->first("brand_name")}}</p>
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
