<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\{Category,Brand,Product,Banner};

class HomeController extends Controller
{
    function Index(){
        $banner = Banner::orderBy('id','desc')->where('status',1)->take(4)->get();
        $category = Category::where('status',1)->get();
        $brand = Brand::where('status',1)->get(); 
        $product = Product::where('status',1)->limit(6)->get(); /// lấy sp có stt = 1(hiển thị), giới hạn 4sp hthi
        return view('pages.home_frontend',compact('category','brand','product','banner'));
    }
    function Search(request $request){
        // lấy keyword ng dùng muốn tìm
        $keyword = $request->keyword;
        $banner = Banner::orderBy('id','desc')->where('status',1)->take(4)->get();
        $category = Category::where('status',1)->get();
        $brand = Brand::where('status',1)->get(); 
        // lấy sp vs ddkien, keyword = name spham
        $search_product = Product::where('name','like','%'.$keyword.'%')->where('status',1)->get();
        return view('pages.product.search',compact('category','brand','search_product','banner'));
    }
    
    function GetContact(){
        $category = Category::where('status',1)->get();
        $brand = Brand::where('status',1)->get();
        $banner = Banner::orderBy('id','desc')->where('status',1)->take(4)->get();
        return view('pages.contact.contact',compact('category','brand','banner'));
    }

    
}
