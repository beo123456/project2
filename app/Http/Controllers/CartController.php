<?php

namespace App\Http\Controllers;
use App\models\{Product,Category,Brand};
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    // Show giỏ hàng
    function GetCart(){
       
        $cart = Cart::content();
        $total = Cart::total(0,'','.');
        return view('pages.cart.cart',compact('cart','total'));
    }

    /// Thêm sp vào giỏ hàng
    function AddProduct(request $request){
        // tìm id sp theo input name = product_id line 24. product detail
        $product = Product::find($request->product_id);

        Cart::add(['id' => $product->id,
        'name' => $product->name,
        'qty' => $request->qty,
        'price' => $product->price,
        'weight' => 0, 
        'options' => ['image' => $product->image]]);
        
        return redirect('cart');
    }

    // xóa sp khỏi giỏ hàng
    function Delete($rowId){
        Cart::update($rowId,0);
        return redirect()->back()->with('messages','Xóa sản phẩm thành công');
    }
    function Update(request $request){
        $rowId = $request->rowId_cart;
        $quantity = $request->quantity;
        Cart::update($rowId,$quantity);
        return redirect()->back()->with('messages','Cập nhật sản phẩm thành công');
    }

    
    
}
