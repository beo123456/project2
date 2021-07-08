<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\{Brand,Product,Category,Banner};
class BrandProductController extends Controller
{
        // hiển thị list
        function GetList(){
            $brand = Brand::paginate(5);
            return view('admin.list_brand_product',compact('brand'));
        }
    
        // hiển thị adđ
        function GetAdd(){
            return view('admin.add_brand_product');
        }
        /// cập nhât
        function PostAdd(Request $request){
            $brand = new Brand();
            $brand->name = $request->name;
            $brand->desc = $request->desc;
            $brand->status = $request->status;
            // dd($data);
            $brand->save();
            return redirect('admin/brand')->with('messages','Bạn đã thêm danh mục mới thành công');
        }
    
        /// tắt trạng thái hiển thị
         function UnactiveBrand($id){
             Brand::where('id',$id)->update(['status'=>2]);
             return redirect()->back();
         }
    
         //// bật trạng thái hiển thị
         function ActiveBrand($id){
            Brand::where('id',$id)->update(['status'=>1]);
            return redirect()->back();
         }
    
         //// Edit
         function GetEdit($id){
             $brand = Brand::find($id);
             return view('admin.edit_brand_product',compact('brand'));
         }
         function PostEdit(request $r,$id){
             $brand = Brand::find($id);
             $brand->name = $r->name;
             $brand->desc = $r->desc;
             $brand->status = $r->status;
             $brand->save();
             return redirect('admin/brand')->with('messages','Bạn đã sửa danh mục thành công');
         }
    
         /// Delete
         function Delete($id){
            Brand::destroy($id);
            return redirect('admin/brand')->with('messages','Bạn đã xóa danh mục thành công');
        }

        /////// frontend
        public function ShowBrandHome($id){
            $category = Category::where('status',1)->get();
            $product = Product::where('brand_id',$id)->where('status',1)->paginate(6);
            $brand = Brand::where('status',1)->get();
            $banner = Banner::orderBy('id','desc')->where('status',1)->take(4)->get();
            return view('pages.brand.brand_frontend',compact('category','product','brand','banner'));
        }
    

}


