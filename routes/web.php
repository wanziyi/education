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
Route::any("/index/upload",'Index\IndexController@upload');
Route::any("/index/mycourses",'Index\IndexController@mycourses');
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
Route::any("/admin/logindo",'Admin\AdminController@logindo');//后台登录
Route::any("/admin/logindel",'Admin\AdminController@logindel');//后台登录
Route::any("/admin/index",'Admin\AdminController@index');//后台首页
Route::any("/course/course_add",'Admin\AdminController@course_add');//后台课程添加
Route::any("/course/course_list",'Admin\AdminController@course_list');//后台课程展示
Route::any("/course/course_del",'Admin\AdminController@course_del');//后台课程删除
Route::any("/course/course_upd",'Admin\AdminController@course_upd');//后台课程修改
Route::any("/course/course_upd_do",'Admin\AdminController@course_upd_do');//后台课程修改执行

Route::any("/question/question_add",'Admin\AdminController@question_add');//后台题库添加
Route::any("/question/question_list",'Admin\AdminController@question_list');//后台题库展示
Route::any("/question/question_del",'Admin\AdminController@question_del');//后台课程删除
Route::any("/question/question_upd",'Admin\AdminController@question_upd');//后台课程修改
Route::any("/question/question_upd_do",'Admin\AdminController@question_upd_do');//后台课程修改执行

Route::any("/info/info_add",'Admin\AdminController@info_add');//后台资讯添加
Route::any("/info/info_list",'Admin\AdminController@info_list');//后台资讯展示
Route::any("/info/info_del",'Admin\AdminController@info_del');//后台课程删除
Route::any("/info/info_upd",'Admin\AdminController@info_upd');//后台课程修改
Route::any("/info/info_upd_do",'Admin\AdminController@info_upd_do');//后台课程修改执行

Route::any("/personal/personal_add",'Admin\AdminController@personal_add');//后台讲师添加
Route::any("/personal/personal_uploade",'Admin\AdminController@personal_uploade');//文件上传
Route::any("/personal/personal_Do",'Admin\AdminController@personal_Do');//添加执行
Route::any("/personal/upload",'Admin\AdminController@upload');
Route::any("/personal/personal_list",'Admin\AdminController@personal_list');//后台讲师展示
Route::any("/personal/personal_del",'Admin\AdminController@personal_del');//后台课程删除
Route::any("/personal/personal_up/{per_id}",'Admin\AdminController@personal_up');//后台课程修改
Route::any("/personal/personal_upd_do",'Admin\AdminController@personal_upd_do');//后台课程修改执行

Route::any("/answer/answer_add",'Admin\AdminController@answer_add');//后台问答添加
Route::any("/answer/answer_list",'Admin\AdminController@answer_list');//后台问答展示
Route::any("/answer/answer_del",'Admin\AdminController@answer_del');//后台课程删除
Route::any("/answer/answer_upd",'Admin\AdminController@answer_upd');//后台课程修改
Route::any("/answer/answer_upd_do",'Admin\AdminController@answer_upd_do');//后台课程修改执行

Route::any("/admin/mycourse",'Admin\AdminController@mycourse');//信息展示

Route::any("/rbac/priv","Admin\AdminController@priv");//权限
Route::any("/rbac/privDo","Admin\AdminController@privDo");//权限执行
Route::any("/rbac/priv_list","Admin\AdminController@priv_list");//权限展示
Route::any("/rbac/priv_del","Admin\AdminController@priv_del");//权限删除
Route::any("/rbac/priv_up/{id}","Admin\AdminController@priv_up");//权限修改
Route::any("/rbac/priv_upDo","Admin\AdminController@priv_upDo");//权限修改执行
