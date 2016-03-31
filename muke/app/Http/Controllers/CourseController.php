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

        $id=$_SESSION['u_id'];//用户id
        //查询职位id
        $re=DB::table('user1')->where(['u_id'=>$id])->get();
        $id=$_SESSION['u_id'];//邮箱

        //查询职位id
        $re=DB::table('user1')->where(['u_id'=>$id])->get();

        $zhiwei=$re[0]['u_zhiwei'];
        $userid=$re[0]['u_id'];
        //联查个人信息(可以获得pname)
        $arr=DB::table('position')->join('user1',"position.pid","=","user1.u_zhiwei")->where(['u_id'=>$userid])->get();
        //print_r($arr);die;
        //联查个人详细信息
        $brr=DB::table('xuexi')->join('user1',"xuexi.u_id","=","user1.u_id")->where(['user1.u_id'=>$userid])->get();
        //print_r($brr);die;
        //如果该人没有学习过任何课程
        if(empty($brr)){
            return view('course.course1',['arr'=>$arr]);
        }else{
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
            //return view('layouts.master',['arr'=>$arr,'brr'=>$brr]);
            return view('course.course',['arr'=>$arr,'brr'=>$brr]);
        }

    }
    public function head(){
        //根据session中存的信息，查询个人基本信息
        session_start();
        $id=$_SESSION['u_id'];//邮箱
        //查询职位id
        $re=DB::table('user1')->where(['u_id'=>$id])->get();
        $zhiwei=$re[0]['u_zhiwei'];
        $userid=$re[0]['u_id'];
        //联查个人信息(可以获得pname)
        $arr=DB::table('position')->join('user1',"position.pid","=","user1.u_zhiwei")->where(['u_id'=>$userid])->get();
        //print_r($arr);die;
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

        return view('layouts.master',['arr'=>$arr,'brr'=>$brr]);
    }
}
