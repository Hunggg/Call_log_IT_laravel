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
        }
    }
    public function login(Request $request)
    {
        if (Auth::attempt(['name' => $request->username, 'password' => $request->password,'level' => 1])) {
            if(Auth::attempt(['name' => $request->username,'password' => $request->password,'bo_phan_IT' => 1])){
                return redirect()->route('leader_hn');    
            } else {
                return redirect()->route('leader_dn');
            }
            
        } elseif (Auth::attempt(['name' => $request->username, 'password' => $request->password,'level'=>2])) {
        	if(Auth::attempt(['name' => $request->username,'password' => $request->password,'bo_phan_IT' => 1])){
                return redirect()->route('sub_leader_hn');    
            } else {
                return redirect()->route('sub_leader_dn');
            }
        } elseif (Auth::attempt(['name' => $request->username, 'password' => $request->password,'level'=>3])) {
        	if(Auth::attempt(['name' => $request->username,'password' => $request->password,'bo_phan_IT' => 1])){
                return redirect()->route('member_hn');    
            } else {
                return redirect()->route('member_dn');
            }
        } else {
        	return redirect()->back();
        }
        
    }
}
