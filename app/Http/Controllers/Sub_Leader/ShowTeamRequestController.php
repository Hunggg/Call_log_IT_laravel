<?php

namespace App\Http\Controllers\Sub_Leader;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowTeamRequestController extends Controller
{
    public function index_hn()
    {
        return view('database_manager.list_request_congvieccuateam.sub_leader.show_subleader_hn');
    }
    public function index_dn()
    {
        return view('database_manager.list_request_congvieccuateam.sub_leader.show_subleader_dn');
    }
}
