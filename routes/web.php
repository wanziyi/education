<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// ========================================================前台====================================================================


Route::any("/index/index","Index\IndexController@index");//前台首页
Route::any("/index/course",'Index\IndexController@course');//前台课程
Route::any("/index/article",'Index\IndexController@article');//前台资讯
Route::any("/index/teacher",'Index\IndexController@teacher');//前台讲师
Route::any("/index/mycourse",'Index\IndexController@mycourse');//前台个人信息
Route::any("/index/login",'Index\IndexController@login');//前台登陆
Route::any("/index/reg",'Index\IndexController@reg');//前台注册
Route::any("index/coursefont",'Index\IndexController@coursefont');//前台课程详情
Route::any("index/coursefont1",'Index\IndexController@coursefont1');//前台课程加入学习
Route::any("index/video",'Index\IndexController@video');//前台视频展示
Route::any("index/pagecontact",'Index\IndexController@pagecontact');
Route::any("index/page",'Index\IndexController@page');
Route::any("index/question",'Index\IndexController@question');//前台题库模块
Route::any("index/askarea",'Index\IndexController@askarea');//前台问答模块




// ========================================================后台====================================================================
Route::any("/admin/login",'Admin\AdminController@login');//后台登录
Route::any("/admin/index",'Admin\AdminController@index');//后台首页
Route::any("/course/course_add",'Admin\AdminController@course_add');//后台课程添加
Route::any("/course/course_list",'Admin\AdminController@course_list');//后台课程展示
Route::any("/course/course_del",'Admin\AdminController@course_del');//后台课程删除
Route::any("/course/course_upd",'Admin\AdminController@course_upd');//后台课程修改
Route::any("/course/course_upd_do",'Admin\AdminController@course_upd_do');//后台课程修改执行

Route::any("/question/question_add",'Admin\AdminController@question_add');//后台题库添加
Route::any("/question/question_list",'Admin\AdminController@question_list');//后台题库展示
Route::any("/question/question_del",'Admin\AdminController@question_del');//后台题库删除
Route::any("/question/question_upd",'Admin\AdminController@question_upd');//后台题库修改
Route::any("/question/question_upd_do",'Admin\AdminController@question_upd_do');//后台题库修改执行

Route::any("/info/info_add",'Admin\AdminController@info_add');//后台资讯添加
Route::any("/info/info_list",'Admin\AdminController@info_list');//后台资讯展示
Route::any("/info/info_del",'Admin\AdminController@info_del');//后台课程删除
Route::any("/info/info_upd",'Admin\AdminController@info_upd');//后台课程修改
Route::any("/info/info_upd_do",'Admin\AdminController@info_upd_do');//后台课程修改执行

Route::any("/personal/personal_add",'Admin\AdminController@personal_add');//后台讲师添加
Route::any("/personal/personal_list",'Admin\AdminController@personal_list');//后台讲师展示
Route::any("/personal/personal_del",'Admin\AdminController@personal_del');//后台课程删除
Route::any("/personal/personal_upd",'Admin\AdminController@personal_upd');//后台课程修改
Route::any("/personal/personal_upd_do",'Admin\AdminController@personal_upd_do');//后台课程修改执行

Route::any("/answer/answer_add",'Admin\AdminController@answer_add');//后台问答添加
Route::any("/answer/answer_list",'Admin\AdminController@answer_list');//后台问答展示
Route::any("/answer/answer_del",'Admin\AdminController@answer_del');//后台课程删除
Route::any("/answer/answer_upd",'Admin\AdminController@answer_upd');//后台课程修改
Route::any("/answer/answer_upd_do",'Admin\AdminController@answer_upd_do');//后台课程修改执行

Route::any("/exam/exam_add",'Admin\AdminController@exam_add');//后台考试添加
Route::any("/exam/exam_list",'Admin\AdminController@exam_list');//后台考试展示
Route::any("/exam/exam_del",'Admin\AdminController@exam_del');//后台考试删除
Route::any("/exam/exam_upd",'Admin\AdminController@exam_upd');//后台考试修改
Route::any("/exam/exam_upd_do",'Admin\AdminController@exam_upd_do');//后台考试修改执行

Route::any("/notice/notice_add",'Admin\AdminController@notice_add');//后台公告添加
Route::any("/notice/notice_list",'Admin\AdminController@notice_list');//后台公告展示
Route::any("/notice/notice_del",'Admin\AdminController@notice_del');//后台公告删除
Route::any("/notice/notice_upd",'Admin\AdminController@notice_upd');//后台公告修改
Route::any("/notice/notice_upd_do",'Admin\AdminController@notice_upd_do');//后台公告修改执行


Route::any("/singcho/singcho_add",'Admin\AdminController@singcho_add');//后台单选题添加
Route::any("/singcho/singcho_list",'Admin\AdminController@singcho_list');//后台单选题展示
Route::any("/singcho/singcho_del",'Admin\AdminController@singcho_del');//后台单选题删除
Route::any("/singcho/singcho_upd",'Admin\AdminController@singcho_upd');//后台单选题修改
Route::any("/singcho/singcho_upd_do",'Admin\AdminController@singcho_upd_do ');//后台单选题修改执行

Route::any("/mucho/mucho_add",'Admin\AdminController@mucho_add');//后台单选题添加
Route::any("/mucho/mucho_list",'Admin\AdminController@mucho_list');//后台单选题展示
Route::any("/mucho/mucho_del",'Admin\AdminController@mucho_del');//后台单选题删除
Route::any("/mucho/mucho_upd",'Admin\AdminController@mucho_upd');//后台单选题修改
Route::any("/mucho/mucho_upd_do",'Admin\AdminController@mucho_upd_do ');//后台单选题修改执行