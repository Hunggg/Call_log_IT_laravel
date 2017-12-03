<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\tickets;
use App\priority;
use App\status;
class ShowIndividualRequestController extends Controller
{
    public function index_hn()
    {
         //check individual job
        $id = Auth::user()->id; 
        
        $data = tickets::join('priority','tickets.priority_id','=','priority.id')->join('users as a','tickets.created_by','=','a.id')->join('users as b','tickets.assigned_to_id','=','b.id')->join('status','tickets.status_id','=','status.id')->select('tickets.id as id','subject','priority.name_priority as priority','a.employee_name as employee_cre','b.employee_name as employee_assi','deadline','status.name_status as status')->where('a.id','=',$id)->paginate(10);
        
        return view('database_manager.list_request_congviecyeucau.member.show_member_hn')->with([
            'indi_data' => $data
        ]);
    }

    public function new_hn(){
        $id = Auth::user()->id; 
        
        $data = tickets::join('priority','tickets.priority_id','=','priority.id')->join('users as a','tickets.created_by','=','a.id')->join('users as b','tickets.assigned_to_id','=','b.id')->join('status','tickets.status_id','=','status.id')->select('tickets.id as id','subject','priority.name_priority as priority','a.employee_name as employee_cre','b.employee_name as employee_assi','deadline','status.name_status as status')->where('a.id','=',$id)->where('tickets.status_id','=',1)->paginate(10);
        
        return view('database_manager.list_request_congviecduocgiao.member.show_member_hn')->with([
            'indi_data' => $data
        ]);
    }


    public function inprogress_hn(){
        
        $id = Auth::user()->id; 
        
        $data = tickets::join('priority','tickets.priority_id','=','priority.id')->join('users as a','tickets.created_by','=','a.id')->join('users as b','tickets.assigned_to_id','=','b.id')->join('status','tickets.status_id','=','status.id')->select('tickets.id as id','subject','priority.name_priority as priority','a.employee_name as employee_cre','b.employee_name as employee_assi','deadline','status.name_status as status')->where('a.id','=',$id)->where('tickets.status_id','=',2)->paginate(10);
        
        return view('database_manager.list_request_congviecduocgiao.member.show_member_hn')->with([
            'indi_data' => $data
        ]);
    }
        
    public function resolved_hn(){
         
        $id = Auth::user()->id; 
                
        $data = tickets::join('priority','tickets.priority_id','=','priority.id')->join('users as a','tickets.created_by','=','a.id')->join('users as b','tickets.assigned_to_id','=','b.id')->join('status','tickets.status_id','=','status.id')->select('tickets.id as id','subject','priority.name_priority as priority','a.employee_name as employee_cre','b.employee_name as employee_assi','deadline','status.name_status as status')->where('a.id','=',$id)->where('tickets.status_id','=',3)->paginate(10);
                
            return view('database_manager.list_request_congviecyeucau.member.show_member_hn')->with([
                'indi_data' => $data
            ]);
    }
        
        public function outofdate_hn(){
            //code here
        }


    public function index_dn()
    {
         //check individual job
        $id = Auth::user()->id; 
        
        $data = tickets::join('priority','tickets.priority_id','=','priority.id')->join('users as a','tickets.created_by','=','a.id')->join('users as b','tickets.assigned_to_id','=','b.id')->join('status','tickets.status_id','=','status.id')->select('tickets.id as id','subject','priority.name_priority as priority','a.employee_name as employee_cre','b.employee_name as employee_assi','deadline','status.name_status as status')->where('a.id','=',$id)->paginate(10);
        
        return view('database_manager.list_request_congviecyeucau.member.show_member_dn')->with([
            'indi_data' => $data
        ]);
    }

    public function new_dn(){
        $id = Auth::user()->id; 
        
        $data = tickets::join('priority','tickets.priority_id','=','priority.id')->join('users as a','tickets.created_by','=','a.id')->join('users as b','tickets.assigned_to_id','=','b.id')->join('status','tickets.status_id','=','status.id')->select('tickets.id as id','subject','priority.name_priority as priority','a.employee_name as employee_cre','b.employee_name as employee_assi','deadline','status.name_status as status')->where('a.id','=',$id)->where('tickets.status_id','=',1)->paginate(10);
        
        return view('database_manager.list_request_congviecduocgiao.member.show_member_dn')->with([
            'indi_data' => $data
        ]);
    }


    public function inprogress_dn(){
        
        $id = Auth::user()->id; 
        
        $data = tickets::join('priority','tickets.priority_id','=','priority.id')->join('users as a','tickets.created_by','=','a.id')->join('users as b','tickets.assigned_to_id','=','b.id')->join('status','tickets.status_id','=','status.id')->select('tickets.id as id','subject','priority.name_priority as priority','a.employee_name as employee_cre','b.employee_name as employee_assi','deadline','status.name_status as status')->where('a.id','=',$id)->where('tickets.status_id','=',2)->paginate(10);
        
        return view('database_manager.list_request_congviecduocgiao.member.show_member_dn')->with([
            'indi_data' => $data
        ]);
    }
        
    public function resolved_dn(){
         
        $id = Auth::user()->id; 
                
        $data = tickets::join('priority','tickets.priority_id','=','priority.id')->join('users as a','tickets.created_by','=','a.id')->join('users as b','tickets.assigned_to_id','=','b.id')->join('status','tickets.status_id','=','status.id')->select('tickets.id as id','subject','priority.name_priority as priority','a.employee_name as employee_cre','b.employee_name as employee_assi','deadline','status.name_status as status')->where('a.id','=',$id)->where('tickets.status_id','=',3)->paginate(10);
                
            return view('database_manager.list_request_congviecyeucau.member.show_member_dn')->with([
                'indi_data' => $data
            ]);
    }
        
        public function outofdate_dn(){
            //code here
        }
}
