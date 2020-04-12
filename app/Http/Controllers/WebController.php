<?php

namespace App\Http\Controllers;

use App\Category;
//use App\Mail\OrderCreated;
use App\Http\Middleware\CheckAdmin;
use App\Mail\OrderCreated;
use App\Order;
use App\Product;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
//use function MongoDB\BSON\toJSON;


class WebController extends Controller
{
    public function home(Request $request){
//        if(is_admin()){
////            die("admin day");
//        }
        $roles = User::all()->where('user');

        $new = Product::take(6)->orderBy('created_at','desc')->get();
        return view('home-page',['new'=>$new,'roles'=>$roles]);
    }

    public function list($id){
        $category = Category::find($id);
        $list = Product::all()->take(12);
        return view('list',['list'=>$list,'category'=>$category]);
    }

    public function product($id){
        $product = Product::find($id);
        $category_product= Product::where("category_id",$product->category_id)->where('id',"!=",$product->id)->take(9)->get();
        $brand_product= Product::where("brand_id",$product->brand_id)->where('id',"!=",$product->id)->take(9)->get();
        return view('product',['product'=>$product,'category_product'=>$category_product,'brand_product'=>$brand_product]);
    }

    public function shopping($id,Request $request){
        $product = Product::find($id);

        //session(['key'=>'value']); //chuyen gia tri
        $cart = $request->session()->get("cart");
        if($cart == null) {
            $cart = [];
        }
        foreach ($cart as $p){
            if($p->id == $product->id){
                $p->cart_qty = $p->cart_qty+1;
                session(["cart"=>$cart]);
                return redirect()->to("cart");

            }

        }
        $product->cart_qty = 1;
        $cart[] =$product;
        session(["cart"=>$cart]);
           return redirect()->to("cart");
    }


    //cart product
    public function cart(Request $request){
        $cart = $request->session()->get("cart");
        if($cart == null){
            $cart = [];
        }
        return view("cart",['cart'=>$cart]);
    }

    public function clearCart(Request $request){
        $request->session()->forget("cart");
//        $request->session()->forget(['asd','asd']);

        return redirect()->to("/cart");
    }

    public function removeCart($id, Request $request){
        $cart = Product::find($id);
        $request->session()->forget(['$cart'=>$id]);
        return redirect()->to("cart");
    }

    public function filter($c_id,$b_id){
        $product =Product::where('category_id',$c_id)->where('brand_id',$b_id)->get();
    }

    public function checkout(Request $request){
        $cart = $request->session()->get("cart");
        if($request->session()->has("cart")){

            return view("checkout",['cart'=>$cart]);
        }
        return redirect()->to("/checkoutReport");
    }

    public function placeOrder(Request $request){
        $request->validate([
            'customer_name'=>'required | string',
            'shipping_add'=>'required',
            'telephone'=>'required',
            'payment_method'=>'required |string',
        ]);
        $cart = $request->session()->get("cart");
        $grand_total = 0;
        foreach ($cart as $k) {
            $grand_total = ($k->price * $k->cart_qty);
        }
        $order = Order::create([
            'user_id' => Auth::id(),
            'customer_name' => $request->get("customer_name"),
            'shipping_add' => $request->get("shipping_add"),
            'telephone' => $request->get("telephone"),
            'grand_total' => $grand_total,
            'payment_method' => $request->get("payment_method"),
            "status" => Order::STATUS_PENDING
        ]);
        foreach ($cart as $k){
            DB::table("order_product")->insert([
                'order_id'=>$order->id,
                'product_id'=>$k->id,
                'qty'=>$k->cart_qty,
                'price'=>$k->price,
            ]);
        }
        session()->forget("cart");
//        Mail::to(Auth::user()->email)->send(new OrderCreated($order));
        Mail::to('nhatuk9@gmail.com')->send(new OrderCreated($order));
        return redirect()->to("checkout-success");
    }

    public function checkoutSuccess(){
        return view("checkout-success");
    }

    public function checkoutReport(){
        return view("checkoutReport");
    }

  public function postLogin(Request $request){
       $validator = Validator::make($request->all(),[
            "email"=> "required | email",
            "password"=> "required | min:8",
        ]);

        if($validator->fails()){
            return response()->json(["status"=>false,"message"=>$validator->errors()->first()]);
        }
        $email = $request->get("email");
        $pass = $request->get("password");
        if(Auth::attempt(['email'=>$email,'password'=>$pass])){
            return response()->json(['status'=>true,'message'=>"login successfully!!"]);
        }
        return response()->json(['status'=>false,'message'=>"login failure"]);
    }

    public function postSignup(Request $request){
        $validator = Validator::make($request->all(),[
            "email"=> "required|email|string| unique:users",
            "name"=> "required |string| max:255",
            "password"=> "required |confirmed |min:8",
        ]);

        if($validator->fails()){
            return response()->json(["status"=>false,"message"=>$validator->errors()->first()]);
        }
        $email = $request->get("email");
        $pass = $request->get("password");
        $name = $request->get("name");
//        $confirms = $request->get("password_confirmation");
//        dd($request);
        if(Auth::attempt(['email'=>$email,'password'=>$pass,'name'=>$name])){
            return response()->json(['status'=>true,'message'=>"Sign Up successfully!!"]);
        }
        return response()->json(['status'=>false,'message'=>"Sign Up failure"]);
    }

    public function logOut(Request $request){
        $request->session()->flush();
        return redirect()->to("/");
    }


}


