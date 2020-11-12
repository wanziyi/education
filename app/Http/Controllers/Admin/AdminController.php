<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(){
        return view("admin.login");
    }//后台登录
    public function index(){
        return view("admin.index");
    }//后台首页
    public function course_add(){
        return view("course.course_add");
    }//后台课程添加
    public function course_list(){
        return view("course.course_list");
    }//后台课程展示
    public function course_del(){
        return view("course.course_add");
    }//后台课程删除
    public function course_upd(){
        return view("course.course_add");
    }//后台课程修改
    public function course_upd_do(){
        return view("course.course_add");
    }//后台课程修改执行
    public function question_add(){
        return view("question.question_add");
    }//后台题库添加
    public function question_list(){
        return view("question.question_list");
    }//后台题库展示
    public function question_del(){
        return view("question.question_add");
    }//后台题库删除
    public function question_upd(){
        return view("question.question_add");
    }//后台题库修改
    public function question_upd_do(){
        return view("question.question_add");
    }//后台题库修改执行
    public function info_add(){
        return view("info.info_add");
    }//后台资讯添加
    public function info_list(){
        return view("info.info_list");
    }//后台资讯展示
    public function info_del(){
        return view("info.info_add");
    }//后台资讯删除
    public function info_upd(){
        return view("info.info_add");
    }//后台资讯修改
    public function info_upd_do(){
        return view("info.info_add");
    }//后台资讯修改执行
    public function personal_add(){
        return view("personal.personal_add");
    }//后台讲师添加
    public function personal_list(){
        return view("personal.personal_list");
    }//后台讲师展示
    public function personal_del(){
        return view("personal.personal_add");
    }//后台讲师删除
    public function personal_upd(){
        return view("personal.personal_add");
    }//后台讲师修改
    public function personal_upd_do(){
        return view("personal.personal_add");
    }//后台讲师修改执行
}
