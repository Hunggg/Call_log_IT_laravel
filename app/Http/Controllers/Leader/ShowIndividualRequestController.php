<?php

namespace App\Http\Controllers\Leader;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowIndividualRequestController extends Controller
{
    public function index_hn()
    {
        return view('database_manager.list_request_congviecyeucau.leader.show_leader_hn');
    }
    public function index_dn()
    {
        return view('database_manager.list_request_congviecyeucau.leader.show_leader_dn');
    }
}
