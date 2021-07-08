<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\models\{Product,Order};
use Carbon\carbon;

class AdminController extends Controller
{
    function GetIndex(){
        // dd(bcrypt('123456'));


        return view('admin_login');
    }
    function ShowDashboard(){
          // lấy tháng, năm hiện tại dể đổ dlieu vào biểu đồ
          $month = carbon::now()->format('m');
          $year = carbon::now()->format('Y');
          // lấy tháng hiện tại đổ lại
          for($i=1; $i<=$month; $i++){
              $data['Tháng '.$i] = Order::where('state',2)->WhereMonth('updated_at',$i)->WhereYear('updated_at',$year)->sum('total');
          }
        return view('admin.dashboard',compact('data'));
    }

    function PostIndex(Request $request){
        $email = $request->email;
        $password = $request->password;
              
    
        if(Auth::attempt(['email'=>$email,'password'=>$password])){
                return redirect('admin'); // chuyển hướng đến dashboard

        }else{
                 return redirect()->back()->with('messages','Sai tài khoản hoặc mật khẩu'); /// k thì back lại login
        }
    }

    function Logout(){
        
        Auth::logout();
        return redirect('admin-login');
    }
   
   
}
