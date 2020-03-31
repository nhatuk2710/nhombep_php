<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home(){
        $new = Product::take(6)->orderBy('created_at','desc')->get();

        return view('home-page',['new'=>$new]);
    }

    public function list($id){
        $category = Category::find($id);
        $list = Product::all()->take(9);
        return view('list',['list'=>$list,'category'=>$category]);
    }

    public function product($id){
        $product = Product::find($id);
        $category_product= Product::where("category_id",$product->category_id)->where('id',"!=",$product->id)->take(9)->get();
        $brand_product= Product::where("brand_id",$product->brand_id)->where('id',"!=",$product->id)->take(9)->get();
        return view('product',['product'=>$product,'category_product'=>$category_product,'brand_product'=>$brand_product]);
    }
}
