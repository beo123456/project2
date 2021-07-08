<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\{Order,Product_Order};

class OrderController extends Controller
{
    // hieern thị đơn hàng chưa xử lý
    function ShowOrder(){
        $order = Order::where('state',1)->orderBy('id','desc')->get();
        return view('admin.order',compact('order'));
    }

    // hthi đơn hàng đã xử lý
    function OrderProcessed(){
        $order = Order::where('state',2)->orderBy('id','desc')->get();
        return view('admin.order_processed',compact('order'));
    }

    // chi tiết đơn hàng
    function OrderDetail($order_id){
        $order = Order::find($order_id);
        return view('admin.order_detail',compact('order'));
    }

    /// xử lý đơn hàng
    function Paid($order_id){
        $order = Order::find($order_id)->where('id',$order_id)->update(['state'=>2]);
        
        return redirect('admin/order')->with('messages','Đã Xử Lý 1 Đơn Hàng Thành Công');
    }
}
