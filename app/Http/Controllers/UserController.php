<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UserRequest;
use App\User;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    function GetListUser(){
        $user = User::all();
        return view('admin.user',compact('user'));
    }
    function GetAddUser(){
        return view('admin.add_user');
    }

    function PostAddUser(request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->phone = $request->phone;
        $user->level = $request->level;
        $user->save();
        return redirect('admin/user')->with('message','Bạn đã thêm quản trị viên thành công');
    }

    function GetEdit($id){
        $user = User::find($id);
        return view('admin.edit_user',compact('user'));
    }
    function PostEdit(request $request, $id){
        $user = User::find($id);
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->level = $request->level;
        $user->save();
        return redirect('admin/user')->with('message','Bạn đã sửa thông tin quản trị viên thành công');
    }

}
