<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowIndividualRequestController extends Controller
{
    public function index_hn()
    {
        return view('database_manager.list_request_congviecyeucau.member.show_member_hn');
    }
    public function index_dn()
    {
        return view('database_manager.list_request_congviecyeucau.member.show_member_dn');
    }
}
