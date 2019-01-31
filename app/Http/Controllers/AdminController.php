<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class AdminController extends Controller
{
	public function index()
	{
		return view('admin.index');
	}

	public function getLogin()
    {
    	return view('admin.auth.login');
    }

	public function postLogin(Request $request)
	{
		$inputs = $request->all();
		$remember = ($request->has('remember')) ? true : false;

		$rules = [
			'email' => 'required',
			'password' => 'required| min: 6'
		];
		$messeage = [
			'email.required' => 'Vui Lòng Nhập Email',
			'password.required' => 'Vui Lòng Nhập Mật Khẩu',
			'password.min' => 'Mật Khẩu Tối Thiểu Dài 6 Kí Tự'
		];


		$validator = Validator::make($inputs, $rules, $messeage);

		if($validator->fails()){
			$request->flash();
			return redirect('/admin/login')->withErrors($validator);
		} else {
			$attempt = Auth::attempt([
				'email' => $inputs['email'],
				'password' => $inputs['password']
			], $remember);
			if($attempt)
				return redirect('/admin');
			else
				return redirect('/admin/login')->with('messeage','Tai khoan hoac mat khau khong dung');
		}
	}

	public function logout()
	{
		Auth::logout();
		return redirect('/admin/login');
	}
}