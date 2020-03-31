@extends('admin.layout')
@section('listsales')
    <div id="page-wrapper" class="col-lg-6">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                    <h4 class="page-title">Categories</h4>
                </div>
                <div class="col-lg-7 col-sm-6 col-md-6 col-xs-12">

                    <a href="{{url("admin/category/brandcreate")}}" class="btn btn-danger
                    pull-right m-l-20 waves-effect waves-light">Add to cart</a>
                    <ol class="breadcrumb">
                        <li><a href="{{url('admin/category/')}}">Dashboard</a></li>
                    </ol>
                </div>

                <form action="{{url("admin/category/store")}}" method="post">
                    @csrf
                    <div class="form-group has-success">
                        <label for="cc-name" class="control-label"><p></p></label>
                        <input id="cc-name" name="category_name" type="text" value="{{old("category_name")}}"
                               class="form-control cc-name @if($errors->has("category_name"))is-invalid @endif">
                        <span class="help-block field-validation-valid"></span>
                        @if($errors->has("category_name"))
                            <p style="color:red">{{$errors->first("category_name")}}</p>
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
