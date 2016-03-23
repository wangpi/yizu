<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use Session;
class HelloController extends Controller
{
    public function Learn(){
    	return view('kecheng');
    }

    public function Index(){
    	$user = session('user');
    	$k_id='1';
    	$sql="select * from zhangjie where k_id = '$k_id'";
    	$re=DB::select($sql);
    	if(empty($user)){
    	//print_r($re);die;
    		return view('index')->with(['name'=>$re,'id'=>$k_id]);
    	}
    }

    public function Go(){
    	//Session::put('key', 'value');
    	 //$user = session('key');
    	 //echo $user;die;
    	$id=$_GET['id'];
    	$sql="select * from zhangjie where k_id = '$id'";
    	$re=DB::select($sql);
   		return view('go')->with(['re'=>$re]);
    }

    public function Golist(){
    	$id=$_POST['name'];
    	$sql="select v_title,v_id from video where z_id = '$id'";
    	$re=DB::select($sql);
    	echo json_encode($re);
    }

    public function Beg(){
    	$user = session('user');
    	if(empty($user)){
    		echo '1';
    	}
    	else{
    		return view('blsh');
    	}
    }

    public function Log(){
    	$log=$_POST['log'];
    	$pass=$_POST['pwd'];
    	$sql="select u_name,u_pwd,u_id from user1  where u_name = '$log'";
    	$re=DB::select($sql);
    	//print_r($re);die;
    	if($re){
    		if($pass==$re['0']['u_pwd']){
    			$_SESSION['user'] = $re['0']['u_name'];
    			$_SESSION['id']=$re['0']['u_id'];
       			return view('blsh');
    		}
    		else{
    			echo "<script>alert('密码错误请重新输入');
    			window.history.go(-1)</script>";
    		}
    	}
    	else{
    		echo "<script>alert('用户名有误');window.history.go(-1)</script>";
    	}

    }

    public function Com(){
    	$text=$_GET['text'];
    	echo $text;
    }
}
