<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\{Product,Category,Brand,Banner};



class ProductController extends Controller
{
    /////backend
    // hiển thị list
    function GetList(){
        $category = Category::all();
        $brand = Brand::all();
        $product = Product::orderby('id','desc')->paginate(5);
        return view('admin.list_product',compact('product'));
    }

    // hiển thị adđ
    function GetAdd(){
        $category = Category::orderBy('id','desc')->get();
        $brand = Brand::orderBy('id','desc')->get();
        return view('admin.add_product',compact('category','brand'));
    }
    // /// cập nhât
    function PostAdd(Request $request){
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->desc = $request->desc;
        $product->content = $request->content;

        // nếu post file trong input image
        if($request->hasFile('image')){
            $file = $request->image;
            $file_name = str_slug($request->name).'.'.$file->getClientOriginalExtension(); /// lay đuôi file
            $file->move('public/backend/images',$file_name); /// chuyển ảnh upload vào 
            $product->image = $file_name; //  upload
        }else{
            $product->image = '';
        }

        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->status = $request->status;
        // dd($product);
        $product->save();
        return redirect('admin/product')->with('messages','Bạn đã thêm sản phẩm thành công');
    }

    /// tắt trạng thái hiển thị
     function UnactiveProduct($id){
         Product::where('id',$id)->update(['status'=>2]);
         return redirect()->back();
     }

     //// bật trạng thái hiển thị
     function ActiveProduct($id){
        Product::where('id',$id)->update(['status'=>1]);
        return redirect()->back();
     }

     //// Edit
     function GetEdit($id){
         $product = Product::find($id);
         $category = Category::all();
         $brand = Brand::all();
         return view('admin.edit_product',compact('product','category','brand'));
     }
     function PostEdit(request $request,$id){
         $product = Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->desc = $request->desc;
        $product->content = $request->content;

        // nếu post file trong input image
        if($request->hasFile('image')){
            $file = $request->image;
            $file_name = str_slug($request->name).'.'.$file->getClientOriginalExtension(); /// lay đuôi file
            $file->move('public/backend/images',$file_name); /// chuyển ảnh upload vào 
            $product->image = $file_name; //  upload
        }else{
            $product->image = '../../../public/backend/images/'.$product->image; /// không post new image thì giữ image cũ
        }

        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->status = $request->status;
        // dd($product);
        $product->save();
        return redirect('admin/product')->with('messages','Bạn đã sửa sản phẩm thành công');
     }

     /// Delete
     function Delete($id){
         Product::destroy($id);
         return redirect()->back()->with('messages','Bạn đã xóa danh mục sản phẩm thành công');
     }


     //frontend
     function ProductDetail($id){
        $category = Category::where('status',1)->get();
        $brand = Brand::where('status',1)->get();
         $product = Product::where('id',$id)->get();
         $banner = Banner::orderBy('id','desc')->where('status',1)->take(4)->get();
         return view('pages.product.product_detail',compact('product','category','brand','banner'));
     }

     function ListProduct(){
        $banner = Banner::orderBy('id','desc')->where('status',1)->take(4)->get();
        $product = Product::where('status',1)->paginate(9);
        $category = Category::where('status',1)->get();
        $brand = Brand::where('status',1)->get();
         return view('pages.product.list_product',compact('product','banner','category','brand'));
     }


}
