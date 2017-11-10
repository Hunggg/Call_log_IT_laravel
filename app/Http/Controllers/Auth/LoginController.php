<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
//use Validator;
use App\users;
use Illuminate\Http\Request\LoginRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    public function index()
    {
        //kiem tra dang nhap chua
        if(!Auth::check()) {
            return view('login.login');
        }//neu dang nhap roi se kiem tra level cua nguoi dung roi vao luon 
    	else {
            if(Auth::user()->level == 1)
                return redirect('leader');
            elseif (Auth::user()->level == 2) {
                return redirect('sub-leader');
            } elseif (Auth::user()->level == 3) {
                return redirect('member');
            }
        }
    }
    public function login(Request $request)
    {
        if (Auth::attempt(['name' => $request->username, 'password' => $request->password,'level' => 1])) {
            return redirect()->route('leader');
        } elseif (Auth::attempt(['name' => $request->username, 'password' => $request->password,'level'=>2])) {
        	return redirect()->route('sub_leader');
        } elseif (Auth::attempt(['name' => $request->username, 'password' => $request->password,'level'=>3])) {
        	return redirect()->route('member');
        } else {
        	return redirect()->back();
        }
        
    }
}
