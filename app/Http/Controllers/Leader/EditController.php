<?php

namespace App\Http\Controllers\Leader;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\tickets;
use App\status;
use App\priority;
use App\rating;
use App\users;
class EditController extends Controller
{
    public function index_hn($id)
    {
        return view('database_manager.request.leader.edit_leader_hn');
    }
    public function index_dn($id)
    {
        return view('database_manager.request.leader.edit_leader_dn');
    }
    public function edit_hn()
    {
        
    }
    public function edit_dn()
    {
        
    }
}
