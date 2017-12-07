<?php

namespace App\Http\Controllers\Sub_Leader;

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
        $id_user = Auth::user()->id; 
        
        
        
        $data = tickets::join('priority','tickets.priority_id','=','priority.id')->join('users as a','tickets.created_by','=','a.id')->join('users as b','tickets.assigned_to_id','=','b.id')->join('status','tickets.status_id','=','status.id')->select('tickets.id as id','subject','priority.name_priority as priority','a.employee_name as employee_cre','b.employee_name as employee_assi','deadline','status.name_status as status','created_at','nguoi_lien_quan','team_id','content','status.id as status_id')->where('tickets.id','=',$id)->first();
        
        $priority = priority::get();
        $status = status::get();
        $users = users::get(); 
        $team = team::get();
        if($data->team_id == 1){
            $data->team_id = 'Hà Nội IT';
        }else{
            $data->team_id = 'Đà Nẵng IT';
        }
        //dd($data);
        //echo $data->created_at;
        if($data->status_id == 3 || $data->status_id == 5 || $data->status_id == 6){
            $disabled = true;
        }else {
            $disabled = false;
        }
        
        //result comment mysql
        $ticket_th_data = ticket_thread::join('users','ticket_thread.users_id','=','users.id')->join('tickets','ticket_thread.tickets_id','=','tickets.id')->select('users.employee_name as employee','ticket_thread.content as content','ticket_thread.created_at as created_at')->where('tickets.id','=',$id)->get();
        return view('database_manager.request.sub_leader.edit_subleader_hn')->with(['edit_data'=>$data,'priority_data'=>$priority,'status_data'=>$status,'users_data'=>$users,'team_data'=>$team,'id_user'=>$id_user,'check_status'=>$disabled,'comment_data'=>$ticket_th_data]);
    }
    public function index_dn($id)
    {
        //check individual job
        $id_user = Auth::user()->id; 
        
        
        
        $data = tickets::join('priority','tickets.priority_id','=','priority.id')->join('users as a','tickets.created_by','=','a.id')->join('users as b','tickets.assigned_to_id','=','b.id')->join('status','tickets.status_id','=','status.id')->select('tickets.id as id','subject','priority.name_priority as priority','a.employee_name as employee_cre','b.employee_name as employee_assi','deadline','status.name_status as status','created_at','nguoi_lien_quan','team_id','content','status.id as status_id')->where('tickets.id','=',$id)->first();
        
        $priority = priority::get();
        $status = status::get();
        $users = users::get(); 
        $team = team::get();
        if($data->team_id == 1){
            $data->team_id = 'Hà Nội IT';
        }else{
            $data->team_id = 'Đà Nẵng IT';
        }
        //dd($data);
        //echo $data->created_at;
        if($data->status_id == 3 || $data->status_id == 5 || $data->status_id == 6){
            $disabled = true;
        }else {
            $disabled = false;
        }
        
        //result comment mysql
        $ticket_th_data = ticket_thread::join('users','ticket_thread.users_id','=','users.id')->join('tickets','ticket_thread.tickets_id','=','tickets.id')->select('users.employee_name as employee','ticket_thread.content as content','ticket_thread.created_at as created_at')->where('tickets.id','=',$id)->get();
        
        return view('database_manager.request.sub_leader.edit_subleader_dn')->with(['edit_data'=>$data,'priority_data'=>$priority,'status_data'=>$status,'users_data'=>$users,'team_data'=>$team,'id_user'=>$id_user,'check_status'=>$disabled,'comment_data'=>$ticket_th_data]);
    }
    public function edit_hn(Request $request,$id)
    {
        $edit = tickets::find($id);
        //echo $id;
        $edit->deadline = $request->deadline;
        $edit->team_id = $request->team_id;
        $edit->nguoi_lien_quan = $request->nguoi_lien_quan;
        $edit->assigned_to_id = $request->assign;
        $edit->status_id = $request->trangthai;
        $edit->priority_id = $request->priority;
        $edit->save();
        
         $id_user = Auth::user()->id; 
        
        
        
        $data = tickets::join('priority','tickets.priority_id','=','priority.id')->join('users as a','tickets.created_by','=','a.id')->join('users as b','tickets.assigned_to_id','=','b.id')->join('status','tickets.status_id','=','status.id')->select('tickets.id as id','subject','priority.name_priority as priority','a.employee_name as employee_cre','b.employee_name as employee_assi','deadline','status.name_status as status','created_at','nguoi_lien_quan','team_id','content','status.id as status_id')->where('tickets.id','=',$id)->first();
        
        $priority = priority::get();
        $status = status::get();
        $users = users::get(); 
        $team = team::get();
        if($data->team_id == 1){
            $data->team_id = 'Hà Nội IT';
        }else{
            $data->team_id = 'Đà Nẵng IT';
        }
        //dd($data);
        //echo $data->created_at;
        if($data->status_id == 3 || $data->status_id == 5 || $data->status_id == 6){
            $disabled = true;
        }else {
            $disabled = false;
        }
        
        //result comment mysql
        $ticket_th_data = ticket_thread::join('users','ticket_thread.users_id','=','users.id')->join('tickets','ticket_thread.tickets_id','=','tickets.id')->select('users.employee_name as employee','ticket_thread.content as content','ticket_thread.created_at as created_at')->where('tickets.id','=',$id)->get();
        return view('database_manager.request.sub_leader.edit_subleader_hn')->with(['edit_data'=>$data,'priority_data'=>$priority,'status_data'=>$status,'users_data'=>$users,'team_data'=>$team,'id_user'=>$id_user,'check_status'=>$disabled,'comment_data'=>$ticket_th_data]);
    }
    public function edit_dn(Request $request,$id)
    {
        $edit = tickets::find($id);
        //echo $id;
        $edit->deadline = $request->deadline;
        $edit->team_id = $request->team_id;
        $edit->nguoi_lien_quan = $request->nguoi_lien_quan;
        $edit->assigned_to_id = $request->assign;
        $edit->status_id = $request->trangthai;
        $edit->priority_id = $request->priority;
        $edit->save();
        
         $id_user = Auth::user()->id; 
        
        
        
        $data = tickets::join('priority','tickets.priority_id','=','priority.id')->join('users as a','tickets.created_by','=','a.id')->join('users as b','tickets.assigned_to_id','=','b.id')->join('status','tickets.status_id','=','status.id')->select('tickets.id as id','subject','priority.name_priority as priority','a.employee_name as employee_cre','b.employee_name as employee_assi','deadline','status.name_status as status','created_at','nguoi_lien_quan','team_id','content','status.id as status_id')->where('tickets.id','=',$id)->first();
        
        $priority = priority::get();
        $status = status::get();
        $users = users::get(); 
        $team = team::get();
        if($data->team_id == 1){
            $data->team_id = 'Hà Nội IT';
        }else{
            $data->team_id = 'Đà Nẵng IT';
        }
        //dd($data);
        //echo $data->created_at;
        if($data->status_id == 3 || $data->status_id == 5 || $data->status_id == 6){
            $disabled = true;
        }else {
            $disabled = false;
        }
        
        //result comment mysql
        $ticket_th_data = ticket_thread::join('users','ticket_thread.users_id','=','users.id')->join('tickets','ticket_thread.tickets_id','=','tickets.id')->select('users.employee_name as employee','ticket_thread.content as content','ticket_thread.created_at as created_at')->where('tickets.id','=',$id)->get();
        
        
        return view('database_manager.request.sub_leader.edit_subleader_dn')->with(['edit_data'=>$data,'priority_data'=>$priority,'status_data'=>$status,'users_data'=>$users,'team_data'=>$team,'id_user'=>$id_user,'check_status'=>$disabled,'comment_data'=>$ticket_th_data]);
        
    }
    public function ajax(Request $request)
    {
        if(request()->ajax()){
            $users = users::select('employee_name','id')->where('bo_phan_IT','=',$request->bophanit)->get();
            
            $text = '<label for="assign">Assign</label>
							<br>
							<select name="assign" id="assign" class="form-control">
                            <option value="" selected disabled>Chọn người thực hiện</option>';
            foreach($users as $item){
                $text .= '<br><option value="'.$item->id.'">'.$item->employee_name.'</option>';
            }
            $text .= '</select>';
            return response($text);
        }
        
        
    }
    
    public function comment_ajax(Request $request)
    {
        if(request()->ajax()){
            $ticket_th = new ticket_thread;
            $ticket_th->content = $request->binhluan;
            $ticket_th->users_id = $request->user;
            $ticket_th->tickets_id = $request->ticket;
            
            $ticket_th->save();
            //lay id cua binh luan
            $id_bl = $ticket_th->id;
            
            $ticket_th_data = ticket_thread::join('users','ticket_thread.users_id','=','users.id')->join('tickets','ticket_thread.tickets_id','=','tickets.id')->select('users.employee_name as employee','ticket_thread.content as content','ticket_thread.created_at as created_at')->where('tickets.id','=',$request->ticket)->get();
            
            $text = '';
            foreach($ticket_th_data as $item){
                $text .= '<label>'.$item->employee.'</label><br>';
                $text .= '<div>
                            <p class="glyphicon glyphicon-time">'.$item->created_at.'</p>
                          </div><br>';
                $text .= '<div class="col-md-12 shadow">
                            <div class="fixingbox2 col-md-12">
                                  <h6 class="col-md-12">'.$item->content.'</h6>
                            </div>
	                      </div><br><br>';
            }
            
            return response($text);
        }
    }
}
