<?php

namespace App\Http\Controllers\Leader;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
//thu vien check tai khoan auth
use Illuminate\Support\Facades\Auth;
//model
use App\tickets;
use App\users;
class CreateRequestController extends Controller
{
    public function stripVN($str) {
    $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
    $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/",'e', $str);
    $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
    $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
    $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
    $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
    $str = preg_replace("/(đ)/", 'd', $str);

    $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
    $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
    $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
    $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
    $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
    $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
    $str = str_replace("/(Đ)/", 'D', $str);
    $str=str_replace(" ", "-", $str);
    return $str;
  }
    public function index_hn()
    {
        return view('database_manager.request.leader.new_leader_hn');
    }
    
    public function create_hn()
    {
        
    }
    
    public function create_dn(Request $request)
    {
        //them info nhap tren web
        $tickets = new tickets;
        $tickets->subject = $request->subject;
        $tickets->priority_id = $request->priority;
        $tickets->deadline = $request->deadline;
        $tickets->team_id = $request->team_id;
        $tickets->nguoi_lien_quan = $request->nguoi_lien_quan;
        $tickets->content = $request->content;
        
        //them info keo theo mac dinh
        $tickets->created_by = Auth::user()->id;
        $tickets->assigned_to_id = 8;//cho luon thang id ben users cho nhanh cai nay fix sau 
        $tickets->status_id = 1;//mac dinh la new
        $tickets->rating_id = 1;//co 3 trang thai mac dinh la  khog co danh gia
        $tickets->save();
        
        
        //xu ly url anh va save anh
        $id = $tickets->id;
        $subject = $tickets->subject;
        $tickets_fix = tickets::find($id);
        $text = $id.$this->stripVN($subject);
        $text_fix = substr($text,0,45);
        
        if($request->hasFile('file-anh')){
          $logo = $request->file('file-anh');
            //set name + phan mo rong nhu jps, png
               $logo_name = $text_fix.'.'.$logo->getClientOriginalExtension();
            
               $tickets_fix->url_image = 'storage/app/public/file_anh/'.$logo_name;
               $logo->move('storage/app/public/file_anh', $logo_name);
        }
        
        $tickets_fix->save();
        
        return Redirect::back();
    }
    
    public function index_dn()
    {
        return view('database_manager.request.leader.new_leader_dn');
    }
}
