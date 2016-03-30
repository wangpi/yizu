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
        $area=DB::table('area')->where(['parent_id'=>$c_id])->get();
        $area=json_encode($area);
        echo $area;
    }
    public function setown(){
        $nickname=$_POST['nickname'];
        $job=$_POST['job'];
        //$sheng=$_POST['sheng'];
        //$shi=$_POST['shi'];
        $qu=$_POST['qu'];
        $aboutme=$_POST['aboutme'];
        $sex=$_POST['sex'];
        session_start();
        $id=$_SESSION['u_id'];
        //将个人信息修改入库
        $arr=DB::table('user1')
            ->where(['u_id'=>$id])
            ->update(['u_qian'=>$aboutme,
                'u_area'=>$qu,
                'u_sex'=>$sex,
                'u_zhiwei'=>$job,
                'u_name'=>$nickname
            ]);
        if($arr){
            echo "<script>alert('修改成功');location.href='setprofile'</script>";
        }else{
            echo "<script>alert('修改失败');location.href='setprofile'</script>";
        }
    }
    //个人资料之头像修改
    public function setphoto(){
        session_start();
        $uid=$_SESSION['u_id'];
        $arr=DB::table('user1')->where(['u_id'=>$uid])->get();
        return view('set.setphoto',['arr'=>$arr]);
    }
    //换一换
    public function imhuan(){
        //修改当前用户的头像
        session_start();
        $uid=$_SESSION['u_id'];
        $src=$_POST['src'];
        $arr=DB::table('user1')->where(['u_id'=>$uid])->update(['u_photo'=>$src]);
    }
    //用户中心之修改密码
    public function setpwd(){
        return view('set.setpwd');
    }
    public function xiugaimima(){
        session_start();
        $u_id=$_SESSION['u_id'];
        $yuanmi=$_POST['oldpwd'];
        $newmi=$_POST['newpass'];
        $confirm=$_POST['confirm'];
        $arr=DB::table('user1')->where(['u_id'=>$u_id])->get();
        if($arr[0]['u_pwd']==md5($yuanmi)){
            if($yuanmi!=$newmi){
                echo "<script>alert('两次密码不一致');location.href='setpwd'</script>";
            }else{
                echo "<script>alert('修改成功');location.href='setprofile'</script>";
            }
        }else{
            echo "<script>alert('原密码有误');location.href='setpwd'</script>";
        }
    }
    //绑定手机号
    public function setphone(){
        return view('set.phone');
    }
    //绑定邮箱
    public function setemail(){
        session_start();
        $u_id=$_SESSION['u_id'];
        $arr=DB::table('user1')->where(['u_id'=>$u_id])->get();
        return view('set.email',['arr'=>$arr]);
    }
    //上传头像
    public function upload(){
        print_r($_FILES);
    }
}