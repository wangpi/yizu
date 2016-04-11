<?php

class mayao extends CI_Controller
{
    /*
     * 马遥著
     * 文章接口
    */
//文章列表接口
    public function __construct()
    {
        parent::__construct();
    }

    public function article()
    {


        $models = $this->load->model("mayao_models");
        $arr = $this->mayao_models->articleone();
        echo json_encode($arr);
    }

    //文章所属的分类接口
    public function gettype()
    {
        $models = $this->load->model("mayao_models");
        $brr = $this->mayao_models->getdirection();
        echo json_encode($brr);
    }

    //点击上方分类然后根据类型匹配数据
    public function typearticle()
    {
        $atype = empty($_GET['atype']) ? "" : $_GET['atype'];
        $models = $this->load->model("mayao_models");
        if ($atype == "") {
            $data = array(
                'state' => 100,
                'msg' => '没有该分类文章'

            );
        } else if ($atype == "1") {
            $data = $this->mayao_models->articleone();
        } else {
            $data = $this->mayao_models->gettypearticle($atype);
        }
        echo json_encode($data);
    }

    //文章详情页接口
    public function articlecontent()
    {
        $aid = empty($_GET['aid']) ? "" : $_GET['aid'];
        $models = $this->load->model("mayao_models");
        if ($aid == "") {
            $data = array(
                'state' => 100,
                'msg' => '没有该文章信息'
            );
        } else {
            $data = $this->mayao_models->contentone($aid);
            $clickarticle = $this->mayao_models->clickarticle($aid);
            $clcikcount = count($clickarticle);
            $data['clickarticle'] = $clcikcount;
            $clickcomment = $this->mayao_models->clickcomment($aid);
            if (empty($clickcomment)) {
                $clickcomment = array(
                    'state' => 101,
                    'msg' => '该文章没有评论'
                );
                $data['clickcomment'] = $clickcomment;
            } else {
                $data['clickcomment'] = $clickcomment;
            }
        }
        echo json_encode($data);
    }

    //评论接口
    public function addcomment()
    {
        $aid = empty($_GET['aid']) ? "" : $_GET['aid'];
        $cuser = empty($_GET['cuser']) ? "" : $_GET['cuser'];
        $ctime = empty($_GET['ctime']) ? "" : $_GET['ctime'];
        $ccomment = empty($_GET['ccomment']) ? "" : $_GET['ccomment'];
        if (empty($aid)) {
            $data = array(
                'state' => 100,
                'msg' => '文章id不能为空'
            );
        } else if (empty($cuser)) {
            $data = array(
                'state' => 101,
                'msg' => '评论的用户名称不能为空'
            );
        } else if (empty($ctime)) {
            $data = array(
                'state' => 102,
                'msg' => '评论添加时间不能为空'
            );
        } else if (empty($ccomment)) {
            $data = array(
                'state' => 103,
                'msg' => '评论内容不能为空'
            );
        } else {
            $models = $this->load->model("mayao_models");
            $data = $this->mayao_models->getcomment($aid, $cuser, $ctime, $ccomment);
            if ($data == "1") {
                $data = array(
                    'state' => 200,
                    'msg' => '评论成功'
                );
            }
        }
        echo json_encode($data);
    }

    //回复接口
    public function reply()
    {
        $aid = empty($_GET['aid']) ? "" : $_GET['aid'];
        $cuser = empty($_GET['cuser']) ? "" : $_GET['cuser'];
        $ctime = empty($_GET['ctime']) ? "" : $_GET['ctime'];
        $ccomment = empty($_GET['ccomment']) ? "" : $_GET['ccomment'];
        if (!empty($cuser)) {
            $cuser = "@" . $cuser;
        }
        if (empty($aid)) {
            $data = array(
                'state' => 100,
                'msg' => '文章id不能为空'
            );
        } else if (empty($cuser)) {
            $data = array(
                'state' => 101,
                'msg' => '被回复的用户不能为空'
            );
        } else if (empty($ctime)) {
            $data = array(
                'state' => 102,
                'msg' => '回复添加时间不能为空'
            );
        } else if (empty($ccomment)) {
            $data = array(
                'state' => 103,
                'msg' => '回复内容不能为空'
            );
        } else {
            $models = $this->load->model("mayao_models");
            $data = $this->mayao_models->getcomment($aid, $cuser, $ctime, $ccomment);
            if ($data == "1") {
                $data = array(
                    'state' => 200,
                    'msg' => '回复成功'
                );
            }
        }
        echo json_encode($data);
    }

    //文章搜索接口
    public function articlesearch()
    {
        $models = $this->load->model("mayao_models");
        $d_name = empty($_GET['d_name']) ? "" : $_GET['d_name'];
        $aname = empty($_GET['aname']) ? "" : $_GET['aname'];
        if (!empty($d_name)) {
            $data = $this->mayao_models->articles($d_name);
            if (empty($data)) {
                $data = array(
                    'state' => 100,
                    'msg' => '没有搜索结果'
                );
            }
        } else if (!empty($aname)) {
            $data = $this->mayao_models->articlestwo($aname);
            if (empty($data)) {
                $data = array(
                    'state' => 100,
                    'msg' => '没有搜索结果'
                );
            }

        } else if (empty($d_name) && empty($aname)) {
            if (empty($data)) {
                $data = array(
                    'state' => 100,
                    'msg' => '没有搜索结果'
                );
            }

        }
        echo json_encode($data);
    }
}

