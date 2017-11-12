<?php

namespace App\Http\Controllers\Sub_Leader;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Sub_LeaderController extends Controller
{
     public function index_hn()
    {
        return view('admin.home_subleader_hn');
    }
     public function index_dn()
    {
        return view('admin.home_subleader_dn');
    }
}
