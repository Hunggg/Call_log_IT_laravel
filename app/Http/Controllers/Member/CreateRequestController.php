<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreateRequestController extends Controller
{
    public function index_hn()
    {
        return view('database_manager.request.member.new_member_hn');
    }
    
    public function index_dn()
    {
        return view('database_manager.request.member.new_member_dn');
    }
}
