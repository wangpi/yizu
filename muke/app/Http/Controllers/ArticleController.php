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

class ArticleController extends Controller
{
    //文章首页
    public function show(){
        //事先定义一个类型为空
         $atypetwo="";
        $atypetwo=empty($_GET['atypetwo'])?"":$_GET['atypetwo'];
        //定义最新为空
        $new="";
        $new=empty($_GET['new'])?"":$_GET['new'];
        //查询direction分类
        $arr=DB::table('direction')->get();
        //定义最热
        $re="";
        $re=empty($_GET['re'])?"":$_GET['re'];
        //查询文章信息
        if(empty($atypetwo)) {
            $article = DB::table("article")->join("direction", "article.atype", "=", "direction.d_id")->get();
        }else{
            $article = DB::table("article")->where('atype','=',$atypetwo)->join("direction", "article.atype", "=", "direction.d_id")->get();
        }
        //每页几个
        $meiye=10;
        //求出总数据
        $zong=count($article);
        //取整
        $quzheng=ceil($zong/$meiye);
        //判断当前页
        if(empty($_GET['page'])){
            $page=1;
        }else{
            $page=$_GET['page'];
        }
        //判断偏移量
        $pianyi=($page-1)*$meiye;
        //判断上一页
        $lastpage=($page-1)<1?1:$page-1;
       //判断下一页
        $nextpage=($page+1)>$quzheng?$quzheng:$page+1;

        if(!empty($new)) {
            $articletwo = DB::table("article")->where('atype','=',$atypetwo)->join("direction", "article.atype", "=", "direction.d_id")->take($meiye)->skip($pianyi)->orderby('aid', 'desc')->get();
        }else if(!empty($re)){
            $articletwo = DB::table("article")->where('atype','=',$atypetwo)->join("direction", "article.atype", "=", "direction.d_id")->take($meiye)->skip($pianyi)->orderby('re', 'desc')->get();

        }else if(empty($new)&&empty($re)&&empty($atypetwo)){
            $articletwo = DB::table("article")->join("direction", "article.atype", "=", "direction.d_id")->take($meiye)->skip($pianyi)->orderby('aid', 'desc')->get();
        }else{
            $articletwo = DB::table("article")->where('atype','=',$atypetwo)->join("direction", "article.atype", "=", "direction.d_id")->take($meiye)->skip($pianyi)->orderby('aid', 'asc')->get();
        }
        //以访问量作为查询条件
        $maxarticle=DB::table("article")->join('direction','direction.d_id','=','article.atype')->orderby('look','=','desc')->take(2)->get();
        //统计信息 然后排名
        $onetwo=DB::select("select aid,auser,aimg, count(auser) as count from article group by auser  ORDER BY count desc limit 3");
//通过session里面的u_id 查询出一些基本信息
        session_start();
        @$u_id=$_SESSION['u_id'];
        $crr=DB::table("user1")->where('u_id','=',$u_id)->get();
        @$u_name=$crr[0]['u_name'];
        //查询点赞数量
        foreach($articletwo as $k=>$v){
            $aa=DB::table('aclick')->where('aid','=',$v['aid'])->get();
            $aacount=count($aa);
            $articletwo[$k]['aclick'] = $aacount;

        }
        //查询评论数量
        foreach($articletwo as $k=>$v){
            $ff=DB::table("acomment")->where('aid','=',$v['aid'])->get();
            $countcomment=count($ff);
            $articletwo[$k]['acomment']=$countcomment;
        }

        return view('article.show',
            ['arr'=>$arr,
            'article'=>$articletwo,
            'nextpage'=>$nextpage,
                'lastpage'=>$lastpage,
             'quzheng'=>$quzheng,
                'page'=>$page,
                'atypetwo'=>$atypetwo,
                'new'=>$new,
                're'=>$re,
                'maxarticle'=>$maxarticle,
                'onetwo'=>$onetwo,
                'crr'=>$crr,
                'u_name'=>$u_name
            ]);
    }
    //文章详情页
    public function articledeta(){
        $aid=$_GET['aid'];
        session_start();
        @$u_id=$_SESSION['u_id'];
        $crr=DB::table("user1")->where('u_id','=',$u_id)->get();
        @ $u_name=$crr[0]['u_name'];
        @$u_photo=$crr[0]['u_photo'];
        //查询他是否点赞
        $aclick=DB::table('aclick')->where(array('aid'=>$aid,'uid'=>$u_id))->get();
        //判断他是否收藏
        $acollection=DB::table('acollection')->where(array('aid'=>$aid,'uid'=>$u_id))->get();
        $article=DB::table("article")->where('aid','=',$aid)->join('direction',"direction.d_id",'=','article.atype')->get();
        $look=$article[0]['look'];
        $looktwo=$look+1;
        //左侧推荐功能
        $auser=$article[0]['auser'];
        $commend=DB::table("article")->where('auser','=',$auser)->take(5)->get();
        $arr=DB::table("article")->where('aid','=',$aid)->update(['look'=>$looktwo]);
        //通过aid查询评论
        $pinglun=DB::table("acomment")->where('aid','=',$aid)->get();
        return view("article.articledeta",['article'=>$article,
            'commend'=>$commend,
            'aclick'=>$aclick,'aid'=>$aid,
            'acollection'=>$acollection,
            'u_name'=>$u_name,
            'u_photo'=>$u_photo,
            'pinglun'=>$pinglun
        ]);

    }
    //添加文章
    public function addarticle(){
        //查询分类
        $direction=DB::table("direction")->get();
        return view('article.addarticle',['direction'=>$direction]);
    }
    //添加文章第二步
    public function addarticletwo(){
        $aname=$_POST['aname'];
        $atype=$_POST['atype'];
        $acontent=$_POST['acontent'];
        $codeone=$_POST['codeone'];
        $aimgname=$_FILES['aimg']['name'];
        $aimg_tmp_name=$_FILES['aimg']['tmp_name'];
        $aimgtwoname=$_FILES['aimgtwo']['name'];
        $aimgtwo_tmp_name=$_FILES['aimgtwo']['tmp_name'];
        session_start();
        $u_id=$_SESSION['u_id'];
        $drr=DB::table("user1")->where('u_id','=',$u_id)->get();
        $auser=$drr[0]['u_name'];
        $auserimgname=$_FILES['auserimg']['name'];
        $auserimg_tmp_name=$_FILES['auserimg']['tmp_name'];
        $atime=date('Y-m-d H:i:s');
        move_uploaded_file($aimg_tmp_name,"G:/web/htdocs/shiyi/muke/images".$aimgname);
        move_uploaded_file($aimgtwo_tmp_name,"G:/web/htdocs/shiyi/muke/images".$aimgtwoname);
        move_uploaded_file($auserimg_tmp_name,"G:/web/htdocs/shiyi/muke/images".$auserimgname);
        $one="www.mkimages.com/".$aimgname;
        $two="www.mkimages.com/".$aimgtwoname;
        $three="www.mkimages.com/".$auserimgname;
       $acontent=str_replace("<p></p>","",$acontent);
        $data=array('aname'=>$aname,'atype'=>$atype,'atime'=>$atime,'auser'=>$auser,'aimg'=>$one,'aimgtwo'=>$two,'auserimg'=>$three,'acontent'=>$acontent,'codeone'=>$codeone);
       $aa= DB::table("article")->insert($data);
     if($aa){
    echo "<script>alert('文章添加成功');location.href='articlethree?atypetwo=$atype'</script>";
     }
    }
    //点赞 判断是否登录
    public function aclick(){
        //根据sessionid 查数据库
        session_start();
        @$u_id=$_SESSION['u_id'];
        $crr=DB::table("user1")->where('u_id','=',$u_id)->get();
        @$u_name=$crr[0]['u_name'];
        $aid=$_POST['aid'];
        if(empty($u_name)){
           echo "1";
        }else{
            $aa=array('uid'=>$u_id,'aid'=>$aid);
            $yy=DB::table('aclick')->where($aa)->get();
            if(empty($yy)) {
                $data = array('uid' => $u_id, 'aid' => $aid);
                DB::table("aclick")->insert($data);
            }
             echo "2";

        }
    }
    //取消赞
    public function noaclick(){
        $aid=$_POST['aid'];
        session_start();
        @$u_id=$_SESSION['u_id'];
        $tt=array('uid'=>$u_id,'aid'=>$aid);
        $aa=DB::table('aclick')->where($tt)->delete();
        if($aa){
            echo "1";
        }
    }
    //收藏
    public function collection(){
        $aid=$_POST['aid'];
        session_start();
        @$u_id=$_SESSION['u_id'];
        $crr=DB::table("user1")->where('u_id','=',$u_id)->get();
        @$u_name=$crr[0]['u_name'];
        if(empty($u_name)){
            echo "1";
        }else{
            $aa=array('uid'=>$u_id,'aid'=>$aid);
            $yy=DB::table('acollection')->where($aa)->get();
            if(empty($yy)) {
                $data = array('uid' => $u_id, 'aid' => $aid);
                DB::table("acollection")->insert($data);
            }
            echo "2";
        }
    }
    //取消收藏
    public function nocollection(){
        $aid=$_POST['aid'];
        session_start();
        @$u_id=$_SESSION['u_id'];
        $tt=array('uid'=>$u_id,'aid'=>$aid);
        $aa=DB::table('acollection')->where($tt)->delete();
        if($aa){
            echo "1";
        }
    }
    //当我想评论给的时候点击框框和按钮判断是否登录
    public function ifdenglu(){
        session_start();
        @$session_id=$_SESSION['u_id'];
        if(empty($session_id)){
            echo "1";
        }
    }
    //评论最高级添加
    public function commentone(){
      $cuser=$_POST['u_name'];
        $ccomment=$_POST['ccomment'];
        $aid=$_POST['aid'];
        $ctime=date('Y-m-d H:i:s');
        $data=array('aid'=>$aid,'cuser'=>$cuser,'ccomment'=>$ccomment,'ctime'=>$ctime);
              $arr = DB::table("acomment")->insert($data);
                  echo "1";
    }
    //回复功能
    public function commenttwo(){
        $aid=$_POST['aid'];
        $cuser=$_POST['cuser'];
        $ccomment=$_POST['ccomment'];
        $cuser="@".$cuser;

        $ctime=date('Y-m-d H:i:s');
        session_start();
        @$u_id=$_SESSION['u_id'];
        if(empty($u_id)){
            echo "1";
        }else{
            $data=array('cuser'=>$cuser,'aid'=>$aid,'ccomment'=>$ccomment,'ctime'=>$ctime);
            $ee=DB::table("acomment")->insert($data);
           if($ee){
               echo "2";
           }
        }
    }
}