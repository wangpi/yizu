<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Gregwar\Captcha\CaptchaBuilder;
use DB;

class LoginController extends Controller
{
    public function weibo(){
        session_start();

        include_once( './weibosdk/config.php' );
        include_once( './weibosdk/saetv2.ex.class.php' );

        $c = new \SaeTClientV2( WB_AKEY , WB_SKEY ,             $_SESSION['token']['access_token'] );
        $ms  = $c->home_timeline(); // done
        $uid_get = $c->get_uid();
        $uid = $uid_get['uid'];
        $user_message = $c->show_user_by_id( $uid);//根据ID获取用户等基本信息
        $weibo_name=$user_message['screen_name'];
        //print_r($user_message);die;
        //判断数据库中是否有改用户
        $arr=DB::table("user1")->where(['u_name'=>$weibo_name])->get();
        if(empty($arr)){
            //如果为空，注册
            $id = DB::table('user1')->insertGetId(
                array('u_name' => $weibo_name,
                    'u_zhiwei' => 1,
                    'u_photo'=>"./image/8.jpg"
                    )
            );
            $_SESSION['u_id']=$id;
            return redirect('./learn');
        }else{
            //如果不为空，登陆
            $_SESSION['u_id']=$arr[0]['u_id'];
            return redirect('./learn');
        }
    }
}