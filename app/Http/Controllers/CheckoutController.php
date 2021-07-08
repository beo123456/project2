<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\{Category,Product,Brand,Order,Product_Order};
use Cart;


class CheckoutController extends Controller
{
    function Checkout(){
        $total = Cart::total(0,'','.');
        $cart = Cart::content();
        $category = Category::all();
        $product = Product::all();
        $brand = Brand::all();
    return view('pages.checkout.checkout',compact('total','brand','product','category','cart'));  
  }

    function AddOrder(request $request){
        
        $order = new Order();
        $order->name = $request->name;
        $order->address = $request->address;
        $order->phone = $request->phone;
        $order->note = $request->note;
        $order->total = Cart::total(0,'','');
        $order->save();
        // vòng lặp, lấy thông tin các sản phẩm cùng với id người order
        foreach(Cart::content() as $value){
            $product_order = new Product_Order();
            $product_order->image = $value->options->image;
            $product_order->name = $value->name;
            $product_order->price = $value->price;
            $product_order->quantity = $value->qty;
            $product_order->order_id = $order->id;
            $product_order->save();
        }
        /// xóa giỏ hàng đã order thành công
        Cart::destroy();
        return redirect()->back()->with('message','Bạn đã đặt hàng thành công');
    }


    



  
    
}
