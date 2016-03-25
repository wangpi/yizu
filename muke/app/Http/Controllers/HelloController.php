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

class HelloController extends Controller
{
    public function Learn(){
    	//方向查询
    	//$direction=DB::table('direction')->get();
        $direction=DB::select("select * from direction");
    	//print_r($re);die;
    	//分类查询
    	//$class = DB::table('class')->get();
        $class=DB::select("select * from class");
    	//print_r($class);die;
    	//难度查询
    	//$nandu = DB::table('difficulty')->get();
        $nandu=DB::select("select * from difficulty");
        $list = DB::select("select * from course inner join difficulty on course.direction_id=difficulty.d_id limit 20");
        $nan_id = "";
        $c_id = "";
        $d_id = "";
        $id = array(
                'nan_id'=>$nan_id,
                'c_id'=>$c_id,
                'd_id'=>$d_id
            );
        //print_r($id);die;
        session_start();
        $session_id=session_id();

        //$name="王平";
        if(empty($_SESSION['name'])){
            return view('kecheng',['direction'=>$direction,'class'=>$class,'nandu'=>$nandu,'list'=>$list,'id'=>$id]);
        }else{
            $name=$_SESSION['name'];
            //根据名称查询个人信息
            $arr=DB::select("select * from user1 where u_name='$name'");
            return view('kecheng',['direction'=>$direction,'class'=>$class,'nandu'=>$nandu,'name'=>$name,'arr'=>$arr,'list'=>$list,'id'=>$id]);
        }
    }
    public function Shai(){
        $nan_id = $_REQUEST['nan_id'];
        $c_id = $_REQUEST['c_id'];
        echo $nan_id,$c_id;die;
    }
    public function Fenlei(){
    	$d_id = $_REQUEST['d_id'];
    	if ($d_id==0) {
            $class=DB::select("select * from class");
    	}else{
    		$class = DB::select("select * from class where d_id='$d_id'");
    	}
    	//方向查询
        $direction=DB::select("select * from direction");
    	//难度查询
        $nandu=DB::select("select * from difficulty");
    	return view('kecheng',['direction'=>$direction,'class'=>$class,'nandu'=>$nandu]);
    }
    public function Login(){
        $name=$_REQUEST['name'];
        $pwd=$_REQUEST['pwd'];
        //防sql注入
        $arr=array('select','insert','delete','update');
        for($i=0;$i<count($arr);$i++){
            $name=str_replace($arr[$i],' ',$name);
            $pwd=str_replace($arr[$i],' ',$pwd);
        }
        //防XSS攻击
        $brr=array('alert');
        for($i=0;$i<count($brr);$i++){
            $name=str_replace($brr[$i],' ',$name);
            $pwd=str_replace($brr[$i],' ',$pwd);
        }
        //判断错误次数
        $re=DB::select("select * from user1 where u_name='$name'");
        if($re){
            if($re[0]['u_num']<3){
                if($re[0]['u_pwd']==$pwd){
                    echo 1;
                    //登陆成功后将u_num变成0
                    $arr=DB::table('user1')
                        ->where('u_name', $name)
                        ->update(['u_num' => 0]);
                    session_start();
                    //$session_id=session_id();
                    //将用户名存session
                    $_SESSION['name']=$name;
                }else{
                    //密码输入错误三次锁定,修改u_num的值，每次加1
                    $u_num=DB::select("select u_num from user1 where u_name='$name'");
                    //print_r($u_num);die;
                    $num=$u_num[0]['u_num']+1;
                    $arr = DB::table('user1')
                        ->where('u_name', $name)
                        ->update(['u_num' => $num]);
                    echo 0;
                }
            }else{
                echo "该用户已经锁定，请重置密码";
            }
        }else{
            echo 2;
        }
    }
    public function layout(){
        session_start();
        unset($_SESSION['name']);
        //方向查询
        //$direction=DB::table('direction')->get();
        $direction=DB::select("select * from direction");
        //print_r($re);die;
        //分类查询
        //$class = DB::table('class')->get();
        $class=DB::select("select * from class");
        //print_r($class);die;
        //难度查询
        //$nandu = DB::table('difficulty')->get();
        $nandu=DB::select("select * from difficulty");
            return view('kecheng',['direction'=>$direction,'class'=>$class,'nandu'=>$nandu]);
    }
    public function forget(){
        return view('forget');
    }

    public function captcha($tmp){
    //生成验证码图片的Builder对象，配置相应属性
    $builder = new CaptchaBuilder;
    //可以设置图片宽高及字体
    $builder->build($width = 100, $height = 40, $font = null);
     //获取验证码的内容
     $phrase = $builder->getPhrase();
      //把内容存入session
      //Session::flash('milkcaptcha', $phrase);
        session_start();
        $_SESSION['milkcaptcha']=$phrase;
       //生成图片
       header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();
        exit(0);
     }
    public function yanzheng(){
        session_start();
        //$userInput = \Request::get('captcha');
        $email=$_POST['email'];
        $userInput=$_POST['captcha'];
        //echo $_SESSION['milkcaptcha'];
        if(!empty($_SESSION['milkcaptcha'] )){
            if ($_SESSION['milkcaptcha'] == $userInput) {
                //用户输入验证码正确,发送邮件
                $email=md5($_POST['email']);
                $flag = Mail::send('emails.test',(['name'=>$email]),function($message){
                    $to = $_POST['email'];
                    $message ->to($to)->subject('找回密码');
                });
                return view('email');
        } else {
                //用户输入验证码错误
                echo "<script>alert('验证码有误');history.go(-1);</script>";
            }
        }
    }
    public function zhao(){
        $name=$_GET['name'];
        $arr=DB::select("select * from user1 where md5(u_email)='$name'");
        $email=$arr[0]['u_email'];
        return view('zhaohui',['email'=>$email]);
    }
    //邮箱常见问题
    public function question(){
        return view('question');
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
    	
    }

    public function Lian(){
    	$re=DB::table('liu')->paginate(1);
    	return view('lian')->with(['re'=>$re]);
    }

    public function liko(){
    	$name=$_GET['name'];
    	$sql="insert into liu(liu) values('$name')";
    	$re=DB::insert($sql);
    	if($re){
    		echo '1';
    	}
    	else{
    		echo '0';
    	}
    }

    public function del(){
    	$id=$_GET['id'];
    	$sql="delete from liu where id='$id'";
    	$re=DB::insert($sql);
    	if($re){
    		echo "<script>alert('删除成功');</script>";
    	}
    	else{
    		echo "<script>alert('删除失败');</script>";
    	}
    }

    public function up(){
    	$id=$_GET['id'];
    	$sql="select * from liu where id='$id'";
    	$re=DB::select($sql);
       // print_r($re);die;
    	return view('up')->with(['re'=>$re]);
    }

    public function que(){
        $id=$_POST['bb'];
        $liu=$_POST['aa'];
        $sql="update liu set liu='$liu' where id= '$id'";
        $re=DB::update($sql);
        if($re){
            echo "<script>alert('修改成功');</script>";
        }
        else{
            echo "<script>alert('修改成功');</script>";
        }

    }

    //修改密码
    public function xiugai(){
        $email=$_POST['email'];
        $pwd=$_POST['newpass'];
        echo $email;

    }
}
