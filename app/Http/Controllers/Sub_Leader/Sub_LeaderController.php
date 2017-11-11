<?php

namespace App\Http\Controllers\Sub_Leader;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Sub_LeaderController extends Controller
{
     public function index_hn()
    {
        echo 'da cai middleware thanh cong cho sub_leader_hn';
    }
     public function index_dn()
    {
        echo 'da cai middleware thanh cong cho sub_leader_dn';
    }
}
