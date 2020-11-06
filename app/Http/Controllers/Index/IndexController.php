<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view("index.index");
    }//前台首页
    public function course(){
        return view("index.course");
    }//前台课程
    public function article(){
        return view("index.article");
    }//前台资讯
    public function teacher(){
        return view("index.teacher");
    }//前台讲师
    public function mycourse(){
        return view("index.mycourse");
    }//前台个人信息
    public function login(){
        return view("index.login");
    }//前台登录
    public function reg(){
        return view("index.reg");
    }//前台注册
    public function coursefont(){
        return view("index/coursefont");
    }//前台课程详情
    public function coursefont1(){
        return view("index/coursefont1");
    }//前台课程加入学习
    public function video(){
        return view("index/video");
    }//前台视频展示
    public function pagecontact(){
        return view("index/pagecontact");
    }
    public function page(){
        return view("index/page");
    }
    public function question(){
        return view("index/question");
    }//前台题库
    public function askarea(){
        return view("index/askarea");
    }//前台问答模块
}
