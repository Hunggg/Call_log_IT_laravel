<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
     public function index_hn()
    {
        return view('admin.home_member_hn');
    }
    
    public function index_dn()
    {
        return view('admin.home_member_dn');
    }
}
