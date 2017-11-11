<?php

namespace App\Http\Controllers\Leader;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LeaderController extends Controller
{
    public function index_hn()
    {
        echo 'da cai middleware thanh cong cho leader_hn';
    }
    public function index_dn()
    {
        echo 'da cai middleware thanh cong cho leader_dn';
    }
}
