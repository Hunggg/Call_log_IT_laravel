<?php

namespace App\Http\Controllers\Leader;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LeaderController extends Controller
{
    public function index_hn()
    {
        return view('admin.home_leader_hn');
    }
    public function index_dn()
    {
        return view('admin.home_leader_dn');
    }
}
