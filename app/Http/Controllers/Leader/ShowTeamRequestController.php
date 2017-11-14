<?php

namespace App\Http\Controllers\Leader;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowTeamRequestController extends Controller
{
    public function index_hn()
    {
        return view('database_manager.list_request_congvieccuateam.leader.show_leader_hn');
    }
    public function index_dn()
    {
        return view('database_manager.list_request_congvieccuateam.leader.show_leader_dn');
    }
}
