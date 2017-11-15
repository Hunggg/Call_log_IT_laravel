<?php

namespace App\Http\Controllers\Sub_Leader;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreateRequestController extends Controller
{
    public function index_hn()
    {
        return view('database_manager.request.sub_leader.new_subleader_hn');
    }
    
    public function index_dn()
    {
        return view('database_manager.request.sub_leader.new_subleader_dn');
    }
}
