<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class MailController extends Controller
{
    public function get_sendemail(){
        
    }
    public function post_sendemail(Request $request){
        $data = ['hoten'=>'Tran Quang Hung'];
        Mail::send('mail.SendEmail',$data,function($message){
            $msg->from('hungcan1997@gmail.com','Quang Hưng');
            $msg->to('hungcan197@gmail.com','Quang Hưng 2')->subject('Đây là mail chuyển công việc bộ phận IT ')
        });
    }
}
