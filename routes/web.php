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

Route::any("/coursedata/coursedata_add",'Admin\CoursedataController@coursedata_add');//后台课程资料添加
Route::any("/coursedata/coursedata_list",'Admin\CoursedataController@coursedata_list');//后台课程资料展示
Route::any("/coursedata/coursedata_del",'Admin\CoursedataController@coursedata_del');//后台课程资料删除
Route::any("/coursedata/coursedata_upd/{cd_id}",'Admin\CoursedataController@coursedata_upd');//后台课程资料修改
Route::any("/coursedata/coursedata_upd_do",'Admin\CoursedataController@coursedata_upd_do');//后台课程资料修改执行

Route::any("/question/question_add",'Admin\AdminController@question_add');//后台题库添加
Route::any("/question/question_list",'Admin\AdminController@question_list');//后台题库展示
Route::any("/question/question_del",'Admin\AdminController@question_del');//后台课程删除
Route::any("/question/question_upd",'Admin\AdminController@question_upd');//后台课程修改
Route::any("/question/question_upd_do",'Admin\AdminController@question_upd_do');//后台课程修改执行

Route::any("/info/info_add",'Admin\InfoController@info_add');//后台资讯添加
Route::any("/info/info_list",'Admin\InfoController@info_list');//后台资讯展示
Route::any("/info/info_del",'Admin\InfoController@info_del');//后台资讯删除
Route::any("/info/info_upd/{info_id}",'Admin\InfoController@info_upd');//后台资讯修改
Route::any("/info/info_upd_do",'Admin\InfoController@info_upd_do');//后台资讯修改执行

Route::any("/infocate/infocate_add",'Admin\InfocateController@infocate_add');//后台资讯分类添加
Route::any("/infocate/infocate_list",'Admin\InfocateController@infocate_list');//后台资讯分类展示
Route::any("/infocate/infocate_del",'Admin\InfocateController@infocate_del');//后台资讯分类删除
Route::any("/infocate/infocate_upd/{cate_id}",'Admin\InfocateController@infocate_upd');//后台资讯分类修改
Route::any("/infocate/infocate_upd_do",'Admin\InfocateController@infocate_upd_do');//后台资讯分类修改执行

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

Route::any("/navigation/navigation_add",'Admin\NavController@navigation_add');//后台导航栏添加
Route::any("/navigation/navigation_list",'Admin\NavController@navigation_list');//后台导航栏展示
Route::any("/navigation/navigation_del",'Admin\NavController@navigation_del');//后台导航栏删除
Route::any("/navigation/navigation_upd/{nav_id}",'Admin\NavController@navigation_upd');//后台导航栏修改
Route::any("/navigation/navigation_upd_do",'Admin\NavController@navigation_upd_do');//后台导航栏修改执行

Route::any("/links/links_add",'Admin\LinksController@links_add');//友情链接添加
Route::any("/links/links_list",'Admin\LinksController@links_list');//友情链接展示
Route::any("/links/links_del",'Admin\LinksController@links_del');//友情链接删除
Route::any("/links/links_upd/{links_id}",'Admin\LinksController@links_upd');//友情链接修改
Route::any("/links/links_upd_do",'Admin\LinksController@links_upd_do');//友情链接修改执行
