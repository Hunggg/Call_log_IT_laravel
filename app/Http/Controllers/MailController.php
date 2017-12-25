<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class MailController extends Controller
{
    public function get_sendemail(){
        
    }
    public function post_sendemail(Request $request){
        $data = ['hoten'=>'Tùng Nguyễn Thanh'];
        Mail::send('mail.SendEmail',$data,function($message){
            $msg->from('nguyenthanhtung200997@gmail.com','Tùng Nguyễn Thanh');
            $msg->to('lonelystarladykillah@gmail.com','Tung2')->subject('Đây là mail chuyển công việc bộ phận IT ');
        });
    }
}
?>