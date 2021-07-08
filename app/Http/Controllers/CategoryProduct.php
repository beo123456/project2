<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\{Category,Product,Brand,Banner};

class CategoryProduct extends Controller
{

    ////Backend
    // hiển thị list
    function GetList(){
        $category = Category::paginate(5);
        return view('admin.list_category_product',compact('category'));
    }

    // hiển thị adđ
    function GetAdd(){
        return view('admin.add_category_product');
    }
    /// cập nhât
    function PostAdd(Request $request){
        $category = new Category();
        $category->name = $request->name;
        $category->desc = $request->desc;
        $category->status = $request->status;
        // dd($data);
        $category->save();
        return redirect('admin/category')->with('messages','Bạn đã thêm danh mục mới thành công');
    }

    /// tắt trạng thái hiển thị
     function UnactiveCategory($id){
         $category = Category::where('id',$id)->update(['status'=>2]);
         return redirect()->back();
     }

     //// bật trạng thái hiển thị
     function ActiveCategory($id){
        $category = Category::where('id',$id)->update(['status'=>1]);
        return redirect()->back();
     }

     //// Edit
     function GetEdit($id){
         $category = Category::find($id)->toarray();
         return view('admin.edit_category_product',compact('category'));
     }
     function PostEdit(request $r,$id){
         $category = Category::find($id);
         $category->name = $r->name;
         $category->desc = $r->desc;
         $category->status = $r->status;
         $category->save();
         return redirect('admin/category')->with('messages','Bạn đã sửa danh mục thành công');
     }

     /// Delete
     function Delete($id){
        Category::destroy($id);
        return redirect('admin/category')->with('messages','Bạn đã xóa danh mục thành công');
    }

    /////// Frontend
    public function ShowCategoryHome($id){
        $category = Category::find($id)->where('status',1)->get();
        $product = Product::where('category_id',$id)->where('status',1)->paginate(4);
        $brand = Brand::where('status',1)->get();
        $banner = Banner::orderBy('id','desc')->where('status',1)->take(4)->get();

        return view('pages.category.category_frontend',compact('category','product','brand','banner'));

    }




}
