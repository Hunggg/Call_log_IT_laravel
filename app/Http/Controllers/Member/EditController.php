<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\tickets;
use App\status;
use App\priority;
use App\rating;
use App\users;
use App\team;
use App\ticket_thread;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class EditController extends Controller
{
    public function index_hn($id)
    {
        return view('database_manager.request.member.edit_member_hn');
    }
    public function index_dn($id)
    {
        return view('database_manager.request.member.edit_member_dn');
    }
    public function edit_hn()
    {
        
    }
    public function edit_dn()
    {
        
    }
    //ajax lua chon bo phan it xuat hien cai list selected o duoi cai modal giong ben leader DN vi day la member ko duoc sua data ticket nen disable button change data
    /*public function ajax(Request $request)
    {
        
    }*/
    //ajax comment ko phai load lai trang
    public function comment_ajax(Request $request)
    {
        
    }
}
