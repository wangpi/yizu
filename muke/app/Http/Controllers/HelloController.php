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
    public function Learn()
    {
        //微博第三方登录
        include_once( './weibosdk/config.php' );
        include_once( './weibosdk/saetv2.ex.class.php' );

        $o = new \SaeTOAuthV2( WB_AKEY , WB_SKEY );

        $code_url = $o->getAuthorizeURL( WB_CALLBACK_URL );
        //方向查询
        //$direction=DB::table('direction')->get();
        $direction = DB::select("select * from direction");
        //print_r($re);die;
        //分类查询
        //$class = DB::table('class')->get();
        $class = DB::select("select * from classs");
        //print_r($class);die;
        //难度查询
        //$nandu = DB::table('difficulty')->get();
        $nandu = DB::select("select * from difficulty");
        //最新最热
        $hot = DB::table('hot')->get();
        //多条件筛选

        @$nan_id = $_REQUEST['nan_id'];
        @$c_id = $_REQUEST['c_id'];
        @$z_id = $_REQUEST['z_id'];
        @$d_id = $_REQUEST['d_id'];
        $nan_id = $nan_id = "" ? "" : $nan_id;
        $c_id = $c_id = "" ? "" : $c_id;
        $z_id = $z_id = "" ? "" : $z_id;
        $d_id = $d_id = "" ? "" : $d_id;
        $id = array(
            'nan_id' => $nan_id,
            'c_id' => $c_id,
            'z_id' => $z_id,
            'd_id' => $d_id
        );
        //print_r($id);die;
        //$where = "";
        $where = empty($z_id) ? 1 : "z_id like '%$z_id%'";
        $where = empty($nan_id) ? $where : $where . " and nandu_id like '%$nan_id%'";
        $where = empty($c_id) ? $where : $where . " and class_id like '%$c_id%'";
        //列表查询
        $list = DB::select("select * from course inner join difficulty on course.nandu_id=difficulty.d_id where $where limit 20");

       session_start();
        $session_id = session_id();


        //$name="王平";
        if (empty($_SESSION['u_id'])) {
            return view('kecheng', ['direction' => $direction, 'class' => $class, 'nandu' => $nandu, 'list' => $list, 'id' => $id, 'hot' => $hot,'code_url'=>$code_url]);
        } else {
            $id = $_SESSION['u_id'];
            //根据id查询个人信息(两表联查)
            //$arr=DB::table('user1')->join("user2","user1.u_id","=","user2.u_id")->where(['u_name'=>$name])->get();
            $arr = DB::select("select * from user1 where u_id='$id'");
            return view('kecheng', ['direction' => $direction, 'class' => $class, 'nandu' => $nandu, 'arr' => $arr, 'list' => $list, 'id' => $id, 'hot' => $hot,'code_url'=>$code_url]);
        }
    }


    public function Shai(){
        $nan_id = $_REQUEST['nan_id'];
        $c_id = $_REQUEST['c_id'];
        echo $nan_id,$c_id;die;
    }
    public function Fenlei()
    {
        //多条件筛选
        @$nan_id = $_REQUEST['nan_id'];
        @$c_id = $_REQUEST['c_id'];
        @$d_id = $_REQUEST['d_id'];
        @$z_id = $_REQUEST['z_id'];
        $nan_id = $nan_id = "" ? "" : $nan_id;
        $c_id = $c_id = "" ? "" : $c_id;
        $z_id = $z_id = "" ? "" : $z_id;
        $d_id = $d_id = "" ? "" : $d_id;
        $id = array(
            'nan_id' => $nan_id,
            'c_id' => $c_id,
            'z_id' => $z_id,
            'd_id' => $d_id
        );
        if ($d_id == "") {
            $class = DB::select("select * from classs");
            $list = DB::select("select * from course inner join difficulty on course.nandu_id=difficulty.d_id limit 20");
        } else {
            $class = DB::select("select * from classs where d_id='$d_id'");
            $list = DB::select("select * from course inner join difficulty on course.nandu_id=difficulty.d_id where direction_id='$d_id' limit 20");
            //方向查询
            $direction = DB::select("select * from direction");
            //难度查询
            $nandu = DB::select("select * from difficulty");
            $hot = DB::table('hot')->get();
            return view('kecheng', ['direction' => $direction, 'class' => $class, 'nandu' => $nandu, 'id' => $id, 'list' => $list, 'hot' => $hot]);
        }

    }

        public function Login()
        {
            $name = $_REQUEST['name'];
            $pwd = md5($_REQUEST['pwd']);
            //防sql注入
            $arr = array('select', 'insert', 'delete', 'update');
            for ($i = 0; $i < count($arr); $i++) {
                $name = str_replace($arr[$i], ' ', $name);
                $pwd = str_replace($arr[$i], ' ', $pwd);
            }
            //防XSS攻击
            $brr = array('alert');
            for ($i = 0; $i < count($brr); $i++) {
                $name = str_replace($brr[$i], ' ', $name);
                $pwd = str_replace($brr[$i], ' ', $pwd);
            }
            //判断错误次数
            $re = DB::select("select * from user1 where u_email='$name'");
            if ($re) {
                if ($re[0]['u_num'] < 3) {
                    if ($re[0]['u_pwd'] == $pwd) {
                        echo 1;
                        //登陆成功后将u_num变成0
                        $arr = DB::table('user1')
                            ->where('u_email', $name)
                            ->update(['u_num' => 0]);
                        session_start();
                        //$session_id=session_id();


                        //将用户id存session

                        $_SESSION['u_id'] = $re[0]['u_id'];
                    } else {
                        //密码输入错误三次锁定,修改u_num的值，每次加1
                        $u_num = DB::select("select u_num from user1 where u_email='$name'");
                        //print_r($u_num);die;
                        $num = $u_num[0]['u_num'] + 1;
                        $arr = DB::table('user1')
                            ->where('u_email', $name)
                            ->update(['u_num' => $num]);
                        echo 0;
                    }
                } else {
                    echo "该用户已经锁定，请重置密码";
                }
            } else {
                echo 2;
            }
        }

        public
        function denglu()
        {
            return view('denglu');
        }

        public
        function layout()
        {
            session_start();
            unset($_SESSION['u_id']);
            return redirect('/learn');
        }

        public
        function forget()
        {
            return view('forget');
        }

        public
        function captcha($tmp)
        {
            //生成验证码图片的Builder对象，配置相应属性
            $builder = new CaptchaBuilder;
            //可以设置图片宽高及字体
            $builder->build($width = 100, $height = 40, $font = null);
            //获取验证码的内容
            $phrase = $builder->getPhrase();
            //把内容存入session
            //Session::flash('milkcaptcha', $phrase);
            session_start();
            $_SESSION['milkcaptcha'] = $phrase;
            //生成图片
            header("Cache-Control: no-cache, must-revalidate");
            header('Content-Type: image/jpeg');
            $builder->output();
            exit(0);
        }

        public
        function yanzheng()
        {
            session_start();
            //$userInput = \Request::get('captcha');
            $email = $_POST['email'];
            $userInput = $_POST['captcha'];
            //echo $_SESSION['milkcaptcha'];
            if (!empty($_SESSION['milkcaptcha'])) {
                if ($_SESSION['milkcaptcha'] == $userInput) {
                    //用户输入验证码正确,发送邮件
                    $email = md5($_POST['email']);
                    $flag = Mail::send('emails.test', (['name' => $email]), function ($message) {
                        $to = $_POST['email'];
                        $message->to($to)->subject('找回密码');
                    });
                    return view('email');
                } else {
                    //用户输入验证码错误
                    echo "<script>alert('验证码有误');history.go(-1);</script>";
                }
            }
        }

        public
        function zhao()
        {
            $name = $_GET['name'];
            $arr = DB::select("select * from user1 where md5(u_email)='$name'");
            $email = $arr[0]['u_email'];
            return view('zhaohui', ['email' => $email]);
        }

        //邮箱常见问题
        public
        function question()
        {
            return view('question');
        }


        public
        function Index()
        {
            $user = session('user');
            $k_id = $_REQUEST['k_id'];
            $sql = "select * from zhangjie where k_id = '$k_id'";
            $re = DB::select($sql);
            if (empty($user)) {
                //print_r($re);die;
                $sq = "select * from course where c_id='$k_id'";
                $rr = DB::select($sq);
                //print_r($rr);die;
                return view('index')->with(['name' => $re, 'id' => $k_id, 'rr' => $rr]);
            }
        }

        public
        function Go()
        {
            //Session::put('key', 'value');
            //$user = session('key');
            //echo $user;die;
            $id = $_GET['id'];
            $sql = "select * from zhangjie where k_id = '$id'";
            $re = DB::select($sql);
            return view('go')->with(['re' => $re]);
        }


    public function Beg(){
        session_start();
    	if(!isset($_SESSION['user'])){
    		echo '1';
    	}
    	else{
            
          //    $ppo=$_GET['id'];
        	 // $id=$_SESSION['id'];
          //    $sql="select * from user1 where u_id='$id'";
          //    $re=DB::select($sql);
          //    $sq="select * from video where v_id='$ppo'";
          //    $rr=DB::select($sq);
          //    return view('blsh')->with(['re'=>$re,'rr'=>$rr]);
            echo  '2';
    	}
    }

    public function Log(){
    	$log=$_POST['log'];
    	$pass=md5($_POST['pwd']);
    	$sql="select u_name,u_pwd,u_id from user1  where u_name = '$log'";
    	$re=DB::select($sql);
    	//print_r($re);die;
    	if($re){
    		if($pass==$re['0']['u_pwd']){
                session_start();
    			$_SESSION['user'] = $re['0']['u_name'];
    			$_SESSION['id']=$re['0']['u_id'];
       			return redirect('/poh');
    		}
    		else{
    			echo "<script>alert('密码错误请重新输入')";
			}
		}
	}
        public function Golist()
        {
            $id = $_POST['name'];
            $sql = "select v_title,v_id from video where z_id = '$id'";
            $re = DB::select($sql);
            echo json_encode($re);
        }


    public function pohion(){
       session_start();
        $id=$_SESSION['id'];
        $sql="select * from user1 where u_id='$id'";
        $re=DB::select($sql);
        if(!isset($_GET['v_id'])){
            $ppo='1';
        }
        else{
            $ppo=$_GET['v_id'];
        }
        $sq="select * from video where v_id='$ppo'";
        $rr=DB::select($sq);
        $qq="select * from comment inner join user1 on comment.u_id=user1.u_id where v_id='$ppo'";
        $qo=DB::select($qq);
        //print_r($qo);die;
        //print_r($re);die;
        return view('blsh')->with(['re'=>$re,'rr'=>$rr,'qo'=>$qo]);
    }

    public function Com(){
        session_start();
    	$text=$_GET['text'];
        $vi=$_GET['vi'];
        $id=$_SESSION['id'];
        $time=date("Y-m-d H:i:s",time());
        //echo $time;
        $sql="insert into comment(v_id,comment,ctime,u_id) values('$vi','$text','$time','$id')";
        //echo $sql;
        $re=DB::insert($sql);
         if($re){
            echo '1';
        }
         else{
            echo '2';
        }
    	
    }

        public
        function Lian()
        {
            $re = DB::table('liu')->paginate(1);
            return view('lian')->with(['re' => $re]);
        }

        public
        function liko()
        {
            $name = $_GET['name'];
            $sql = "insert into liu(liu) values('$name')";
            $re = DB::insert($sql);
            if ($re) {
                echo '1';
            } else {
                echo '0';
            }
        }

        public
        function del()
        {
            $id = $_GET['id'];
            $sql = "delete from liu where id='$id'";
            $re = DB::insert($sql);
            if ($re) {
                echo "<script>alert('删除成功');</script>";
            } else {
                echo "<script>alert('删除失败');</script>";
            }
        }

        public
        function up()
        {
            $id = $_GET['id'];
            $sql = "select * from liu where id='$id'";
            $re = DB::select($sql);
            // print_r($re);die;
            return view('up')->with(['re' => $re]);
        }

        public
        function que()
        {
            $id = $_POST['bb'];
            $liu = $_POST['aa'];
            $sql = "update liu set liu='$liu' where id= '$id'";
            $re = DB::update($sql);
            if ($re) {
                echo "<script>alert('修改成功');</script>";
            } else {
                echo "<script>alert('修改成功');</script>";
            }

        }

        //修改密码
        public
        function xiugai()
        {
            $email = $_POST['email'];
            $pwd = md5($_POST['newpass']);
            $arr = DB::table('user1')
                ->where('u_email', $email)
                ->update(['u_pwd' => $pwd, 'u_num' => 0]);
            if ($arr) {
                echo '1';
            } else {
                echo '0';
            }
        }

        //注册功能
        public function Register()
        {
            return view('register');
        }

        public function register1()
        {
            $email = $_GET['email'];
            $arr = DB::table('user1')->where(['u_email' => $email])->get();
            if ($arr) {
                echo 0;
            } else {
                echo 1;
            }
        }

        public function zhuce()
        {
            $email = $_POST['email'];
            $pwd = md5($_POST['pwd']);
            $nick = $_POST['nick'];
            $yzm = $_POST['yzm'];
            session_start();
            if (!empty($_SESSION['milkcaptcha'])) {
                if ($_SESSION['milkcaptcha'] == $yzm) {
                    //做添加
                    $sql = "insert into user1(u_name,u_pwd,u_email,u_photo) values('$nick','$pwd','$email','./img/tiger.jpg')";
                    $arr = DB::insert($sql);
                    if ($arr) {
                        echo 1;
                    } else {
                        echo 0;
                    }
                } else {
                    //用户输入验证码错误
                    echo 2;
                }
            }
        }

        public function json(){
            $vi=$_POST['name'];
            $sql="select * from  title inner join user1 on title.u_id=user1.u_id inner join nei title.t_id=nei.t_id where v_id='$v_id'";
            echo $sql;
        }

        public function bi(){
            $vi=$_GET['name'];
            $sql="select * from zan inner join user1 on zan.u_id=user1.u_id where v_id='$vi'";
            //echo $sql;
           $re=DB::select($sql);
           //print_r($re);
            return view('bi')->with(['re' => $re]);
        }

        public function zid(){
            session_start();
            $zid=$_GET['name'];
            $id=$_SESSION['id'];
            $sql="select z_id from z_u where u_id='$id'";
            $re=DB::select($sql);
            if(empty($re)){
               /* $sq="insert into z_u(z_id,u_id) vlues('$zid','$id')";
                $rr=DB::select($sq);
                if($rr){*/
                    echo '1';
                }
                else{
                    echo '3';
                }
            
        }
    }
