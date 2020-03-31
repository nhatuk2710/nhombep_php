@extends('admin.layout')
@section('listsales')
        <div class="container-fluid">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="white-box">
                    <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
{{--                        <select class="form-control pull-right row b-none">--}}
{{--                            <option>March 2017</option>--}}
{{--                            <option>April 2017</option>--}}
{{--                            <option>May 2017</option>--}}
{{--                            <option>June 2017</option>--}}
{{--                            <option>July 2017</option>--}}
{{--                        </select>--}}
                        <a href="{{url("/admin/category/cateDestroy")}}" class="btn btn-danger btn-xl pull-right">Delete all</a>
                        <a href="{{url("/admin/category/created")}}" class="btn btn-danger btn-xl pulse-loader">Add +</a>
                    </div>
                    <h3 class="box-title">Categories Products</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>CREATED AT</th>
                                <th>UPDATED AT</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($categories as $c)
                            <tr>
                                <td>{{$c->id}}</td>
                                <td class="txt-oflo">{{$c->category_name}}</td>
                                <td>{{$c->created_at}}</td>
                                <td>{{$c->updated_at}}</td>
                                <td>
                                <div class="icon-arrows-button-on">
{{--                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">--}}
                                    <a href="{{url("/admin/category/edit",['id'=>$c->id])}}"
                                       class="btn btn-danger btn-xs pull-right" title="Edit">Edit</a>
{{--                                    </button>--}}
{{--                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">--}}
                                    <a href="{{url("/admin/category/cateDeleteUp",['id'=>$c->id])}}"
                                       class="btn btn-primary btn-xs pull-right">Delete</a>
{{--                                    </button>--}}
                                </div>
                                </td>
                            </tr>
                            <tr class="spacer"></tr>
                            @empty
                                <p>No Products</p>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
@section('chart')
    <div class="container-fluid">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                    <a href="{{url("/admin/category/brandcreate")}}" class="btn btn-danger btn-xl pulse-loader">Add +</a>
                    <a href="{{url("/admin/category/cateDestroy")}}" class="btn btn-danger btn-xl pull-right">Delete all</a>

                </div>
                <h3 class="box-title">Brand Products</h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>CREATED AT</th>
                            <th>UPDATED AT</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($brands as $b)
                            <tr>
                                <td>{{$b->id}}</td>
                                <td class="txt-oflo">{{$b->brand_name}}</td>
                                <td>{{$b->created_at}}</td>
                                <td>{{$b->updated_at}}</td>
                                <td>
                                    <div class="icon-arrows-button-on">
{{--                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">--}}
                                        <a href="{{url("/admin/category/editBrand",['id'=>$b->id])}}"
                                           class="btn btn-danger btn-xs pull-right" title="Edit">Edit</a>
{{--                                        </button>--}}
{{--                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">--}}
                                        <a href="{{url("/admin/category/brandDeleteUp",['id'=>$b->id])}}"
                                           class="btn btn-primary btn-xs pull-right">Delete</a>
{{--                                        </button>--}}
                                    </div>
                                </td>
                            </tr>
                            <tr class="spacer"></tr>
                        @empty
                            <p>No Products</p>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('total')
    <div class="container-fluid">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
{{--                    <select class="form-control pull-right row b-none">--}}
{{--                        <option>March 2017</option>--}}
{{--                        <option>April 2017</option>--}}
{{--                        <option>May 2017</option>--}}
{{--                        <option>June 2017</option>--}}
{{--                        <option>July 2017</option>--}}
{{--                    </select>--}}
                    <a href="{{url("/admin/category/productcreate")}}" class="btn btn-danger btn-xl pulse-loader">Add +</a>
                    <a href="{{url("/admin/category/cateDestroy")}}" class="btn btn-danger btn-xl pull-right">Delete all</a>
                </div>
                <h3 class="box-title">List Products</h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>DESC</th>
                            <th>PRICE</th>
                            <th>QUANTITY</th>
                            <th>BRAND_ID</th>
                            <th>CATEGORY_ID</th>
                            <th>THUMB</th>
                            <th>GALLERY</th>
                            <th>CREATED AT</th>
                            <th>UPDATED AT</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($products as $t)
                            <tr>
                                <td>{{$t->id}}</td>
                                <td class="txt-ofo">{{$t->product_name}}</td>
                                <td class="txt-ofo">{{$t->product_desc}}</td>
                                <td class="txt-ofo">{{$t->price}}</td>
                                <td class="txt-ofo">{{$t->quantity}}</td>
                                <td class="txt-ofo">{{$t->brand_id}}</td>
                                <td class="txt-ofo">{{$t->category_id}}</td>
                                <td class="txt-ofo">{{$t->thumbnail}}</td>
                                <td class="txt-ofo">{{$t->gallery}}</td>
                                <td>{{$t->created_at}}</td>
                                <td>{{$t->updated_at}}</td>
                                <td>
                                    <div class="icon-arrows-button-on">
{{--                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">--}}
                                        <a href="{{url("/admin/category/productEdit",['id'=>$t->id])}}"
                                           class="btn btn-danger btn-xs pull-right col-lg-12 col-xs-12 col-md-12" title="Edit">Edit</a>
{{--                                        </button>--}}
{{--                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">--}}
                                        <a href="{{url("/admin/category/productDeleteUp",['id'=>$t->id])}}"
                                           class="btn btn-primary btn-xs pull-right col-lg-12 col-xs-12 col-md-12" tile="Delete">Delete</a>
{{--                                        </button>--}}
                                    </div>
                                </td>
                            </tr>
                            <tr class="spacer"></tr>
                        @empty
                            <p>No Products</p>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection




