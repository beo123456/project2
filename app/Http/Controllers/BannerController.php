<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Banner;

class BannerController extends Controller
{
    ////backend
    function ListBanner(){
        $banner = Banner::orderBy('id','desc')->paginate(4);
        return view('admin.Banner',compact('banner'));
    }

    function GetAddBanner(){
        return view('admin.add_banner');
    }
    function PostAddBanner(request $request){
        $banner = new Banner();
        $banner->name = $request->name;
        $banner->desc = $request->desc;
        $banner->status = $request->status;
        if($request->hasFile('image')){
            $file = $request->image;
            $file_name = str_slug($request->name).'.'.$file->getClientOriginalExtension();
            $file->move('public/backend/banner',$file_name);
            $banner->image = $file_name;
        }
        $banner->save();
        return redirect('admin/banner')->with('messages','Bạn đã thêm banner thành công');
    }
    ///hthi banner
    function ActiveBanner($id){
        $banner = Banner::where('id',$id)->update(['status'=>1]);
        return redirect()->back();
    }
    /// ẩn banner
    function UnactiveBanner($id){
        $banner = Banner::where('id',$id)->update(['status'=>2]);
        return redirect()->back();
    }

    function Delete($id){
        Banner::destroy($id);
        return redirect()->back();
    }

}
