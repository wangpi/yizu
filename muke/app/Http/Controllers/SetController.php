<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Gregwar\Captcha\CaptchaBuilder;
use DB;


class SetController extends Controller
{
    public function setprofile(){
        //根据用户id查询个人基本信息
        session_start();
        $u_id=$_SESSION['u_id'];
        $arr=DB::table('user1')->where(['u_id'=>$u_id])->get();
        //查询所有的职位
        $zhiwei=DB::table('position')->get();
        $u_zhiwei=DB::table('position')->join("user1","position.pid","=","user1.u_zhiwei")->where(['user1.u_id'=>$u_id])->get();
        //print_r($u_zhiwei);die;\
        //地区查询
        $area=DB::table('area')->where(['parent_id'=>1])->get();
        return view('set.index',['arr'=>$arr,'zhiwei'=>$zhiwei,'u_zhiwei'=>$u_zhiwei,'area'=>$area]);
    }
    public function qu(){
        $c_id=$_POST['c_id'];
        echo $c_id;
    }
}