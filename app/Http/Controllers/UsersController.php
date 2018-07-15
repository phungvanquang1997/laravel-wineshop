<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use Validator;
use DB;
use Auth;
class UsersController extends Controller
{
    //
	function getRegister()
	{
		return view('client.register');
	}
	function postRegister(Request $Request)
	{

		$rules = [
			'txtHoTen' => 'required',
			'txtTenDangNhap' =>'required|min:6|max:255',
			'txtPassword' =>'required|min:6|max:255',
			'txtRePassword'=>'required|same:txtPassword',
			'txtDiaChi' => 'required',
			'Email'=>'required|email',
		];

		$messages = [
			'txtHoTen.required' => 'Họ tên không được bỏ trống',
			'txtTenDangNhap.required' => 'Tên đăng nhập không được bỏ trống',
			'txtPassword.required' => 'Mật khẩu không được bỏ trống',
			'txtDiaChi.required' => 'Địa chỉ không được bỏ trống',
			'Email.required' => 'Email không được bỏ trống',
			'Email.email' =>'email không đúng định dạng',
			'txtPassword.min' => 'Mật khẩu phải hơn 6 kí tự ',
			'txtTenDangNhap.min'=>'Tên đăng nhập phải hơn 6 kí tự',
			'txtRePassword.same'=>'Mật khẩu của bạn không trùng khớp',
		];

		$Validator = Validator::make($Request->all(),$rules,$messages);
		if($Validator->fails())
		{
				return redirect()->back()->withErrors($Validator)->withInput();
		}
		else
		{
		
			date_default_timezone_set('Asia/Ho_Chi_Minh');
			$NgayDK=date('Y/m/d');
			$user = new Users();
			$user->f_Username = $Request->txtTenDangNhap;
			$user->f_Password = md5($Request->txtPassword);
			$user->f_Name = $Request->txtHoTen;
			$user->f_Permission = 0;
			$user->f_DiaChi = $Request->txtDiaChi;
			$user->f_Email = $Request->Email;
			$user->f_NgayTaoTK = $NgayDK;
			$user->save();

			 $Request->session()->put('login', true);
			$Request->session()->put('name', $Request->txtTenDangNhap);
				 return redirect('/');
		}	
	}

    function verifyUser(Request $Request)
    {


    	$rules = [
    		'txtUserName' => 'required',
       		 'txtPassword' => 'required',
    	];
    	$messages = [
 
		'txtUserName.required'=>'tài khoản không được để trống',
		
		'txtPassword.required'=>'mật khẩu không được để trống',
		 
		];

		$Validator = Validator::make($Request->all(),$rules,$messages);
		 
		if($Validator->fails()){
		 	return redirect()->back()->withErrors($Validator)->withInput();
			/*$errors['error']=redirect()->back()->withErrors($Validator);
			 $errors['error']='failed';
			return  view('client.login',$errors);*/
		}
		else{
				$arr=[
				 
				'f_UserName' => $Request->txtUserName,
				 
				'f_Password'=> md5($Request->txtPassword)
				 
				];
					 
			if(DB::table('users')->where($arr)->count()==1){
					 $Request->session()->put('login', true);
					 $Request->session()->put('name', $Request->txtUserName);
					 return redirect('/');
				}
				
		
				else{
					$error = Auth::attempt(['f_Username'=>$Request->txtUserName],['f_Password'=>md5($Request->txtPassword)]) ? true : false;
				/*	$error = 'đăng nhập thất bại';
			*/
				 	return  view('client.test',['error'=>$error]);
				}

				 
			}
		 
		}
    	

    function showLogin()
    {
    	return view('client.login');
    }

    function logOut(Request $request)
    {
    	$request->session()->flush();
    	return redirect()->back();
    }
}
