<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
     public function index_hn()
    {
        echo 'da cai middleware thanh cong cho member_hn';
    }
    
    public function index_dn()
    {
        echo 'da cai middleware thanh cong cho member_dn';
    }
}
