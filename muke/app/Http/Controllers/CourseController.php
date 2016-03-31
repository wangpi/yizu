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
        $name=$_SESSION['u_id'];
        $arr=DB::table("user1")->where(['u_id'=>$name])->get();
        
        $name=$_SESSION['u_id'];//邮箱
        //查询职位id
        $re=DB::table('user1')->where(['u_id'=>$name])->get();
        $zhiwei=$re[0]['u_zhiwei'];
        $userid=$re[0]['u_id'];
        //联查个人信息(可以获得pname)
        $arr=DB::table('position')->join('user1',"position.pid","=","user1.u_zhiwei")->where(['u_zhiwei'=>$zhiwei])->get();
        //联查个人详细信息
        $brr=DB::table('xuexi')->join('user1',"xuexi.u_id","=","user1.u_id")->where(['user1.u_id'=>$userid])->get();

        for($i=0;$i<count($brr);$i++){
            $z_id=$brr[$i]['v_id'];
            $crr=DB::table("video")->where(['v_id'=>$z_id])->get();
            $brr[$i]['dd']=$crr;
            foreach($brr[$i]['dd'] as $key=>$val){
                $re=DB::table("zhangjie")->where(['z_id'=>$val['z_id']])->get();
                $brr[$i]['dd'][$key]['zhang']=$re;
            }
            foreach($brr[$i]['dd'][$key]['zhang'] as $kk=>$vv){
                $lay=DB::table("course")->where(['c_id'=>$vv['k_id']])->get();
                $brr[$i]['dd'][$key]['zhang'][$kk]['course']=$lay;
            }


        }

        //print_r($brr);
      return view('course.course',['arr'=>$arr,'brr'=>$brr]);

    }
}
