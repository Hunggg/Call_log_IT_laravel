<?php

namespace App\Http\Controllers\Sub_Leader;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\tickets;
use App\priority;
use App\status;
use Carbon\Carbon;
class ShowIndividualRequestController extends Controller
{
    public function index_hn()
    {
         //check individual job
        $id = Auth::user()->id; 
        
        $data = tickets::join('priority','tickets.priority_id','=','priority.id')->join('users as a','tickets.created_by','=','a.id')->join('users as b','tickets.assigned_to_id','=','b.id')->join('status','tickets.status_id','=','status.id')->select('tickets.id as id','subject','priority.name_priority as priority','a.employee_name as employee_cre','b.employee_name as employee_assi','deadline','status.name_status as status','created_at')->where('a.id','=',$id)->orderBy('created_at','desc')->get();
        
        return view('database_manager.list_request_congviecyeucau.sub_leader.show_subleader_hn')->with([
            'indi_data' => $data
        ]);
    }
    public function index_dn()
    {
         //check individual job
        $id = Auth::user()->id; 
        
        $data = tickets::join('priority','tickets.priority_id','=','priority.id')->join('users as a','tickets.created_by','=','a.id')->join('users as b','tickets.assigned_to_id','=','b.id')->join('status','tickets.status_id','=','status.id')->select('tickets.id as id','subject','priority.name_priority as priority','a.employee_name as employee_cre','b.employee_name as employee_assi','deadline','status.name_status as status','created_at')->where('a.id','=',$id)->orderBy('created_at','desc')->get();
        
        return view('database_manager.list_request_congviecyeucau.sub_leader.show_subleader_dn')->with([
            'indi_data' => $data
        ]);
    }

    
    
    public function new_hn()
    {
        //check individual job
        $id = Auth::user()->id; 
        
        $data = tickets::join('priority','tickets.priority_id','=','priority.id')->join('users as a','tickets.created_by','=','a.id')->join('users as b','tickets.assigned_to_id','=','b.id')->join('status','tickets.status_id','=','status.id')->select('tickets.id as id','subject','priority.name_priority as priority','a.employee_name as employee_cre','b.employee_name as employee_assi','deadline','status.name_status as status','created_at')->where('a.id','=',$id)->where('tickets.status_id','=',1)->orderBy('created_at','desc')->get();
        
        return view('database_manager.list_request_congviecyeucau.sub_leader.show_subleader_hn')->with([
            'indi_data' => $data
        ]);
    }

    public function inprogress_hn(){

        //check individual job
        $id = Auth::user()->id; 
        
        $data = tickets::join('priority','tickets.priority_id','=','priority.id')->join('users as a','tickets.created_by','=','a.id')->join('users as b','tickets.assigned_to_id','=','b.id')->join('status','tickets.status_id','=','status.id')->select('tickets.id as id','subject','priority.name_priority as priority','a.employee_name as employee_cre','b.employee_name as employee_assi','deadline','status.name_status as status','created_at')->where('a.id','=',$id)->where('tickets.status_id','=',2)->orderBy('created_at','desc')->get();
        
        return view('database_manager.list_request_congviecyeucau.sub_leader.show_subleader_hn')->with([
            'indi_data' => $data
        ]);
    }

    public function resolved_hn(){
        //check individual job
        $id = Auth::user()->id; 
        
        $data = tickets::join('priority','tickets.priority_id','=','priority.id')->join('users as a','tickets.created_by','=','a.id')->join('users as b','tickets.assigned_to_id','=','b.id')->join('status','tickets.status_id','=','status.id')->select('tickets.id as id','subject','priority.name_priority as priority','a.employee_name as employee_cre','b.employee_name as employee_assi','deadline','status.name_status as status','created_at')->where('a.id','=',$id)->where('tickets.status_id','=',3)->orderBy('created_at','desc')->get();
        
        return view('database_manager.list_request_congviecyeucau.sub_leader.show_subleader_hn')->with([
            'indi_data' => $data
        ]);
    }

    public function outofdate_hn(){
        //code here
        $id = Auth::user()->id; 
        
        $curTime = Carbon::now();
        
        $data = tickets::join('priority','tickets.priority_id','=','priority.id')->join('users as a','tickets.created_by','=','a.id')->join('users as b','tickets.assigned_to_id','=','b.id')->join('status','tickets.status_id','=','status.id')->select('tickets.id as id','subject','priority.name_priority as priority','a.employee_name as employee_cre','b.employee_name as employee_assi','deadline','status.name_status as status','created_at')->where('a.id','=',$id)->where('tickets.deadline','<',$curTime)->where('tickets.status_id','<>',5)->where('tickets.status_id','<>',6)->orderBy('created_at','desc')->get();
        
        return view('database_manager.list_request_congviecyeucau.sub_leader.show_subleader_hn')->with([
            'indi_data' => $data
        ]);
    }



    public function new_dn()
    {
        //check individual job
        $id = Auth::user()->id; 
        
        $data = tickets::join('priority','tickets.priority_id','=','priority.id')->join('users as a','tickets.created_by','=','a.id')->join('users as b','tickets.assigned_to_id','=','b.id')->join('status','tickets.status_id','=','status.id')->select('tickets.id as id','subject','priority.name_priority as priority','a.employee_name as employee_cre','b.employee_name as employee_assi','deadline','status.name_status as status','created_at')->where('a.id','=',$id)->where('tickets.status_id','=',1)->orderBy('created_at','desc')->get();
        
        return view('database_manager.list_request_congviecyeucau.sub_leader.show_subleader_dn')->with([
            'indi_data' => $data
        ]);
    }

    public function inprogress_dn(){

        //check individual job
        $id = Auth::user()->id; 
        
        $data = tickets::join('priority','tickets.priority_id','=','priority.id')->join('users as a','tickets.created_by','=','a.id')->join('users as b','tickets.assigned_to_id','=','b.id')->join('status','tickets.status_id','=','status.id')->select('tickets.id as id','subject','priority.name_priority as priority','a.employee_name as employee_cre','b.employee_name as employee_assi','deadline','status.name_status as status','created_at')->where('a.id','=',$id)->where('tickets.status_id','=',2)->orderBy('created_at','desc')->get();
        
        return view('database_manager.list_request_congviecyeucau.sub_leader.show_subleader_dn')->with([
            'indi_data' => $data
        ]);
    }

    public function resolved_dn(){
        //check individual job
        $id = Auth::user()->id; 
        
        $data = tickets::join('priority','tickets.priority_id','=','priority.id')->join('users as a','tickets.created_by','=','a.id')->join('users as b','tickets.assigned_to_id','=','b.id')->join('status','tickets.status_id','=','status.id')->select('tickets.id as id','subject','priority.name_priority as priority','a.employee_name as employee_cre','b.employee_name as employee_assi','deadline','status.name_status as status','created_at')->where('a.id','=',$id)->where('tickets.status_id','=',3)->orderBy('created_at','desc')->get();
        
        return view('database_manager.list_request_congviecyeucau.sub_leader.show_subleader_dn')->with([
            'indi_data' => $data
        ]);
    }

    public function outofdate_dn(){
        //code here
        $id = Auth::user()->id; 
        
        $curTime = Carbon::now();
        
        $data = tickets::join('priority','tickets.priority_id','=','priority.id')->join('users as a','tickets.created_by','=','a.id')->join('users as b','tickets.assigned_to_id','=','b.id')->join('status','tickets.status_id','=','status.id')->select('tickets.id as id','subject','priority.name_priority as priority','a.employee_name as employee_cre','b.employee_name as employee_assi','deadline','status.name_status as status','created_at')->where('a.id','=',$id)->where('tickets.deadline','<',$curTime)->where('tickets.status_id','<>',5)->where('tickets.status_id','<>',6)->orderBy('created_at','desc')->get();
        
        return view('database_manager.list_request_congviecyeucau.sub_leader.show_subleader_dn')->with([
            'indi_data' => $data
        ]);
    }
}

