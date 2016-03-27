<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Gregwar\Captcha\CaptchaBuilder;
use DB;
use Cookie;
use App\Http\Controllers\Session;
use Mail;

class CourseController extends Controller
{
    //个人中心之课程
    public function course(){
        //根据session中存的信息，查询个人基本信息
        session_start();
        $name=$_SESSION['name'];
        $arr=DB::table("user1")->where(['u_name'=>$name])->get();
        
        return view('course.course');
    }
}