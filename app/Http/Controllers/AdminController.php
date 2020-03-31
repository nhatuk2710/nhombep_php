<?php

namespace App\Http\Controllers;



use App\Product;
use Illuminate\Http\Request;
use App\Category;
use App\Brand;
class AdminController extends Controller
{

//    admin
    public function admin(){
        $categories = Category::all();
        $brands= Brand::all();
        $products= Product::all();
        return view('admin.category.index',['categories'=>$categories,'brands'=>$brands,'products'=>$products]);
    }



//    info cate
    public function categoryCreate(){
        return view('admin.category.created');
    }

    public function categoryStore(Request $request){
        $request->validate([
            "category_name"=>"required|string|unique:category"

        ]);
        try{
            Category::create([
               "category_name"=>$request->get("category_name")
            ]);
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/category");
    }



    public function brandStore (){
        return view('admin.category.brandcreate');
    }

    public function categoryBrand(Request $request){
        $request->validate([
            "brand_name"=>"required|string|unique:brand"
        ]);
        try{
            Brand::create([
                "brand_name"=>$request->get("brand_name")
            ]);
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/category");
    }

//  info product
    public function products(){
        return view('admin.category.productcreate');
    }

    public function productStore(Request $request){
        $request->validate([
            "product_name"=>"required|string|unique:product",
            "product_desc"=>"required|string",
            "thumbnail"=>"required|string",
            "gallery"=>"required|string",
            "price"=>"required|int",
            "quantity"=>"required|int",
            "brand_id"=>"required|int",
            "category_id"=>"required|int",

        ]);
        try{
            Product::create([
                "product_name"=>$request->get("product_name"),
                "product_desc"=>$request->get("product_desc"),
                "thumbnail"=>$request->get("thumbnail"),
                "gallery"=>$request->get("gallery"),
                "price"=>$request->get("price"),
                "quantity"=>$request->get("quantity"),
                "brand_id"=>$request->get("brand_id"),
                "category_id"=>$request->get("category_id"),

            ]);
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/category");
    }

    //edit
    public function categoryEdit($id){
        $category = Category::find($id);

        return view("admin.category.edit",['category'=>$category]);
    }

    public function categoryUpdate($id,Request $request){
        $category = Category::find($id);
        $request->validate([
            "category_name"=> "string|unique:category,category_name,".$id
        ]);
        try {
            $category->update([
               "category_name"=>$request->get('category_name')
            ]);
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/category");
    }

    public function brandEdit($id){
        $brand = Brand::find($id);
        return view("admin.category.editBrand",['brand'=>$brand]);
    }

    public function brandUpdate($id,Request $request){
        $brand = Brand::find($id);
        $request->validate([
            "brand_name"=> "string|unique:brand,brand_name,".$id,
        ]);
        try {
            $brand->update([
               "brand_name"=>$request->get('brand_name')
            ]);
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/category");
    }

    public function productEdit($id){
        $product = Product::find($id);
        return view('admin.category.productEdit',['product'=>$product]);
    }

    public function productUpdate($id,Request $request){
        $product = Product::find($id);
        $request->validate([
            "product_name"=>"string|unique:product,product_name,".$id,
            "product_desc"=>"string|unique:product,product_desc,".$id,
            "thumbnail"=>"string|unique:product,thumbnail,".$id,
            "gallery"=>"string|unique:product,gallery,".$id,
            "price"=>"int|unique:product,price,".$id,
            "quantity"=>"int|unique:product,quantity,".$id,
            "brand_id"=>"int|unique:product,brand_id,".$id,
            "category_id"=>"int|unique:product,category_id,".$id,
        ]);
        try{
            $product->update([
                "product_name"=>$request->get("product_name"),
                "product_desc"=>$request->get("product_desc"),
                "thumbnail"=>$request->get("thumbnail"),
                "gallery"=>$request->get("gallery"),
                "price"=>$request->get("price"),
                "quantity"=>$request->get("quantity"),
                "brand_id"=>$request->get("brand_id"),
                "category_id"=>$request->get("category_id"),

            ]);
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/category");
    }
//    delete

//    public function cateDelete($id){
////        $category = Category::find($id);
////        return view('admin.category.cateDelete');
////    }

    public function cateDeleteUp($id,Request $request){
        $category = Category::find($id);
        $request->validate([
            "category_name"=>"string,category_name,".$id,
        ]);
        try{
            $category->delete([
                "category_name"=>$request->get("category_name")
            ]);
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/category");
    }

    public function cateDestroy($id,Request $request){
        $category = Category::find($id);
        try{
            $category->delete(); //xoa cung crud
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/category");
    }

    public function brandDeleteUp($id,Request $request){
        $brand = Brand::find($id);
        $request->validate([
            "brand_name"=>"string,brand_name,".$id,
        ]);
        try{
            $brand->delete([
                "brand_name"=>$request->get("brand_name")
            ]);
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/category");
    }

    public function productDeleteUp($id,Request $request){
        $product = Product::find($id);
        $request->validate([
            "product_name"=>"string,product_name,".$id,
            "product_desc"=>"string,product_desc,".$id,
            "price"=>"int,price,".$id,
            "quantity"=>"int,quantity,".$id,
            "thumbnail"=>"string,thumbnail,".$id,
            "gallery"=>"string,gallery,".$id,
            "category_id"=>"int,category_id,".$id,
            "brand_id"=>"int,brand_id,".$id,
        ]);
        try{
            $product->delete([
                "product_name"=>$request->get("product_name"),
                "product_desc"=>$request->get("product_desc"),
                "thumbnail"=>$request->get("thumbnail"),
                "gallery"=>$request->get("gallery"),
                "price"=>$request->get("price"),
                "quantity"=>$request->get("quantity"),
                "brand_id"=>$request->get("brand_id"),
                "category_id"=>$request->get("category_id"),
            ]);
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/category");
    }
}
